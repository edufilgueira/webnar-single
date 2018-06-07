<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});
//DATA ATUAL DO SERVIDOR
$app->get('/dataatual', function(Request $request, Response $response){
	echo date ("Y-m-d H:m:s");
});

$app->get('/listaragenda', function($request, $response){
	$json = '{"1":"9:30","2":"10:00","3":"10:30","4":"11:00","5":"13:00","6":"13:30","7":"14:00","8":"14:30","9":"15:00","10":"15:30","11":"16:00","12":"16:30","13":"17:00","14":"17:30","15":"18:00"}';
	echo $json;
});

$app->post('/buscarultimoschats', function($request, $response){
	$dados = $request->getParsedBody();
	$datahora=$dados['dataultimochat'];
	$json = buscarUltimosChats($datahora);
	echo json_encode($json);
});

$app->post('/salvarusuario', function(Request $request, Response $response){
	$dados = $request->getParsedBody();
	$nome = $dados['nome'];
	$whatsapp = $dados['whatsapp'];
	$agenda = $dados['agenda'];
	salvarParticipante($nome,$whatsapp,$agenda);
});

$app->post('/salvarchat', function(Request $request, Response $response){
	$dados = $request->getParsedBody();
	$nome = $dados['nome'];
	$whatsapp = $dados['whatsapp'];
	$texto = $dados['texto'];
	salvarchat($nome,$whatsapp,$texto);
});

$app->post('/buscardialogo', function(Request $request, Response $response){
	$dados = $request->getParsedBody();
	$tipo = $dados['tipo'];
	$limit = $dados['limit'];
	$json = buscarDialogo($tipo, $limit);
	echo json_encode($json);
});

$app->post('/buscarparticipantes', function(Request $request, Response $response){
	$dados = $request->getParsedBody();
	$data = $dados['data'];
	$agenda = $dados['agenda'];
	$json = buscarParticipantes($data, $agenda);
	echo json_encode($json);
});

$app->get('/sortearparticipantesrand/{qtd}', function(Request $request, Response $response){
	$qtd  = $request->getAttribute('qtd');
	$json = sortearParticipantesRand($qtd);
	echo json_encode($json);
});


function salvarParticipante($nome,$whatsapp,$agenda){
	date_default_timezone_set('America/Sao_Paulo');
	$sql = "INSERT INTO tb_participante_par (nome,whatsapp,agenda,data) VALUES (:nome,:whatsapp,:agenda,NOW())";

	if(!existeParticipante($whatsapp,$agenda,date('Y-m-d')))
	{
		try{
		$dbh = new db();
		$dbh = $dbh->connect();
		
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam( ':nome', $nome );
		$stmt->bindParam( ':whatsapp', $whatsapp );
		$stmt->bindParam( ':agenda', $agenda );
		$result = $stmt->execute();		
			
		return "ADD com sucesso";
		} catch(PDOException $e){
			echo '{"error": {"text": '.$e->getMessage().'}';
		}   
	}
}

function existeParticipante($whatsapp,$agenda,$data)
{    
	$sql = "SELECT * FROM tb_participante_par where 
			whatsapp = '$whatsapp' and agenda = '$agenda' and DATE(data) = '$data'";
	//echo $sql;
    try{
        $dbh = new db();
        $dbh = $dbh->connect();
		$resultado = $dbh->query($sql);
		$contador = $resultado->rowCount();
        return ($contador > 0) ? true:false;
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
	
}

function salvarChat($nome,$whatsapp,$texto){
	$sql = "INSERT INTO tb_chat_cha (nome,whatsapp,texto,data) VALUES (:nome,:whatsapp,:texto,NOW())";

	try {
		try{
			$dbh = new db();
			$dbh = $dbh->connect();
			
			$stmt = $dbh->prepare($sql);
			$stmt->bindParam( ':nome', $nome );
			$stmt->bindParam( ':whatsapp', $whatsapp );
			$stmt->bindParam( ':texto', $texto );
			$result = $stmt->execute();		
			
			return "ADD";
		} catch(PDOException $e){
			echo '{"error": {"text": '.$e->getMessage().'}';
		}   
		 

	 
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

}


function buscarUltimosChats($data){
	$sql = "SELECT * from `tb_chat_cha` WHERE data > '$data' order by data desc";

    try{
        $dbh = new db();
        $dbh = $dbh->connect();
		$resultado = $dbh->query($sql);
		$arr_data = array(); 
        while($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            array_push($arr_data, $row);
        }
        return $arr_data;
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
}

function buscarParticipantes($data, $agenda){
	$sql = "SELECT id, nome, agenda, data from `tb_participante_par` 
			WHERE agenda = '$agenda' and DATE(data) = '$data'
			ORDER BY data asc";

    try{
        $dbh = new db();
        $dbh = $dbh->connect();
		$resultado = $dbh->query($sql);
		$arr_data = array(); 
        while($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            array_push($arr_data, $row);
        }
        return $arr_data;
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
}

function buscarDialogo($tipo, $limit){
	$sql = "SELECT * from tb_chat_rand_cra WHERE tipo = '$tipo' ORDER BY RAND()";

    try{
        $dbh = new db();
        $dbh = $dbh->connect();
		$resultado = $dbh->query($sql);
		$arr_data = array(); 
        while($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            array_push($arr_data, $row);
        }
		$arr_rand = array(); 
		$tamanho = count($arr_data);
		for($i=0;$i < $limit; $i++)
		{
			$num = mt_rand(0,$tamanho-1);
			array_push($arr_rand, $arr_data[$num]);
		}

        return $arr_rand;
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }	
}

function sortearParticipantesRand($qtd){
	$limit = mt_rand($qtd,$qtd + (int)($qtd/2));
	$sql = "SELECT * from tb_chat_rand_cra ORDER BY RAND() limit $limit";

    try{
        $dbh = new db();
        $dbh = $dbh->connect();
		$resultado = $dbh->query($sql);
		$arr_data = array(); 
        while($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            array_push($arr_data, $row);
        }
        return $arr_data;
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }	
}



?>