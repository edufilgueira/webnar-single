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
<link rel='stylesheet' id='optimizepress-page-style-css'  href='css/style.min.css?ver=2.5.12' type='text/css' media='all' />
<link rel='stylesheet' id='optimizepress-default-css'  href='css/default.min.css?ver=2.5.12' type='text/css' media='all' />
<link rel='stylesheet' id='op_header_css-default-css'  href='css/css.css' type='text/css' media='all' />
<script src="js/jquery-3.3.1.min.js"></script>
<script>

function carrinho(status, produto) {
	if(status == "ADD")
	{	
		if($("#"+produto).css("background-color") != "rgb(221, 183, 243)")
		{
			$("#"+produto).css("background-color", "#ddb7f3");
			itens("ADD",produto);
		}
	}
	else	
	{
		if($("#"+produto).css("background-color") != "rgb(255, 255, 255)")
		{
			$("#"+produto).css("background-color", "#fff");
			itens("DEL",produto);
		}

	}
}

var contador = 1;
function itens(status, item)
{
	var divContent="";
	
	if(status == "ADD")
	{	
		if(item == "item01")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag01'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0001'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='Magnus Supreme'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item01]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='240'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
		else if(item == "item02")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag02'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0002'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='KENYAN'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item02]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='555'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
		else if(item == "item03")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag03'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0003'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='STARBIEN'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item03]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='615'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
		else if(item == "item04")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag04'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0004'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='EGOLIFE'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item04]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='450'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
		else if(item == "item05")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag05'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0005'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='FIBER'N PLUS'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item05]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='450'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
		else if(item == "item06")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag06'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0006'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='CAFELIFE'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item06]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='960'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
		else if(item == "item07")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag07'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0007'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='FEM'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item07]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='540'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
		else if(item == "item08")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag08'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0008'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='HOMO'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item08]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='540'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
		else if(item == "item09")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag09'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0009'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='AOÉ SUPREME'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item09]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='540'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
		else if(item == "item10")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag10'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0010'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='POWER MAKER'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item10]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='450'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
		else if(item == "item11")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag11'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0011'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='TEATINO LIMÃO'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item11]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='225'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
		else if(item == "item12")
		{
			divContent = $('#itensPag');
			var campos ="<div id='itemPag12'>"+
						"<input name='itemId"+contador+"' type='hidden' value='0012'>"+
						"<input name='itemDescription"+contador+"' type='hidden' value='NOVAKID'>"+
						"<input name='itemAmount"+contador+"' type='hidden' value='100.00'>"+
						"<input name='itemQuantity"+contador+"' type='hidden' value='"+$("[name=preco-item12]").val()+"'>"+
						"<input name='itemWeight"+contador+"' type='hidden' value='960'>"+
						"</div>";
			$(campos).appendTo(divContent);
			contador += 1;
		}
	}
	else
	{
		contador -= 1;
		if(item == "item01")
			$('#itemPag01').remove();
		else if(item == "item02")
			$('#itemPag02').remove();
		else if(item == "item03")
			$('#itemPag03').remove();
		else if(item == "item04")
			$('#itemPag04').remove();
		else if(item == "item05")
			$('#itemPag05').remove();
		else if(item == "item06")
			$('#itemPag06').remove();
		else if(item == "item07")
			$('#itemPag07').remove();
		else if(item == "item08")
			$('#itemPag08').remove();
		else if(item == "item09")
			$('#itemPag09').remove();
		else if(item == "item10")
			$('#itemPag10').remove();
		else if(item == "item11")
			$('#itemPag11').remove();
		else if(item == "item12")
			$('#itemPag12').remove();
	}
}

</script>
</head>
<body class="home page-template-default page page-id-269 op-live-editor-page op-theme">
<div class="container main-content">

<div class="banner include-nav" style="background-color:#5a1f7d">
	<div class="fixed-width cf">
		<div class="eight columns">
			<div class="op-logo">
				<img src="img/logo.INLINE.OMNILIFE.png" alt="Saúde Diamante" />
			</div>                
		</div>
	</div>
</div>
        <div id="content_area" class="">
		
		<div style='padding-top:30px;padding-bottom:25px;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;'  class="row one-column cf ui-sortable section   " id="le_body_row_1" data-style="eyJwYWRkaW5nVG9wIjoiMzAiLCJwYWRkaW5nQm90dG9tIjoiMjUiLCJib3JkZXJUb3BXaWR0aCI6IiIsImJvcmRlclRvcENvbG9yIjoiIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIiLCJib3JkZXJCb3R0b21Db2xvciI6IiIsImFkZG9uIjp7InZpZGVvX2JhY2tncm91bmRfdXJsX21wNCI6IiIsInZpZGVvX2JhY2tncm91bmRfdXJsX3dlYm0iOiIiLCJ2aWRlb19iYWNrZ3JvdW5kX3VybF9vZ3YiOiIiLCJ2aWRlb19iYWNrZ3JvdW5kX292ZXJsYXlfY29sb3IiOiIiLCJ2aWRlb19iYWNrZ3JvdW5kX292ZXJsYXlfb3BhY2l0eSI6IjAiLCJ2aWRlb19iYWNrZ3JvdW5kX292ZXJsYXlfaW1hZ2UiOiIifSwiZWxlbWVudElkIjoibGVfYm9keV9yb3dfMSJ9">
			<div class="fixed-width">
				<div class="one-column column cols" id="le_body_row_1_col_1">
					<div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_1">
						<div class="element">
							<h2 style='font-size:50px;letter-spacing:-1px;text-align:center;'>Alta Tecnologia a Serviço da Saúde das Pessoas</h2> 
						</div>
					</div>
					<div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_2">
						<div class="element">
						<h3 style='font-size:24px;font-style:normal;font-weight:300;color:#828282;text-align:center;line-height:30px;'>
						Você gostaria de ganhar dinheiro proporcionando saúde para as pessoas? Utilizando tecnologias de absorção de nutrientes desenvolvida por cientistas renomados? Você está satisfeito com seu salário atual?</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div style='padding-top:0px;padding-bottom:40px;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;'  class="row two-columns cf ui-sortable section   " id="le_body_row_2" data-style="eyJwYWRkaW5nVG9wIjoiMCIsInBhZGRpbmdCb3R0b20iOiI0MCIsImJvcmRlclRvcFdpZHRoIjoiIiwiYm9yZGVyVG9wQ29sb3IiOiIiLCJib3JkZXJCb3R0b21XaWR0aCI6IiIsImJvcmRlckJvdHRvbUNvbG9yIjoiIiwiYWRkb24iOnsidmlkZW9fYmFja2dyb3VuZF91cmxfbXA0IjoiIiwidmlkZW9fYmFja2dyb3VuZF91cmxfd2VibSI6IiIsInZpZGVvX2JhY2tncm91bmRfdXJsX29ndiI6IiIsInZpZGVvX2JhY2tncm91bmRfb3ZlcmxheV9jb2xvciI6IiIsInZpZGVvX2JhY2tncm91bmRfb3ZlcmxheV9vcGFjaXR5IjoiMCIsInZpZGVvX2JhY2tncm91bmRfb3ZlcmxheV9pbWFnZSI6IiJ9LCJlbGVtZW50SWQiOiJsZV9ib2R5X3Jvd18yIn0="><div class="fixed-width"><div class="one-half column cols" id="le_body_row_2_col_1"><div class="element-container cf" data-style="" id="le_body_row_2_col_1_el_1"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 15px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/Q4eSr_sDRDU?wmode=opaque&showinfo=0&amp;autoplay=1&amp;controls=0&amp;modestbranding=1&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div><div class="element-container cf" data-style="" id="le_body_row_2_col_1_el_2"><div class="element"> 

		
<div id="social-sharing-f8c79e88de9ed1f394cdaac770e30066" class="social-sharing social-sharing-style-21">
    <div class="fb-like" data-href="" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="light"></div>
</div> </div></div></div>


<!-- OPTIN-->
<div class="one-half column cols" id="le_body_row_2_col_2">
<div class="element-container cf" data-style="" id="le_body_row_2_col_2_el_1">
	<div class="element">
		<div id="news-bar-ef960cc0e65b49b1cb551ff19479aadd" class="news-bar-style-1">
			<p><strong>Passo 1: Conheça a OMNILIFE</strong><span>Passo 2: Como se Tornar um Empresário</p>
		</div>
	</div>
</div>
<div class="element-container cf" data-style="" id="le_body_row_2_col_2_el_2">
	<div class="element"> 
		<div style="height:5px"></div> 
	</div>
</div>
<div class="element-container cf pad" data-style="eyJhZHZhbmNlZENsYXNzIjoicGFkIn0=" id="le_body_row_2_col_2_el_3">
	<div class="element">
	<div class="op-text-block" style="width:100%;text-align: left;">
		<p style='font-size:18px;'>Nós temos alguns vídeos que irão explicar como ganhar dinheiro e ainda ficar saudável com os Produtos da OMNILIFE<strong>:</strong></p>
	</div>
	</div>
</div>

<div class="element-container cf pad" data-style="eyJhZHZhbmNlZENsYXNzIjoicGFkIn0=" id="le_body_row_2_col_2_el_4">
	<div class="element">
		<ul class="bullet-list size-16" >
			<li style='background-image:url("img/34.png");background-repeat:no-repeat;'>
			<strong>Video 1:</strong> Por que os produtos da OMNILIFE funcionam?</li>
			<li style='background-image:url("img/34.png");background-repeat:no-repeat;'>
			<strong>Video 2:</strong> O segredo para ganhar de R$ 4.000,00 a liberdade financeira.</li>
			<li style='background-image:url("img/34.png");background-repeat:no-repeat;'>
			<strong>Video 3:</strong> Como ter liberdade financeira na OMNILIFE.
			</li>
		</ul>
	</div>
</div>
<div class="element-container cf" data-style="" id="le_body_row_2_col_2_el_5">
	<div class="element"> 
		<div style="height:15px"></div> 
	</div>
</div>
<div class="element-container cf pad button" data-style="eyJhZHZhbmNlZENsYXNzIjoicGFkIGJ1dHRvbiJ9" id="le_body_row_2_col_2_el_6">
<div class="element">
<div class="op-popup cf" data-width="700"  data-open-effect="fade"  data-close-effect="fade"  data-open-speed="fast"  data-close-speed="fast"  data-border-color="#ffffff"  data-border-size="0"  data-padding-top="35"  data-padding-bottom="35"  data-padding-left="35"  data-padding-right="35"  data-exit-intent="N"  data-trigger-time="0"  data-trigger-dontshow="0"  data-dont-show-on-tablet="N"  data-dont-show-on-mobile="N"  data-popup-id="op_popup_id_1419481303713"  data-epicbox-title="OverlayOptimizer Content" >
<div class="op-popup-button ">
	<div style="text-align:center">
		<style type="text/css">#btn_1_14a6596291f1da6ce542cabd35c04f79 .text {font-size:23px;color:#fcfcfc;font-weight:normal;}#btn_1_14a6596291f1da6ce542cabd35c04f79 {width:100%;padding:18px 0;border-width:0px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;background:#F0651B;box-shadow:0px 3px 0px 0px rgba(211,82,13,1);}#btn_1_14a6596291f1da6ce542cabd35c04f79 .gradient {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_14a6596291f1da6ce542cabd35c04f79 .shine {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_14a6596291f1da6ce542cabd35c04f79 .active {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_14a6596291f1da6ce542cabd35c04f79 .hover {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}</style>
		<a href="" id="btn_1_14a6596291f1da6ce542cabd35c04f79" class="css-button style-1">
			<span class="text">Quero Saber Mais!</span>
			<span class="hover"></span>
			<span class="active"></span>
		</a>
	</div>
</div>
<div class="op-popup-content">
<div class="element-container op-popup-element-container "  data-popup-child="true"></div>
<div class="element-container op-popup-element-container "  data-popup-child="true">
	<div style="height:5px"></div>
</div>
<div class="element-container op-popup-element-container "  data-popup-child="true"><div class="op-text-block" style="width:100%;margin: 0 auto;text-align:center;"><p style='font-size:15px;color:#969696;'><strong>Quase lá:</strong> Por favor, preencha com um e-mail válido e clique no botão 'Quero Saber Mais!'</p>
</div></div><div class="element-container op-popup-element-container open-sans-600"  data-popup-child="true"><h2 style='font-size:25px;color:#1f2c3d;letter-spacing:-1px;text-align:center;line-height:32px;margin-top:15px;'>Receba em seu e-mail e/ou WhatsApp informações sobre esta oportunidade de Negócio.</h2></div><div class="element-container op-popup-element-container button"  data-popup-child="true">
<div id="5a85932f7d65b" class="optin-box optin-box-24" style="margin-right: auto;margin-left: auto;">
    <form action="" method="post" class="cf op-optin-validation">
	<div style="display:none">
	<input type="hidden" name="provider" value="mailpoet" />
	<input type="hidden" name="redirect_url" value="" />
	<input type="hidden" name="list" value="1" />
	<input type="hidden" name="already_subscribed_url" value="" /></div>
	<input type="text" required="required" name="firstname" placeholder="Digite seu nome" value="" />
	<input type="email" required="required" name="email" placeholder="Digite seu email" value="" />
	<div class="text-box">
	<input type="text" name="cf_1" placeholder="Celular - DDD + Número" value="" />
	</div>
	<div style="text-align:center">
	<style type="text/css">#btn_1_de682bcd759527bbff6a5b39c7595a40 .text {font-size:24px;color:#fcfcfc;font-weight:normal;}#btn_1_de682bcd759527bbff6a5b39c7595a40 {width:100%;padding:24px 0;border-width:0px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;background:#F0651B;box-shadow:0px 3px 0px 0px rgba(211,82,13,1);}#btn_1_de682bcd759527bbff6a5b39c7595a40 .gradient {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_de682bcd759527bbff6a5b39c7595a40 .shine {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_de682bcd759527bbff6a5b39c7595a40 .active {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_de682bcd759527bbff6a5b39c7595a40 .hover {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}</style>
	<button type="submit" id="btn_1_de682bcd759527bbff6a5b39c7595a40" class="css-button style-1 location_optin_box_style_24"><span class="text">Quero Saber mais!</span><span class="hover"></span><span class="active"></span></button></div>    <input type="hidden" id="op_optin_nonce" name="op_optin_nonce" value="5fe00db808" /><input type="hidden" name="_wp_http_referer" value="/" /></form>
    <p class="privacy">Política de Privacidade: Suas Informações Estão 100% Seguras Conosco.</p></div>
</div></div></div></div>
</div>

	<div class="element-container cf" data-style="" id="le_body_row_2_col_2_el_7">
		<div class="element">
			<div style="height:25px"></div>
		</div>
	</div>
</div>
<!--FIM da OPTIN-->







<br>&nbsp;<br>&nbsp;
<div class="element-container cf" style="text-align:">
	<div class="element">
		<ul class="feature-block feature-block-style-icon feature-block-with-icon feature-block-three-col cf">
			<li id="item01" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/magnus-supreme-caixa.jpg"/></div>
					<p class="descproduto">
					Aumenta a imunidade, nível de energia, alivia fadiga, estimula os reflexos, eleva resistência, 
					fortalece os ossos e combate o mau hálito...
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item01');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item01');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item01" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>	
			</li>
			<li id="item02" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/kenyan-pote-555G.jpg" /></div>
					<p class="descproduto">
					Excelente para memória, rapidez de raciocínio, concentração, epilepsia, melhora a circulação, 
					previne AVC e infarto além de melhorar a visão...
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item02');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item02');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item02" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>
			</li>
			<li id="item03" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/starbien-pote-615G.jpg" /></div>
					<p class="descproduto">
					Combate falta de energia e stress, insônia, mau humor, irritação, ansiedade e depressão. Importantes na gravidez e para crianças hiperativas.
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item03');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item03');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item03" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>
			</li>			
		</ul> 
	</div>
</div>


<div class="element-container cf" style="text-align:">
	<div class="element">
		<ul class="feature-block feature-block-style-icon feature-block-with-icon feature-block-three-col cf">
			<li id="item04" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/egolife-supreme-caixa.jpg"/></div>
					<p class="descproduto">
					Reidratação corporal, repões vitaminas e sais minerais, retenção de liquido. Ideal para febre, vômitos, 
					diarreia, pedra nos rins indicado para pessoas que realizam atividades físicas...
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item04');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item04');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item04" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>
					
			</li>
			<li id="item05" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/fibern-plus-supreme-caixa.jpg" /></div>
					<p class="descproduto">
					Prisão de ventre gastrite, queimação, azia, câncer do colo e reto, hemorroidas, úlceras, colesterol ruim osteoporose, 
					artrite, artrose, age na queima de gordura apropriado para diabéticos...
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item05');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item05');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item05" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>
			</li>			 
			<li id="item06" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/cafelife-pote-420G.jpg" /></div>
					<p class="descproduto">
					Diabetes e hipoglicemia, diminuição do apetite, queima de gorduras, combate ao colesterol ruim, aumenta a energia, 
					diminui varizes e celulite, melhora a digestão e circulação sanguínea.
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item06');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item06');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item06" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>
			</li>
			</ul> 
		</div>
</div>





<div class="element-container cf" style="text-align:">
	<div class="element">
		<ul class="feature-block feature-block-style-icon feature-block-with-icon feature-block-three-col cf">
			<li id="item07" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/fem-morango-pote540G.jpg"/></div>
					<p class="descproduto">
					TPM, menopausa, cisto no ovário e seios, endometriose, cólicas menstruais, hemorragias, regula todo o sistema 
					hormonal feminino, melhora libido sexual, reduz efeitos colaterais de antidepressivos...
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item07');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item07');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item07" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>
					
			</li>
			<li id="item08" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/homo-maca-verde-pote-540G.jpg" /></div>
					<p class="descproduto">
					Sistema hormonal masculino, problema de próstata, andropausa,  falta de energia, cicatrização interna, 
					desempenho sexual (impotência e sexualidade) combinar com Power Maker.
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item08');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item08');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item08" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>
			</li>			 
			<li id="item09" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/aoe-supreme-manga-960ML.jpg" /></div>
					<p class="descproduto">
					Gastrite, ulceras, vermes e parasitas, limpeza intestinal, machucados e ferimentos, baixa imunidade diabetes, 
					doenças auto-imunes, inflamação e infecção. Auxilia no combate a cirrose, hepatite, herpes, gota e problemas renais.
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item09');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item09');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item09" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>
			</li>
			</ul> 
		</div>
</div>




<div class="element-container cf" style="text-align:">
	<div class="element">
		<ul class="feature-block feature-block-style-icon feature-block-with-icon feature-block-three-col cf">
			<li id="item10" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/power-maker-caixa.jpg"/></div>
					<p class="descproduto">
					Anemia e regeneração dos tecidos, nutre músculos e ossos, regula função hormonal do homem e da mulher, 
					fortifica ossos, músculos, tendões e ligamentos, excelente para hérnia de disco...
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item10');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item10');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item10" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>
					
			</li>
			<li id="item11" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/teatino-supreme-caixa.jpg" /></div>
					<p class="descproduto">
					Ideal para diabéticos, perda de gordura, controla a sensação de fome e auxilia no bom 
					funcionamento do pâncreas vesícula e rins...
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item11');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item11');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item11" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>
			</li>			 
			<li id="item12" class="borda">
					<div class="imgproduto" style="padding-left: 0px;"><img src="produto/novakid.jpg" /></div>
					<p class="descproduto">
					Para grávidas e seus bebês, pois aumenta a necessidade de nutrientes neste período, aumenta imunidade e produção de leite, fortalece os ossos e transmite todas as 
					vitaminas e sais minerais ao bebê.
					</p>
					<hr>
					<div class="div-preco-produto" style="padding-left: 0px;">&nbsp;
						<img src="img/add.png" class="botaocomprar" onclick="carrinho('ADD','item12');"/>
						<img src="img/del.png" class="botaocomprar" onclick="carrinho('DEL','item12');"/>
						<div class="preco" style="padding-left: 0px;">R$ 120,00</div>
						<input name="preco-item12" type="text" value="1" style="width: 12px;float: left;margin-top: -10px; margin-left: 4px; font-size: 17px; font-weight: bold;"> 
					</div>
			</li>
			</ul> 
		</div>
</div>





			
<div class="op-popup-button ">
	<div style="text-align:center">
		<span class="text">Pagamento pelo PagSeguro</span><br>



		<!-- Declaração do formulário -->  
		<div id="fechar-pagamento">
			<form method="post" target="pagseguro"  
			action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
					  
					<!-- Campos obrigatórios -->  
					<input name="receiverEmail" type="hidden" value="EMAILDODISTRIBUIDOR">  
					<input name="currency" type="hidden" value="BRL">  
			
					<!-- Itens do pagamento (ao menos um item é obrigatório) -->  
					<div id="itensPag">
		 
					</div>
					
					
					<!-- Código de referência do pagamento no seu sistema (opcional)  
					<input name="reference" type="hidden" value="REF1234">  --> 
					  
					<!-- Informações de frete (opcionais)    
					<input name="shippingType" type="hidden" value="1">  
					<input name="shippingAddressPostalCode" type="hidden" value="01452002">  
					<input name="shippingAddressStreet" type="hidden" value="Av. Brig. Faria Lima">  
					<input name="shippingAddressNumber" type="hidden" value="1384">  
					<input name="shippingAddressComplement" type="hidden" value="5o andar">  
					<input name="shippingAddressDistrict" type="hidden" value="Jardim Paulistano">  
					<input name="shippingAddressCity" type="hidden" value="Sao Paulo">  
					<input name="shippingAddressState" type="hidden" value="SP">  
					<input name="shippingAddressCountry" type="hidden" value="BRA"> -->
			  
					<!-- Dados do comprador (opcionais)  
					<input name="senderName" type="hidden" value="José Comprador">  
					<input name="senderAreaCode" type="hidden" value="11">  
					<input name="senderPhone" type="hidden" value="56273440">  
					<input name="senderEmail" type="hidden" value="comprador@uol.com.br"> --> 
			
					<!-- submit do form (obrigatório) -->  
					<input alt="Pague com PagSeguro" name="submit"  type="image"  
						   src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/184x42-carrinho-cinza-assina.gif"/>  
					  
			</form>  			
		</div>	
		<!-- FIM Declaração do formulário --> 
			
	</div>
</div>			
			
			
			
			
			


</div>
</div>
<div  class="row three-columns cf ui-sortable   " id="le_body_row_3" data-style=""><div class="fixed-width"><div class="one-third column cols narrow" id="le_body_row_3_col_1"><div class="element-container cf" data-style="" id="le_body_row_3_col_1_el_1"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 20px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/mv6JLNLw3F0?wmode=opaque&showinfo=1&amp;autoplay=0&amp;controls=1&amp;modestbranding=1&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div></div><div class="one-third column cols narrow" id="le_body_row_3_col_2"><div class="element-container cf" data-style="" id="le_body_row_3_col_2_el_1"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 20px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/X1p7MR3bECI?wmode=opaque&showinfo=1&amp;autoplay=0&amp;controls=1&amp;modestbranding=1&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div></div><div class="one-third column cols narrow" id="le_body_row_3_col_3"><div class="element-container cf" data-style="" id="le_body_row_3_col_3_el_1"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 20px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/b6TelKhosyQ?wmode=opaque&showinfo=1&amp;autoplay=0&amp;controls=1&amp;modestbranding=1&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div></div></div></div><div  class="row three-columns cf ui-sortable   " id="le_body_row_4" data-style=""><div class="fixed-width"><div class="one-third column cols narrow" id="le_body_row_4_col_1"><div class="element-container cf" data-style="" id="le_body_row_4_col_1_el_1"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 20px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/DQ8rOdG65wQ?wmode=opaque&showinfo=1&amp;autoplay=0&amp;controls=1&amp;modestbranding=1&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div></div><div class="one-third column cols narrow" id="le_body_row_4_col_2"><div class="element-container cf" data-style="" id="le_body_row_4_col_2_el_1"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 20px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/-ZTtZC0a4qc?wmode=opaque&showinfo=1&amp;autoplay=0&amp;controls=1&amp;modestbranding=1&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div></div><div class="one-third column cols narrow" id="le_body_row_4_col_3"><div class="element-container cf" data-style="" id="le_body_row_4_col_3_el_1"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 20px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/ZumSKadQXi4?wmode=opaque&showinfo=1&amp;autoplay=0&amp;controls=1&amp;modestbranding=1&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div></div></div></div><div  class="row three-columns cf ui-sortable   " id="le_body_row_5" data-style=""><div class="fixed-width"><div class="one-third column cols narrow" id="le_body_row_5_col_1"><div class="element-container cf" data-style="" id="le_body_row_5_col_1_el_1"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 20px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/vOO3jU9wQqU?wmode=opaque&showinfo=1&amp;autoplay=0&amp;controls=1&amp;modestbranding=1&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div><div class="element-container cf" data-style="" id="le_body_row_5_col_1_el_2"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 20px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/9dyB5Sqh6E8?wmode=opaque&showinfo=0&amp;autoplay=0&amp;controls=1&amp;modestbranding=0&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div></div><div class="one-third column cols narrow" id="le_body_row_5_col_2"><div class="element-container cf" data-style="" id="le_body_row_5_col_2_el_1"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 20px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/zt-9E9GHGiY?wmode=opaque&showinfo=1&amp;autoplay=0&amp;controls=1&amp;modestbranding=1&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div></div><div class="one-third column cols narrow" id="le_body_row_5_col_3"><div class="element-container cf" data-style="" id="le_body_row_5_col_3_el_1"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 20px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/l7v_yDI5z1o?wmode=opaque&showinfo=1&amp;autoplay=0&amp;controls=1&amp;modestbranding=1&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div></div></div></div><div  class="row two-columns cf ui-sortable   " id="le_body_row_6" data-style=""><div class="fixed-width"><div class="one-half column cols" id="le_body_row_6_col_1"><div class="element-container cf" data-style="" id="le_body_row_6_col_1_el_1"><div class="element"> <h2 class="headline-style-1" style='text-align:center;'><strong>Empresa Cadastrada, Autorizada e Ativa na Agência de Vigilância Sanitária (ANVISA)</strong></h2> </div></div><div class="element-container cf" data-style="" id="le_body_row_6_col_1_el_2"><div class="element"> <p style="text-align:center"><a href="http://consultas.anvisa.gov.br/#/empresas/25351181355201565/" target="_blank">Acesse e Veja o Registro no Próprio Site da Anvisa</a></p> </div></div></div><div class="one-half column cols" id="le_body_row_6_col_2"><div class="element-container cf" data-style="" id="le_body_row_6_col_2_el_1"><div class="element"> <div id="op_img_text_aside_op_assets_core_img_text_aside_c1f64a7a537b4061da08c59431ccb791" class="image-text-style-2">
		<span class="image-text-align-right">
		<h3>Produtos Certificados Pela Cologne List</h3>
		<span class="image-text-aside-text">
		<p>Alguns produtos da OMNILIFE são livres de Doping, ou seja, pertencem a seleta lista de produtos que podem ser utilizados por atletas sem o risco de Doping.</p>
</span>
	</span>
	<span class="image-text-style-img-container"><img src="img/logo_koelner_liste_en.png" width="200" height="200" class="scale-with-grid" /></span></div> </div></div></div></div></div><div  class="row one-column cf ui-sortable   " id="le_body_row_7" data-style=""><div class="fixed-width"><div class="one-column column cols" id="le_body_row_7_col_1"><div class="element-container cf" data-style="" id="le_body_row_7_col_1_el_1"><div class="element"> <h2 class="headline-style-1" style='text-align:center;'>O Grupo OMNILIFE é <strong>DONA</strong> do Time Chivas Guadalajara e Também do Estádio Que Leva o Mesmo Nome da Empresa. Veja no vídeo...</h2> </div></div><div class="element-container cf" data-style="" id="le_body_row_7_col_1_el_2"><div class="element"> <div class="video-plugin-new youtube" style="max-width:100%; width:560px; height:auto; padding-top:0; padding-bottom:0; margin:0 auto;margin:0 auto; border: 0px solid #fff;margin-bottom: 20px;"><div style="width:560px;height:0;  padding-bottom: 56.25%; padding-top:0;"><iframe width="560" height="315" src="http://www.youtube.com/embed/3tY-FMHddao?wmode=opaque&showinfo=0&amp;autoplay=0&amp;controls=1&amp;modestbranding=1&amp;vq=&amp;rel=0" frameborder="0" allowfullscreen></iframe></div></div> </div></div></div></div></div><div style='background:#ECF0F1;padding-top:40px;padding-bottom:0px;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;'  class="row one-column cf ui-sortable section   " id="le_body_row_8" data-style="eyJiYWNrZ3JvdW5kQ29sb3JTdGFydCI6IiNFQ0YwRjEiLCJwYWRkaW5nVG9wIjoiNDAiLCJwYWRkaW5nQm90dG9tIjoiMCIsImJvcmRlclRvcFdpZHRoIjoiIiwiYm9yZGVyVG9wQ29sb3IiOiIiLCJib3JkZXJCb3R0b21XaWR0aCI6IiIsImJvcmRlckJvdHRvbUNvbG9yIjoiIiwiYWRkb24iOnsidmlkZW9fYmFja2dyb3VuZF91cmxfbXA0IjoiIiwidmlkZW9fYmFja2dyb3VuZF91cmxfd2VibSI6IiIsInZpZGVvX2JhY2tncm91bmRfdXJsX29ndiI6IiIsInZpZGVvX2JhY2tncm91bmRfb3ZlcmxheV9jb2xvciI6IiIsInZpZGVvX2JhY2tncm91bmRfb3ZlcmxheV9vcGFjaXR5IjoiMCIsInZpZGVvX2JhY2tncm91bmRfb3ZlcmxheV9pbWFnZSI6IiJ9LCJlbGVtZW50SWQiOiJsZV9ib2R5X3Jvd184In0="><div class="fixed-width"><div class="one-column column cols" id="le_body_row_8_col_1"><div class="element-container cf" data-style="" id="le_body_row_8_col_1_el_1"><div class="element"> 
<blockquote id="testimonial-cb1577163ebf6b481b686ffd42d1e4fa" class="testimonial testimonial-image-style-6 cf">
    <div class="testimonial-image-content">
<p>A OMNILIFE é uma empresa onde eu pude ajudar as pessoas e ainda ser recompensada por isso. Os produtos 
OMNILIFE possuem tecnologia diferenciada em relação a absorção de nutrientes e não possui efeitos colaterais 
como os remédios. Nenhuma empresa do ramo possui tantos produtos de qualidade para as mais variadas doenças.
</p>        <div class="cite-container">

        </div>
    </div>
</blockquote> </div></div></div></div></div>

<div style='padding-top:60px;padding-bottom:60px;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;'  class="row one-column cf ui-sortable section   " id="le_body_row_9" data-style="eyJwYWRkaW5nVG9wIjoiNjAiLCJwYWRkaW5nQm90dG9tIjoiNjAiLCJib3JkZXJUb3BXaWR0aCI6IiIsImJvcmRlclRvcENvbG9yIjoiIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIiLCJib3JkZXJCb3R0b21Db2xvciI6IiIsImFkZG9uIjp7InZpZGVvX2JhY2tncm91bmRfdXJsX21wNCI6IiIsInZpZGVvX2JhY2tncm91bmRfdXJsX3dlYm0iOiIiLCJ2aWRlb19iYWNrZ3JvdW5kX3VybF9vZ3YiOiIiLCJ2aWRlb19iYWNrZ3JvdW5kX292ZXJsYXlfY29sb3IiOiIiLCJ2aWRlb19iYWNrZ3JvdW5kX292ZXJsYXlfb3BhY2l0eSI6IjAiLCJ2aWRlb19iYWNrZ3JvdW5kX292ZXJsYXlfaW1hZ2UiOiIifSwiZWxlbWVudElkIjoibGVfYm9keV9yb3dfOSJ9">
	<div class="fixed-width">
		<div class="one-column column cols" id="le_body_row_9_col_1">
			<div class="element-container cf" data-style="" id="le_body_row_9_col_1_el_1">
				<div class="element">
				<h2 style='font-size:50px;letter-spacing:-1px;text-align:center;margin-bottom:40px;'>Por que escolher a OMNILIFE?</h2> 
				</div>
			</div>

			<div class="element-container cf" data-style="" id="le_body_row_9_col_1_el_2">
				<div class="element">
					<ul class="feature-block feature-block-style-icon feature-block-with-icon feature-block-three-col cf">
						<li>
							<div>
								<span class="feature-block-icon-container">
									<img class="feature-block-icon" src="img/Edition_Edition-12.png"  />
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
									<img class="feature-block-icon" src="img/Food_Food-01.png"  />
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
									<img class="feature-block-icon" src="img/Edition_Edition-18.png"  />
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
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="img/Map-Location_Map-Location-11.png"  /></span><h2 style='font-size:17px;color:#1c1c1c;'>Gastar dinheiro com Supérfulo ou com Saúde?</h2><p style='font-size:15px;font-style:normal;font-weight:300;color:#808080;'>A pessoas, mesmo em crise, não deixarão de cuidar da saúde. Já os supérfluos elas deixarão de consumir.</p>

												</div></li>
									 
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="img/Business_Arrows-copy-10.png"  /></span><h2 style='font-size:17px;color:#1c1c1c;'>Qualquer pessoa pode participar</h2><p style='font-size:15px;font-style:normal;font-weight:300;color:#808080;'>Na empresa temos pessoas de todos os níveis sociais, de instrução e idade. Todos em busca de seus sonhos.</p>

												</div></li>
									 
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="img/Business_Arrows-copy-19.png"  /></span><h2 style='font-size:17px;color:#1c1c1c;'>Ganhe Dinheiro Mesmo sem Equipe</h2><p style='font-size:15px;font-style:normal;font-weight:300;color:#808080;'>Caso você não queira cadastrar pessoas para fazer parte da equipe, você atingirá altos ganhos apenas com venda.</p>

												</div></li>
						</ul>
					</div>
				</div>
				<div class="element-container cf" data-style="" id="le_body_row_9_col_1_el_4">
					<div class="element">
						<ul class="feature-block feature-block-style-icon feature-block-with-icon feature-block-three-col cf">
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="img/Design_Design-08.png"  /></span><h2>Não se restringe ao emagrecimento</h2><p>Os produtos OMNILIFE servem para as mais variadas doenças e não se restringe ao emagrecimento.</p>

												</div></li>
									 
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="img/Email_Email-12.png"  /></span><h2>Contato direto com nutricionistas</h2><p>Quando você se tornar um empresário OMNILIFE, terá um canal direto com nutricionistas para tirar dúvidas gratuitamente.</p>

												</div></li>
									 
										<li><div><span class="feature-block-icon-container"><img class="feature-block-icon" src="img/Email_Email-24.png"  /></span><h2>NÃO é medicamento</h2><p>Medicamentos são drogas que causam efeitos colaterais, os produtos OMNILIFE são naturais e sem efeitos colaterais.</p>

												</div></li>
						</ul>
					</div>
				</div>
		</div>
	</div>
</div>
		<div style='background:#5A1F7D;padding-top:50px;padding-bottom:30px;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;'  class="row three-columns cf ui-sortable section pre-order   " id="le_body_row_10" data-style="eyJlbGVtZW50SWQiOiJsZV9ib2R5X3Jvd18xMCIsImNzc0NsYXNzIjoicHJlLW9yZGVyIiwiYmFja2dyb3VuZENvbG9yU3RhcnQiOiIjNUExRjdEIiwicGFkZGluZ1RvcCI6IjUwIiwicGFkZGluZ0JvdHRvbSI6IjMwIiwiYm9yZGVyVG9wV2lkdGgiOiIiLCJib3JkZXJUb3BDb2xvciI6IiIsImJvcmRlckJvdHRvbVdpZHRoIjoiIiwiYm9yZGVyQm90dG9tQ29sb3IiOiIiLCJzZWN0aW9uU2VwYXJhdG9yVHlwZSI6Im5vbmUiLCJzZWN0aW9uU2VwYXJhdG9yU3R5bGUiOiIiLCJleHRyYXMiOnsiYW5pbWF0aW9uRWZmZWN0IjoiIiwiYW5pbWF0aW9uRGVsYXkiOiIifSwicm93U2Nyb2xsRml4ZWRQb3NpdGlvbiI6Im5vbmUiLCJhZGRvbiI6e319">
			<div class="fixed-width">
				<div class="one-third column cols narrow" id="le_body_row_10_col_1">
					<div class="element-container cf" data-style="" id="le_body_row_10_col_1_el_1">
						<div class="element"> 
								<div class="image-caption" style='width:250px;margin-top:0px;margin-bottom:px;margin-right:auto;margin-left:auto;'>
								<img alt="" src="img/cafelife.png"  border="0" class="full-width" /></div>
						</div>
					</div>
				</div>
				<div class="two-thirds column cols" id="le_body_row_10_col_2">
					<div class="element-container cf" data-style="" id="le_body_row_10_col_2_el_1">
						<div class="element"> 
							<div style="height:30px">
							</div> 
						</div>
					</div>
					<div class="element-container cf" data-style="" id="le_body_row_10_col_2_el_2">
						<div class="element"> 
							<h2 style='font-size:40px;color:#ffffff;letter-spacing:-1px;text-align:left;'>Gostaria de experimentar os Produtos <i>OMNILIFE</i>?</h2>
						</div>
					</div>
					<div class="element-container cf" data-style="" id="le_body_row_10_col_2_el_3">
						<div class="element"> 
							<div class="op-text-block" style="width:100%;text-align: left;">
								<p style='font-size:19px;color:#ffffff;'>Ao experimentar os efeitos benéficos à saúde que os produtos OMNILIFE proporcionam, você irá se apaixonar e oferecer para todos as pessoas a sua volta. Por que não tornar isso uma fonte de renda? Com a OMNILIFE você muda a vida das pessoas e a sua. Faça isso realizando todos os seus sonhos com o Plano de Compensação da OMNILIFE!</p>
							</div> 
						</div>
					</div>
					<div class="element-container cf pad button" data-style="eyJhZHZhbmNlZENsYXNzIjoicGFkIGJ1dHRvbiJ9" id="le_body_row_10_col_2_el_4">
						<div class="element">
							<div class="op-popup cf" data-width="700"  data-open-effect="fade"  data-close-effect="fade"  data-open-speed="fast"  data-close-speed="fast"  data-border-color="#ffffff"  data-border-size="0"  data-padding-top="35"  data-padding-bottom="35"  data-padding-left="35"  data-padding-right="35"  data-exit-intent="N"  data-trigger-time="0"  data-trigger-dontshow="0"  data-dont-show-on-tablet="N"  data-dont-show-on-mobile="N"  data-popup-id="op_popup_id_1419481303713"  data-epicbox-title="OverlayOptimizer Content" >
								<div class="op-popup-button ">
									<div style="text-align:center">
										<a href="" id="btn_1_fcbcdf3a7417558a91f6c6ffb7c3e46a" class="css-button style-1">
											<span class="text">Quero Adquirir os Produtos!</span>
											<span class="hover"></span>
											<span class="active"></span>
										</a>
									</div>
								</div>
								<div class="op-popup-content">
									<div class="element-container op-popup-element-container "  data-popup-child="true"></div>
									<div class="element-container op-popup-element-container "  data-popup-child="true">
										<div style="height:5px"></div>
									</div>
									<div class="element-container op-popup-element-container "  data-popup-child="true">
										<div class="op-text-block" style="width:100%;margin: 0 auto;text-align:center;">
											<p style='font-size:15px;color:#969696;'>
											<strong>Quase lá:</strong> Preencha com um email válido e clique no botão abaixo para que possamos 
											entrar em contato.</p>
										</div>
									</div>
									<div class="element-container op-popup-element-container open-sans-600"  data-popup-child="true">
										<h2 style='font-size:25px;color:#1f2c3d;letter-spacing:-1px;text-align:center;line-height:32px;margin-top:15px;'>Receba informações agora em seu E-mail ou WhatsApp...</h2>
									</div>
									<div class="element-container op-popup-element-container button"  data-popup-child="true">
										<div id="5a8593309877a" class="optin-box optin-box-24" style="margin-right: auto;margin-left: auto;">
											<form action="" method="post" class="cf op-optin-validation"><div style="display:none"><input type="hidden" name="provider" value="mailpoet" /><input type="hidden" name="redirect_url" value="" /><input type="hidden" name="list" value="1" /><input type="hidden" name="already_subscribed_url" value="" /></div><input type="text" required="required" name="firstname" placeholder="Informe seu nome" value="" /><input type="email" required="required" name="email" placeholder="Informe seu email" value="" /><div class="text-box"><input type="text" name="cf_1" placeholder="Telefone Celular com DDD ou WhatsApp (OPCIONAL)" value="" /></div><div style="text-align:center"><style type="text/css">#btn_1_4f39736e8eb90fae0462c147eb14191c .text {font-size:24px;color:#fcfcfc;font-weight:normal;}#btn_1_4f39736e8eb90fae0462c147eb14191c {width:100%;padding:24px 0;border-width:0px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;background:#F0651B;box-shadow:0px 3px 0px 0px rgba(211,82,13,1);}#btn_1_4f39736e8eb90fae0462c147eb14191c .gradient {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_4f39736e8eb90fae0462c147eb14191c .shine {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_4f39736e8eb90fae0462c147eb14191c .active {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_4f39736e8eb90fae0462c147eb14191c .hover {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}</style><button type="submit" id="btn_1_4f39736e8eb90fae0462c147eb14191c" class="css-button style-1 location_optin_box_style_24"><span class="text">Quero Saber Mais!</span><span class="hover"></span><span class="active"></span></button></div>    <input type="hidden" id="op_optin_nonce" name="op_optin_nonce" value="5fe00db808" /><input type="hidden" name="_wp_http_referer" value="/" /></form>
											<p class="privacy">Política de Privacidade: Sua informação está 100% segura conosco.</p></div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div  class="row one-column cf ui-sortable   " id="le_body_row_11" data-style="">
		<div class="fixed-width">
		<div class="one-column column cols" id="le_body_row_11_col_1">
		
		
		<!--<div class="element-container cf" data-style="" id="le_body_row_11_col_1_el_1">
			<div class="element"> 
				<div class="image-caption" style='width:1772px;margin-top:0px;margin-bottom:px;margin-right:auto;margin-left:auto;'>
					<img alt="" src="img/Folder.jpg"  border="0" class="full-width" />
				</div>
			</div>
		</div>
		<div class="element-container cf" data-style="" id="le_body_row_11_col_1_el_2">
			<div class="element"> 
				<div class="image-caption" style='width:1772px;margin-top:0px;margin-bottom:px;margin-right:auto;margin-left:auto;'>
					<img alt="" src="img/Folder2.jpg"  border="0" class="full-width" />
				</div>
			</div>
		</div>-->
		
		
			 </div>
			 </div></div>
			 <div style='background:#ECF0F1;padding-top:70px;padding-bottom:80px;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;'  class="row one-column cf ui-sortable section   " id="le_body_row_12" data-style="eyJiYWNrZ3JvdW5kQ29sb3JTdGFydCI6IiNFQ0YwRjEiLCJwYWRkaW5nVG9wIjoiNzAiLCJwYWRkaW5nQm90dG9tIjoiODAiLCJib3JkZXJUb3BXaWR0aCI6IiIsImJvcmRlclRvcENvbG9yIjoiIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIiLCJib3JkZXJCb3R0b21Db2xvciI6IiIsImFkZG9uIjp7InZpZGVvX2JhY2tncm91bmRfdXJsX21wNCI6IiIsInZpZGVvX2JhY2tncm91bmRfdXJsX3dlYm0iOiIiLCJ2aWRlb19iYWNrZ3JvdW5kX3VybF9vZ3YiOiIiLCJ2aWRlb19iYWNrZ3JvdW5kX292ZXJsYXlfY29sb3IiOiIiLCJ2aWRlb19iYWNrZ3JvdW5kX292ZXJsYXlfb3BhY2l0eSI6IjAiLCJ2aWRlb19iYWNrZ3JvdW5kX292ZXJsYXlfaW1hZ2UiOiIifSwiZWxlbWVudElkIjoibGVfYm9keV9yb3dfMTEifQ==">
			 <div class="fixed-width">
			 <div class="one-column column cols" id="le_body_row_12_col_1">
			 <div class="element-container cf" data-style="" id="le_body_row_12_col_1_el_1">
			 <div class="element"> 
			 <h2 style='font-size:50px;letter-spacing:-1px;text-align:center;'>Quer Saber Mais Detalhes?</h2> 
			 </div>
			 </div>
			 <div class="element-container cf" data-style="" id="le_body_row_12_col_1_el_2">
			 <div class="element"> 
			 <h3 style='font-size:25px;font-style:normal;font-weight:normal;color:#828282;text-align:center;margin-bottom:30px;'>Entre em contato conosco pelo Messenger e whatsapp que Tiraremos todas as suas dúvidas e explicaremos como realizar todos os seus sonhos com a OMNILIFE.</h3> 
			 </div>
			 </div>
			 <div class="element-container cf pad button" data-style="eyJhZHZhbmNlZENsYXNzIjoicGFkIGJ1dHRvbiJ9" id="le_body_row_12_col_1_el_3">
			 <div class="element">
			 <div class="op-popup cf" data-width="700"  data-open-effect="fade"  data-close-effect="fade"  data-open-speed="fast"  data-close-speed="fast"  data-border-color="#ffffff"  data-border-size="0"  data-padding-top="35"  data-padding-bottom="35"  data-padding-left="35"  data-padding-right="35"  data-exit-intent="N"  data-trigger-time="0"  data-trigger-dontshow="0"  data-dont-show-on-tablet="N"  data-dont-show-on-mobile="N"  data-popup-id="op_popup_id_1419481303713"  data-epicbox-title="OverlayOptimizer Content" >
			 <div class="op-popup-content">
			 <div class="element-container op-popup-element-container "  data-popup-child="true">

        
            <div class="progressbar-style-1" id="progressbar-a54d77b439687dd1a6574717db1e4431">
                <span>50% Completo</span>
            </div>

        </div><div class="element-container op-popup-element-container "  data-popup-child="true"><div style="height:5px"></div></div><div class="element-container op-popup-element-container "  data-popup-child="true"><div class="op-text-block" style="width:100%;margin: 0 auto;text-align:center;"><p style='font-size:15px;color:#969696;'><strong>Quase lá:</strong> Por favor, preencha com um e-mail válido e clique no botão 'Quero Saber Mais!</p>
</div></div><div class="element-container op-popup-element-container open-sans-600"  data-popup-child="true"><h2 style='font-size:25px;color:#1f2c3d;letter-spacing:-1px;text-align:center;line-height:32px;margin-top:15px;'>Receba em seu e-mail e/ou WhatsApp informações sobre esta oportunidade de Negócio.</h2></div><div class="element-container op-popup-element-container button"  data-popup-child="true">
<div id="5a859330c600a" class="optin-box optin-box-24" style="margin-right: auto;margin-left: auto;">
    <form action="" method="post" class="cf op-optin-validation"><div style="display:none"><input type="hidden" name="provider" value="mailpoet" /><input type="hidden" name="redirect_url" value="" /><input type="hidden" name="list" value="1" /><input type="hidden" name="already_subscribed_url" value="" /></div><input type="text" required="required" name="firstname" placeholder="Digite seu nome" value="" /><input type="email" required="required" name="email" placeholder="Digite seu endereço de e-mail" value="" /><div class="text-box"><input type="text" name="cf_1" placeholder="Seu número de Celular (DDD + Número)" value="" /></div><div style="text-align:center"><style type="text/css">#btn_1_4f39736e8eb90fae0462c147eb14191c .text {font-size:24px;color:#fcfcfc;font-weight:normal;}#btn_1_4f39736e8eb90fae0462c147eb14191c {width:100%;padding:24px 0;border-width:0px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;background:#F0651B;box-shadow:0px 3px 0px 0px rgba(211,82,13,1);}#btn_1_4f39736e8eb90fae0462c147eb14191c .gradient {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_4f39736e8eb90fae0462c147eb14191c .shine {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_4f39736e8eb90fae0462c147eb14191c .active {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}#btn_1_4f39736e8eb90fae0462c147eb14191c .hover {-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}</style><button type="submit" id="btn_1_4f39736e8eb90fae0462c147eb14191c" class="css-button style-1 location_optin_box_style_24"><span class="text">Quero Saber Mais!</span><span class="hover"></span><span class="active"></span></button></div>    <input type="hidden" id="op_optin_nonce" name="op_optin_nonce" value="5fe00db808" /><input type="hidden" name="_wp_http_referer" value="/" /></form>
    <p class="privacy">Política de Privacidade: Suas informações estão 100% seguras conosco.</p></div>
</div>
</div>
</div>
</div></div></div>
</div></div>


</div>        

<div class="full-width footer small-footer-text">
                        <div class="row">
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
                    <p class="footer-copyright">Copyright 2018 - Saúde e Vida - All Rights Reserved</p><p class="op-promote"><a href="http://www.optimizepress.com/" target="_blank">Powered by OptimizePress 2.0</a></p>                </div>
            </div>
        </div>

</div><!-- container -->
			
			

			
			
			
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "FACEBOOK", // Facebook page ID
            whatsapp: "+55WHATSAPP", // WhatsApp number
           // company_logo_url: "//www.saudevida.life/", // URL of company logo (png, jpg, gif)
            greeting_message: "Ola, estou por aqui. Entre em contato comigo e entenda como funciona a negócios e saúde OmniLife", // Text of greeting message
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
</script>
<!-- /WhatsHelp.io widget -->
</body>
</html>