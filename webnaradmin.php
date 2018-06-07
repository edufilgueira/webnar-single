<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Saúde Financeira para todas as Pessoas</title>
<meta property="og:type" content="article" />
<meta property="og:url" content="http://saudevida.life" />
<meta property="og:title" content="Saúde Financeira para todas as Pessoas &mdash; Saúde Diamante" />
<link rel='stylesheet' id='optimizepress-page-style-css'  href='_css/style.min.css?ver=2.5.12' type='text/css' media='all' />
<link rel='stylesheet' id='optimizepress-default-css'  href='_css/default.min.css?ver=2.5.12' type='text/css' media='all' />
<script src="_modelo/js/jquery-3.3.1.min.js"></script>
<script src="_js/js.js"></script>
<link rel="stylesheet" href="_bootstrap/css/bootstrap.css"/>	
<script src="_bootstrap/js/bootstrap.min.v4.0.0-beta.3.js"></script>

<link rel='stylesheet' id='op_header_css-default-css'  href='_css/css.css' type='text/css' media='all' />

<script type="text/javascript">
//<![CDATA[
window.__cfRocketOptions = {byc:0,p:0,petok:"c2dea6855f209ad8e4ff00f84e2cbe4107a0b692-1519190216-1800"};
//]]>
</script>

<style type="text/css">

		.countdownContainer{
			/*position: absolute;
			top: 60%;
			left: 50%;
			transform: translateX(-50%) translateY(-50%);*/
			text-align: center;
			background: #ddd;
			/* border: 1px solid #999; */
			padding: 20px;
			box-shadow: 0px 1px 6px 2px #ccc;
			color: #932c8b;
			border-radius: 12px;
		
		}

		.info {
			font-size: 60px;
		}
		
		#greetingMsg{
			/*color: #fff;*/
			font-size: 18px;
			text-align: center;
			font-weight: bold;			
		}
</style>

</head>
<script>


</script>
<body>

<div style="border-bottom: solid 1px #d2d4d8; background-color:#5a1f7d; height:50px;margin-bottom: 10px;">
	<div class="op-logo">
		<center><img src="_modelo/img/logo.INLINE.OMNILIFE.png" alt="Saúde Diamante" /></center>
	</div> 		
</div>



<div id="sala-de-espera">
	<div class="container">
	  <div class="row">
		  <div class="col-sm-9 borda-view1 barra-rolagem" id="recepcao"> 
			  <div id="balcao" 	style="display:none">
			  
				<div style="border-bottom:solid 1px  #d2d4d8; margin-bottom: 10px; padding-top: 5px;padding-left: 8px;">
				<span class="glyphicon glyphicon-menu-right">AGUARDE:</span>
					<span>Em instantes iniciaremos mais uma conferência com Eduardo Filgueira</span><br>
					<span style="font-style: italic;font-size: 11px;font-weight: bold;">Analista de Sistemas e Empresário Individual</span>
				</div>	
		  
				
				<div style="text-align:center; padding-left: 10px;padding-right: 10px;">
					<H1 style="color: #932c8b;">Como construir um negócio lucrativo com zero de investimento?</H1><br>
					<p  style="color: #5a1f7d;">Esta conferência vai te mostrar que é possível você ser bem recompensado 
					trabalhando ajudando a pessoas a viver bem no aspecto vida saldável, principalmente 
					na área da saúde, sem a necessidade de possuir diploma nem ensino superior, e o 
					melhor, sem investimento inicial. Aproveite!</p><br><br>
				
				<center><table id="countdownContainer" class="countdownContainer">
				<tr class="info">
				<td colspan="4"></td>
				</tr>
				<tr class="info">
				<td id="days" style="padding-left: 17px;">&nbsp; &nbsp;</td>
				<td id="hours">&nbsp; &nbsp;</td>
				<td id="minutes">&nbsp; &nbsp;</td>
				<td id="seconds" style="padding-right: 17px;">&nbsp; &nbsp;</td>
				</tr>

				</table>

				<BR>
				<img style="width: 90px;" src="_img/emporiodobolo.png" alt="Saúde Diamante" />

				</center>
				<div id="greetingMsg" style="display:none;">Estamo On-line</div>
				<script type="text/rocketscript">
					function stop(){
						$("#ytplayer").attr('src', $("#ytplayer").attr('src') + '&autoplay=1'); 
					}
					
					function dataAtualFormatada(){
						var data = new Date();
						var dia = data.getDate();
						if (dia.toString().length == 1)
						  dia = "0"+dia;
						var mes = data.getMonth()+1;
						if (mes.toString().length == 1)
						  mes = "0"+mes;
						var ano = data.getFullYear();  
						return mes+"/"+dia+"/"+ano;
					}
					
					function dataAtualFormatadaParaBanco(){
						var data = new Date();
						var dia = data.getDate();
						if (dia.toString().length == 1)
						  dia = "0"+dia;
						var mes = data.getMonth()+1;
						if (mes.toString().length == 1)
						  mes = "0"+mes;
						var ano = data.getFullYear();  
						return ano+"-"+mes+"-"+dia;
					}
					
					//CARREGA O SELECT DE AGENDA
					function carregarHorarioSelect() {
						dataAtual = new Date();
						meioDiaString = dataAtualFormatada()+" "+"12:00";
						meioDia = new Date(meioDiaString);
						$.ajax({
							type: "get",
							url: "_src/api.php/listaragenda",
							success: function (obj) {
							
								if (obj != null) 
								{
									var data = JSON.parse(obj);
									var selectbox = $('#agenda');
									selectbox.find('option').remove();
									
									$('<option>').val("0").text("Escolha um horário").appendTo(selectbox);
									$.each(data, function (i, d) {
										$('<option>').val(d).text(d).appendTo(selectbox);							
									});
								}
							}
						});
					}
					carregarHorarioSelect();
				
					//BUSCA DATA DO SERVIDOR
					function dataAtual()
					{
					  var valor="";
					 
					  $.ajax({
						type: "GET",
						url: '_src/api.php/dataatual',
						async:false,
						success: function (data) {
							console.log('dentro:'+data);
							valor = data;
						}
						});
					 return valor;
					}
					
					//VARIAVEIS GLOBAL DA VALIDAÇÃO
					var hora = "";
					var nome = "";
					var whatsapp = "";
					var ultimaDataChat = "";
					
					
					//FUNÇÃO DO CRONOMETRO
					function countdown(){
						var now = new Date();
						dataEvento = dataAtualFormatada()+" "+hora
						var eventDate = new Date(dataEvento);
						var currentTiime = now.getTime();
						var eventTime = eventDate.getTime();
						var remTime = eventTime - currentTiime;
						
						if(remTime <= 0) {
							document.getElementById('countdownContainer').style.display = 'none';
							document.getElementById('greetingMsg').style.display = 'block';
							document.getElementById('webnar').style.display = 'block';
							document.getElementById('sala-de-espera').style.display = 'none';
							ativarChatAutomatico();
							playaction();
							stop();
							return;
						}

						var s = Math.floor(remTime / 1000);
						var m = Math.floor(s / 60);
						var h = Math.floor(m / 60);
						var d = Math.floor(h / 24);

						h %= 24;
						m %= 60;
						s %= 60;

						h = (h < 10) ? "0" + h : h;
						m = (m < 10) ? "0" + m : m;
						s = (s < 10) ? "0" + s : s;

						document.getElementById("days").textContent = d+":";
						document.getElementById("days").innerText = d+":";

						document.getElementById("hours").textContent = h+":";
						document.getElementById("minutes").textContent = m+":";
						document.getElementById("seconds").textContent = s;
						setTimeout(countdown, 1000);
					}
					
					//INICIA AS CONVERSAS DO CHAT VERDADEIRO. VERIFICA DE 1 EM 1 SEGUNDO.
					function ativarChatAutomatico(){
						$.ajax({
							type: "POST",
							url: '_src/api.php/buscarultimoschats',
							data:{dataultimochat:ultimaDataChat},
							async:true,
							success: function (data) {
								//console.log(data);
								var obj = JSON.parse(data);
								if(obj.length != 0)
								{
									//console.log(obj[0].nome);
									ultimaDataChat = obj[0].data;
								}
								//console.log(obj.length);
								for(i=0; i < obj.length; i++){
									addChatInput(obj[i].nome,obj[i].texto);
								}
							}
						});
						setTimeout(ativarChatAutomatico, 1000);
					}
					//CARREGA AS POSTAGENS NA DIV CHAT
					function addChatInput(nome,texto){
						text="<div class='chat'><span class='nomeusuario'>"+nome+"</span>: <span class='textousuario'>"+texto+"</span></div>";
						$('#dialogo').html(text+$('#dialogo').html());
					}
					//CARREGA OS PARTICIPANTES NA DIV DOS PARTICIPANTES PRESENTES/ONLINE
					function addparticipantes(nome){
						text="<div class='listausuario'><span class='nomeusuario'>"+nome+"</span></div>";
						$('#usuariospresenes').html(text+$('#usuariospresenes').html());
					}
					
					//REALIZA A AUTENTICAÇÃO DO LOGIM, INICIA O CRONOMETRO, E CAREGA USUARIO
					function entrar(){
						agenda = $('#agenda').val();
						if(agenda =="0")
						{
							$('#reauth-agenda').text("Escolha um horário");
							return;
						}
						nome = $('#nome').val();
						if(nome =="")
						{
							$('#reauth-nome').text("Preencha seu nome");
							return;
						}
						whatsapp = $('#whatsapp').val();
						if(whatsapp == "")
						{
							$('#reauth-whatsapp').text("Preencha seu whatsapp");
							return;
						}
						else
						{
							$('#reauth-email').text("");
							document.getElementById('entrada').style.display = 'none';
							document.getElementById('balcao').style.display = 'block';
							hora = $("#agenda").val();
							ultimaDataChat = dataAtualFormatadaParaBanco()+" "+hora+":00";
							countdown();
							
							
							$.ajax({
								type: "POST",
								url: '_src/api.php/salvarusuario',
								data:{nome:nome,whatsapp:whatsapp,agenda:agenda},
								async:false,
								success: function (data) {

								}
							});
							participantesonline(dataAtualFormatadaParaBanco(),agenda);
							
						}	
					}
				//AO CARREGAR O SELECT DE AGENDA EXIBE OS PARTICIPANTE PRESENTES/ONLINE
				//sessionStorage.clear();
				function listarParticipantes(id){					
					$('#'+id).text("");

					if (sessionStorage.getItem($('#agenda').val())==null)
						participantesRand($('#agenda').val());
					
					participantesonline(dataAtualFormatadaParaBanco(), $('#agenda').val());
					 
				}
				//EXIBIR A LISTA DE NOMES DOS PARTICIPANTES QUE ESTAO ONLINE
				function participantesonline(datadia,agendaselect){
					var qtd = 0;
					$.ajax({
						type: "POST",
						url: '_src/api.php/buscarparticipantes',
						data:{data:datadia,agenda:agendaselect},
						async:false,
						success: function (data) {
							var objTrue = JSON.parse(data);
							qtdTrue = objTrue.length;
							$('#usuariospresenes').html("");
							
							for(i=0; i < objTrue.length; i++){
								addparticipantes(objTrue[i].nome);
							}
							
							$('.qtdusuario').html("("+qtdTrue+")");
						}
					});					
				}
				function exibirParticipantesRand(){
					data = JSON.parse(sessionStorage.getItem($('#agenda').val()));
					obj = JSON.parse(data);
					console.log(obj.length);
					return obj;
				}
				
				function participantesRand(agenda){
					var qtd = 0;
					$.ajax({
						type: "get",
						url: '_src/api.php/sortearparticipantesrand/'+20,
						async:false,
						success: function (data) {
							jasonaux = JSON.stringify(data);
							console.log(jasonaux);
							sessionStorage.setItem(agenda,jasonaux);
						}
					});					
				}

				
				//BLOCO QUE INICIA A CONTAGEM DA AUTOMAÇÃO 
				Date.prototype.addSegundos = function(segundos){
					this.setSeconds(this.getSeconds() + segundos)
				};
				function buscarDialogoAutomatico(tipo,limit){
					$.ajax({
						type: "POST",
						url: '_src/api.php/buscardialogo',
						data:{tipo:tipo,limit:limit},
						async:false,
						success: function (data) {
							var obj = JSON.parse(data);
							for(i=0; i < obj.length; i++){
								addChatInput(obj[i].nome,obj[i].texto);
							}
						}
					});
				}
				var dt = new Date(dataAtualFormatadaParaBanco()+' 00:00:00');
				var playaction = function () {
					time = new Date (dataAtualFormatadaParaBanco()+' 00:00:10');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("inicio","2");
					}
					time = new Date (dataAtualFormatadaParaBanco()+' 00:00:39');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("inicio","1");
					}
					time = new Date (dataAtualFormatadaParaBanco()+' 00:00:55');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("inicio","1");
					}
					time = new Date (dataAtualFormatadaParaBanco()+' 00:01:00');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("inicio","1");
					}
					
					time = new Date (dataAtualFormatadaParaBanco()+' 00:01:00');
					if(dt.getTime() == time.getTime())
					{
						$("#CallToActionContato").animate({"left": "-21px"},"slow");
					}
					time = new Date (dataAtualFormatadaParaBanco()+' 00:04:15');
					if(dt.getTime() == time.getTime())
					{
						$("#CallToActionContato").animate({"left": "-360px"},"slow");
					}
					
					time = new Date (dataAtualFormatadaParaBanco()+' 00:40:01');
					if(dt.getTime() == time.getTime())
					{
						$("#CallToActionContato").animate({"left": "-21px"},"slow");
					}

					
					time = new Date (dataAtualFormatadaParaBanco()+' 00:01:12');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("inicio","2");
					}
					time = new Date (dataAtualFormatadaParaBanco()+' 00:01:18');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("inicio","2");
					}
					time = new Date (dataAtualFormatadaParaBanco()+' 00:01:30');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("inicio","4");
					}
					
					time = new Date (dataAtualFormatadaParaBanco()+' 00:04:10');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("video","4");
					}
					
					time = new Date (dataAtualFormatadaParaBanco()+' 00:04:35');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("video","4");
					}
					
					time = new Date (dataAtualFormatadaParaBanco()+' 00:05:05');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("video","4");
					}
					
					time = new Date (dataAtualFormatadaParaBanco()+' 00:05:05');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("video","4");
					}
					
					time = new Date (dataAtualFormatadaParaBanco()+' 00:06:23');
					if(dt.getTime() == time.getTime())
					{
						buscarDialogoAutomatico("video","4");
					}
					
					
					time = new Date (dataAtualFormatadaParaBanco()+' 00:38:37');
					if(dt.getTime() == time.getTime())
					{
						$("#produto01").animate({"left": "0px"},"slow");
						$("#produto02").animate({"left": "-6px"},"slow");
						$("#produto03").animate({"left": "97px"},"slow");
						$("#produto04").animate({"left": "2px"},"slow");
					}
					
					time = new Date (dataAtualFormatadaParaBanco()+' 00:40:00');
					if(dt.getTime() == time.getTime())
					{
						$("#produto01").animate({"left": "-150px"},"slow");
						$("#produto02").animate({"left": "-150px"},"slow");
						$("#produto03").animate({"left": "-150px"},"slow");
						$("#produto04").animate({"left": "-150px"},"slow");
					}
					
					
					
					
					
					
					
					dt.addSegundos(1);
					console.log(dt);
					setTimeout(playaction,1000);
				}
				
				//FIM AUTOMAÇÃO
				</script>
				<script type="text/javascript" src="_js/rocket.min.js"></script>
			  </div>
			</div>
			
			

			<div id="entrada" class="barra-rolagem">
			   <div class="container" style="width: 100%;">
					<div class="card card-container">
						<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
						<p id="profile-name" class="profile-name-card"></p>
						<form class="form-signin">
							<select class="form-control" name="agenda" id="agenda" style="margin-bottom: 12px;" onchange="listarParticipantes('reauth-agenda')"required autofocus></select>
							<span id="reauth-agenda" class="reauth-agenda"></span>
							<input type="text" id="nome" class="form-control" placeholder="Primeiro nome" maxlength="16" onkeypress="limpaValidacao('reauth-nome')" style="margin-bottom: 2px;" required>
							<span id="reauth-nome" class="reauth-email"></span>
							<input type="text" id="whatsapp" class="form-control" placeholder="Whatsapp" maxlength="16" onkeypress="limpaValidacao('reauth-whatsapp')" style="margin-bottom: 2px;" required>
							<span id="reauth-whatsapp" class="reauth-whatsapp"></span>
							<a class="btn btn-lg btn-primary btn-block btn-signin" onclick="entrar();" style="padding-top: 9px;">Entrar</a>
						</form>
					</div>
				</div>
			</div>
			
			
			
			
		  </div>
		  <div class="col-sm-2 borda-view2" id="parceiros" >
			  <div style="border-bottom: solid 1px #d2d4d8;margin-bottom: height: 70px;10px;padding-top: 14px;padding-left: 8px;text-align: center;background-color: #f1f1f1;">
				<p style="font-size: 17px; color: #932c8b;"><span class="glyphicon glyphicon-user"></span> Participantes on-line<br><span class="qtdusuario">(0)</span></p>
			  </div>
			  <div id="listausuario" class="barra-rolagem">
				<div id="usuariospresenes"></div>
			  </div>
		   <!--<center>
			<p>A empresa Emporio do Bolo também é parceiro este projeto</p>
			<img style="width: 100%;" src="_img/emporiodobolo.png" alt="Saúde Diamante" />
		   </center>-->
		  </div>
	  </div>
	</div>
</div>


<div id="webnar" style="display:none">
	<div class="container">
	  <div class="row">
		  <div class="col-sm-10 borda-view1" id="video">  
			<center>
			<iframe id="ytplayer"  type="text/html"
				width="100%" 
				height="300" 
				src="https://www.youtube.com/embed/yQ7tlTA-NG0?rel=0&modestbranding=1&showinfo=0&controls=0" 
				frameborder="0" 
				allow="autoplay; encrypted-media" allowfullscreen>
			</iframe>
			
			</center>	  
		  </div>
		  <div class="col-sm-2 borda-view2 barra-rolagem" id="chat" style="padding: 5px; ">
		    <div>

				<div class="row" style="margin-right: 0px; margin-left: 0px; margin-bottom: 0px;">
				  <div class="col-sm-12">
					<div class="input-group">
					  <input id="textochat" type="text" maxlength="80" class="form-control" placeholder="Chat">
					  <span class="input-group-btn">
						<button class="btn btn-default" type="button" style="height: 34px;color: #6b6b6b;" onclick="textochat()">Ok</button>
					  </span>
					</div><!-- /input-group -->
				  </div><!-- /.col-lg-6 -->
				</div><!-- /.row -->				

			  </div>
			  <div id="dialogo" style="padding-top: 10px;"></div>
		  </div>
	  </div>
	</div>
</div>

<hr>
<div class="row">
 <div class="col-sm-12">
  <center>
	<h1 style="font-size: 42px;"> Eduardo: <br>
	<img style="width: 45px;" src="_img/whatsapp-logo.png" alt="Saúde Vida" />85 9.9749-6094
	</h1>
  </center>
 </div>
</div>
	  
<div id="CallToActionContato">
	Eduardo: <img style="width: 30px;" src="_img/whatsapp-logo.png" alt="Saúde Vida" />85 9.9749-6094
</div>
<div id="for-produtos">
	<form method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
		<!-- Campos obrigatórios -->  
		<input name="receiverEmail" type="hidden" value="edufilgueira@gmail.com">  
		<input name="currency" type="hidden" value="BRL">  
		<!-- Itens do pagamento (ao menos um item é obrigatório) -->  
		<input name='itemId1' type='hidden' value='0001'>
		<input name='itemDescription1' type='hidden' value='Magnus Supreme'>
		<input name='itemAmount1' type='hidden' value='100.00'>
		<input name='itemQuantity1' type='hidden' value='1'>
		<input name='itemWeight1' type='hidden' value='240'>
		<!-- Código de referência do pagamento no seu sistema (opcional)  
		<input name="reference" type="hidden" value="REF1234">  -->
		<div id="produto01" style="display:block">
			<input alt="Pague com PagSeguro" name="submit"  type="image" src="_img/magnus-supreme-caixa.png"/>  	
			<!--<img src="_img/magnus-supreme-caixa.png" width="100%">-->
		</div>
	</form> 
	<form method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
		<!-- Campos obrigatórios -->  
		<input name="receiverEmail" type="hidden" value="edufilgueira@gmail.com">  
		<input name="currency" type="hidden" value="BRL">  
		<!-- Itens do pagamento (ao menos um item é obrigatório) -->  
		<input name='itemId1' type='hidden' value='0001'>
		<input name='itemDescription1' type='hidden' value='Cafelife'>
		<input name='itemAmount1' type='hidden' value='100.00'>
		<input name='itemQuantity1' type='hidden' value='1'>
		<input name='itemWeight1' type='hidden' value='240'>
		<!-- Código de referência do pagamento no seu sistema (opcional)  
		<input name="reference" type="hidden" value="REF1234">  -->
		<div id="produto02" style="display:block">
			<input alt="Pague com PagSeguro" name="submit"  type="image" src="_img/cafelife-pote420G.png" style="width: 102px;"/>  	
		</div>
	</form> 
	<form method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
		<!-- Campos obrigatórios -->  
		<input name="receiverEmail" type="hidden" value="edufilgueira@gmail.com">  
		<input name="currency" type="hidden" value="BRL">  
		<!-- Itens do pagamento (ao menos um item é obrigatório) -->  
		<input name='itemId1' type='hidden' value='0001'>
		<input name='itemDescription1' type='hidden' value='Starbien'>
		<input name='itemAmount1' type='hidden' value='100.00'>
		<input name='itemQuantity1' type='hidden' value='1'>
		<input name='itemWeight1' type='hidden' value='240'>
		<!-- Código de referência do pagamento no seu sistema (opcional)  
		<input name="reference" type="hidden" value="REF1234">  -->
		<div id="produto03" style="display:block">
			<input alt="Pague com PagSeguro" name="submit"  type="image" src="_img/starbien-pote-615G2.png" style="width: 102px;"/>  	
		</div>
	</form> 
	<form method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
		<!-- Campos obrigatórios -->  
		<input name="receiverEmail" type="hidden" value="edufilgueira@gmail.com">  
		<input name="currency" type="hidden" value="BRL">  
		<!-- Itens do pagamento (ao menos um item é obrigatório) -->  
		<input name='itemId1' type='hidden' value='0001'>
		<input name='itemDescription1' type='hidden' value='AOÉ SUPREME'>
		<input name='itemAmount1' type='hidden' value='100.00'>
		<input name='itemQuantity1' type='hidden' value='1'>
		<input name='itemWeight1' type='hidden' value='240'>
		<!-- Código de referência do pagamento no seu sistema (opcional)  
		<input name="reference" type="hidden" value="REF1234">  -->
		<div id="produto04" style="display:block">
			<input alt="Pague com PagSeguro" name="submit"  type="image" src="_img/aoe.png"/>  	
		</div>
	</form> 	
</div>	
<!-- FIM --> 




<br><br>
	<div class="fixed-width">
		<div class="one-column column cols" id="le_body_row_9_col_1">
			<div class="element-container cf" data-style="" id="le_body_row_9_col_1_el_1">
				<div class="element">
				<h2 style='font-size:50px;letter-spacing:-1px;text-align:center;margin-bottom:40px;'>Por que escolher esse negócio?</h2> 
				</div>
			</div>

			<div class="element-container cf" data-style="" id="le_body_row_9_col_1_el_2">
				<div class="element">
					<ul class="feature-block feature-block-style-icon feature-block-with-icon feature-block-three-col cf">
						<li>
							<div>
								<span class="feature-block-icon-container">
									<img class="feature-block-icon" src="_modelo/img/Edition_Edition-12.png"  />
								</span>
								<h2 style='font-size:17px;color:#1c1c1c;'>Plano de Compensação Realista</h2>
								<p style='font-size:15px;font-style:normal;font-weight:300;color:#808080;'>
								Na OMNILIFE você possui um plano de compensação realista e sustentável, com 7 formas de ganho.
								</p>
							</div>
						</li>
						<li>
							<div>
								<span class="feature-block-icon-container">
									<img class="feature-block-icon" src="_modelo/img/Food_Food-01.png"  />
								</span>
								<h2 style='font-size:17px;color:#1c1c1c;'>Liberdade Financeira</h2>
								<p style='font-size:15px;font-style:normal;font-weight:300;color:#808080;'>
								Realize todos os seus sonhos após conquistar a sua liberdade financeira na OMNILIFE.
								</p>
							</div>
						</li>			 
						<li>
							<div>
								<span class="feature-block-icon-container">
									<img class="feature-block-icon" src="_modelo/img/Edition_Edition-18.png"  />
								</span>
								<h2 style='font-size:17px;color:#1c1c1c;'>Empresa Sólida</h2>
								<p style='font-size:15px;font-style:normal;font-weight:300;color:#808080;'>
									A empresa OMNILIFE tem mais de 25 anos de Mercado Internacional e 5 anos de mercado nacional.
								</p>
							</div>
						</li>
						</ul> 
					</div>
			</div>
				
				<div class="element-container cf" data-style="" id="le_body_row_9_col_1_el_3">
					<div class="element">
						<ul class="feature-block feature-block-style-icon feature-block-with-icon feature-block-three-col cf">
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="_modelo/img/Map-Location_Map-Location-11.png"  /></span><h2 style='font-size:17px;color:#1c1c1c;'>Gastar dinheiro com Supérfulo ou com Saúde?</h2><p style='font-size:15px;font-style:normal;font-weight:300;color:#808080;'>A pessoas, mesmo em crise, não deixarão de cuidar da saúde. Já os supérfluos elas deixarão de consumir.</p>

												</div></li>
									 
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="_modelo/img/Business_Arrows-copy-10.png"  /></span><h2 style='font-size:17px;color:#1c1c1c;'>Qualquer pessoa pode participar</h2><p style='font-size:15px;font-style:normal;font-weight:300;color:#808080;'>Na empresa temos pessoas de todos os níveis sociais, de instrução e idade. Todos em busca de seus sonhos.</p>

												</div></li>
									 
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="_modelo/img/Business_Arrows-copy-19.png"  /></span><h2 style='font-size:17px;color:#1c1c1c;'>Ganhe Dinheiro Mesmo sem Equipe</h2><p style='font-size:15px;font-style:normal;font-weight:300;color:#808080;'>Caso você não queira cadastrar pessoas para fazer parte da equipe, você atingirá altos ganhos apenas com venda.</p>

												</div></li>
						</ul>
					</div>
				</div>
				<div class="element-container cf" data-style="" id="le_body_row_9_col_1_el_4">
					<div class="element">
						<ul class="feature-block feature-block-style-icon feature-block-with-icon feature-block-three-col cf">
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="_modelo/img/Design_Design-08.png"  /></span><h2>Não se restringe ao emagrecimento</h2><p>Os produtos OMNILIFE servem para as mais variadas doenças e não se restringe ao emagrecimento.</p>

												</div></li>
									 
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="_modelo/img/Email_Email-12.png"  /></span><h2>Contato direto com nutricionistas</h2><p>Quando você se tornar um empresário OMNILIFE, terá um canal direto com nutricionistas para tirar dúvidas gratuitamente.</p>

												</div></li>
									 
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="_modelo/img/Email_Email-24.png"  /></span><h2>NÃO é medicamento</h2><p>Medicamentos são drogas que causam efeitos colaterais, os produtos OMNILIFE são naturais e sem efeitos colaterais.</p>

												</div></li>
						</ul>
					</div>
				</div>
		</div>
	</div>


     


                <div class="fixed-width">
                
                        <style>
                            .footer-navigation ul li a,
                            .footer-navigation ul li a:hover{
                                font-family: "Open Sans", sans-serif;font-size: 14px;text-shadow: none;font-weight: 300;
                            }

                            .footer,
                            .footer p,
                            .op-promote a,
                            .footer .footer-copyright,
                            .footer .footer-disclaimer{
                                font-family: "Open Sans", sans-serif;text-shadow: none;font-weight: 300;
                            }

                            .footer p{ font-size: 14px; }
                        </style>
                    <p class="footer-copyright">Copyright 2018 - Saúde e Vida - All Rights Reserved</p>
            </div>


			
			
			
			
			
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "1650960824979996", // Facebook page ID
            whatsapp: "+5585997496094", // WhatsApp number
            company_logo_url: "http://www.saudevida.life/_img/logo.jpg", // URL of company logo (png, jpg, gif)
            greeting_message: "Ola, estou por aqui. Entre em contato comigo pelo whatsapp.", // Text of greeting message
            call_to_action: "Estou aqui !!!", // Call to action
            button_color: "#932C8B", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();

function sizeOfThings(){	
	var winH = $(window).height();//screen.height
	winH = winH - 70;
    var divChat = $("#chat");
	var divVideo = $("#video");
	var divYtplayer = $("#ytplayer");
	var divParceiros = $("#parceiros");
	var divRecepcao = $("#recepcao");
	var divListausuario = $("#listausuario");
    divChat.css('height', winH);
	divVideo.css('height', winH);
	divYtplayer.css('height', winH);
	divParceiros.css('height', winH);
	divRecepcao.css('height', winH);
	divListausuario.css('height', winH-77);
};

sizeOfThings();

window.addEventListener('resize', function(){
	sizeOfThings();
});

</script>
<!-- /WhatsHelp.io widget -->
</body>
</html>