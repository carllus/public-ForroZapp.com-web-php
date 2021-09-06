<!doctype html>
<html>

    <head>

        <link rel="stylesheet" type="text/css" href="css/default.css">
        <meta charset="utf-8">
        <title>ForróZapp - Meu Forró App</title>

<!--    <meta http-equiv="refresh" content=0;url="destaques.php"> -->
<?php

$redirect = "http://forrozapp.com.br/simulador/destaques.php";

header("location:$redirect");

?>


        
<!--        <script src="js/so.js"></script> -->
        
        
		<!-- Google -->
		<meta name="description" content="Ouça e baixe shows de fórro diretamente em seu celular com ForróZapp Mobile, Android ou Windows Phone" />
        <meta name="keywords" content="Meu Forró, Forrozapp, Forrózapp, baixar forró, músicas de forró, Aplicativo, Baixar, Forró, Download, Shows, Música"/>
        <meta name="robots" content="index, nofollow">
        <link rel="Shortcut Icon" type="image/x-icon" href="img/favicon.ico">    
    
    
        <!-- Facebook -->
        <meta property="og:url" content="http://www.meuforroapp.com.br/">
        <meta property="og:title" content="ForróZapp Mobile - Meu Forró App">
        <meta property="og:site_name" content="ForróZapp">
        <meta property="og:description" content="Ouça e baixe shows de fórro diretamente em seu celular com ForróZapp Mobile, Android ou Windows Phone">
        <meta property="og:image" content="http://www.meuforroapp.com.br/img/logo-200x200.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">

    </head>
      
    <body background="img/bg-body-<?php echo rand(1,8); ?>.jpg">
    

    	<div class="mao">
        	<div class="iframe">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="splash.html">
                </iframe>
            </div>
            
            <div class="anuncio">
          
           	</div>
            
            <div class="menu-cell">
            	<a href="#" title="menu">
	            	<div class="menu-cell-menu"></div>
                </a>
    
                <a href="web.php" title="home">
	                <div class="menu-cell-home"></div>
                </a>
    
                <a href="javascript:history.back()" title="voltar">
	                <div class="menu-cell-back"></div>
                </a>
            </div>
            
        </div>
    </body>
</html>
