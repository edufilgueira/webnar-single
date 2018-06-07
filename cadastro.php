<?php


if (isset($_REQUEST['lista']) && !empty($_REQUEST['lista'])) {

  $lista = $_REQUEST['lista'];
  $arrLista = preg_split("[;]",$lista);
  $texto = "";
  
  for ($i=0; $i < count($arrLista) ; $i++){ 
	$texto = $texto.$arrLista[$i].";";
  }

  $texto =  substr($texto,0,-1);
  
  		//ESCREVE NO ARQUIVO
		$file = @fopen("loja-pagseguro.txt", "w+");
		@fwrite($file, $texto);
		@fclose($file);
		
		gerar();
  
}

function gerar(){
	

	$index = "";

	//CARREGA A PAGINA INDEX
	$ponteiro = fopen ("index.php","r");
	while (!feof ($ponteiro)) {
	  $linha = fgets($ponteiro,4096);
	  $index = $index.$linha;
	}
	fclose ($ponteiro);


	//PERCORRE O ARQUIVO
	$ponteiro = fopen ("loja-pagseguro.txt","r");
	while (!feof ($ponteiro)) {
		$linha = fgets($ponteiro,4096);
		
		$linha = str_replace(";", "", $linha);
		$linha = str_replace("\n", "", $linha);
		$linha = str_replace("\r", "", $linha);
		echo $linha."<br>";
		$valores = preg_split("[:]",$linha);
		
		
		$facebook = $valores[0];
		$whatsapp = $valores[1];
		$nome = strtolower($valores[2]);
		$email = strtolower($valores[3]);
		
		$index = str_replace("EMAILDODISTRIBUIDOR",$email,$index);
		$index = str_replace("FACEBOOK",$facebook,$index);
		$index = str_replace("WHATSAPP",$whatsapp,$index);
		
		copyr("./_modelo", "./".$nome."/");

		//ESCREVE NO ARQUIVO
		$file = @fopen($nome."/index.php", "w+");
		@fwrite($file, $index);
		@fclose($file);
		
		$index = str_replace($email,"EMAILDODISTRIBUIDOR",$index);
		$index = str_replace($facebook,"FACEBOOK",$index);
		$index = str_replace($whatsapp,"WHATSAPP",$index);
		

	}
	fclose ($ponteiro);

}



/*
* Copiar todos os arquivos e subdiretórios dentro de um diretório
*
* @Autor: Aidan Lister <aidan ARROBA php.net>
* @Tradução: Tiago Passos <voxtiago ARROBA gmail.com>
* @versão 1.0.1
* @parâmetro de origem: $source
* @parâmetro de destino: $dest
* @retorna TRUE se houver sucesso e FALSE se houver erro
* @Exemplo de uso: copyr("site","backup_site");
*/
 
function copyr($source, $dest)
{
   // COPIA UM ARQUIVO
   if (is_file($source)) {
      return copy($source, $dest);
   }
 
   // CRIA O DIRETÓRIO DE DESTINO
   if (!is_dir($dest)) {
      mkdir($dest);
      //echo "DIRET&Oacute;RIO $dest CRIADO<br />";
   }
 
   // FAZ LOOP DENTRO DA PASTA
   $dir = dir($source);
   while (false !== $entry = $dir->read()) {
      // PULA "." e ".."
      if ($entry == '.' || $entry == '..') {
         continue;
      }
 
      // COPIA TUDO DENTRO DOS DIRETÓRIOS
      if ($dest !== "$source/$entry") {
         copyr("$source/$entry", "$dest/$entry");
         //echo "COPIANDO $entry de $source para $dest <br />";
      }
   }
 
   $dir->close();
   return true;
   
}


	$pessoas = "";
	$ponteiro = fopen ("loja-pagseguro.txt","r");
	while (!feof ($ponteiro)) {
	  $linha = fgets($ponteiro,4096);
	  $pessoas = $pessoas.$linha;
	}
	fclose ($ponteiro);


?>
<html lang="pt-BR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Saúde Financeira para todas as Pessoas</title>
<meta property="og:type" content="article" />
<meta property="og:url" content="http://saudevida.life" />
<meta property="og:title" content="Saúde Financeira para todas as Pessoas &mdash; Saúde Diamante" />
</head>
<body>
<form method="post">

<textarea rows="20" name="lista" style="width: 100%;"><?php echo $pessoas ?></textarea>
<input type="submit" value="salvar" />

</form>
</body>
</html>