<!doctype html>
<html>
<head>
<meta charset="utf-8">


<?php include_once("analyticstracking.php") ?>

<?php

	if(strpos($_SERVER['HTTP_REFERER'], "forrozapp.com.br")===false)
	{
		  #abaixo, criamos uma variavel que terá como conteúdo o endereço para onde haverá o redirecionamento:  
		 $redirect = "http://www.forrozapp.com.br/simulador/lista.php?id=".$_GET["q"];
		 
		 #abaixo, chamamos a função header() com o atributo location: apontando para a variavel $redirect, que por 
		 #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
		 header("location:$redirect");
	}
?>


<?php

// Conexao com o banco de dados
    $server = "LOCAL";
    $user = "USER";
    $senha = "SENHA";
    $base = "BASE";

    $conexao = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);

    $query = $_GET['q'];
    $query = preg_replace('/[^[:alnum:]_]/', '',$query); 

    $q = addslashes($query);
	
	$sql = "SELECT SQL_CACHE * FROM cds WHERE id='$q'";
	
	$result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);
	
    // Verifica se a consulta retornou linhas 
    if ($cont > 0) {

        
        $return= "";

        // Captura os dados da consulta e inseri na tabela HTML
        if ($linha = mysql_fetch_array($result)) {
            $nome = utf8_encode($linha["nome"]);
            $url = utf8_encode($linha["url"]);
			$prefixo = utf8_encode($linha["prefixo"]);
			$sufixo = utf8_encode($linha["sufixo"]);
			$faixas = utf8_encode($linha["faixas"]);
			$cd_cover = utf8_encode($linha["cd_cover"]);
			
        }

        echo $return;
    } else {

			$redirect = "http://forrozapp.com.br";

			header("location:$redirect");
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }
	
	
		$sql = "UPDATE cds SET downs = downs+1 WHERE id='$q'";
		$result = mysql_query($sql);
		$cont = mysql_affected_rows($conexao);
?>


<title>Player - <?php echo $nome;  ?></title>
<link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico">

<meta name="robots" content="noindex">

<!-- player bar ui -->
    <script type="text/javascript" src="script/soundmanager2.js"></script>
	<script type="text/javascript" src="script/bar-ui.js"></script>
    <link rel="stylesheet" href="css/bar-ui.css" />
    
    <!-- demo for this page only, you don't need this stuff -->
    <script src="script/demo.js"></script>
    <link rel="stylesheet" href="css/demo.css" />

<!-- player bar ui -->

<style type="text/css">
.sm2-bar-ui {
 font-size: 16px;
}
.sm2-bar-ui .sm2-main-controls,
.sm2-bar-ui .sm2-playlist-drawer {
 background-color: #c26430;
}
.sm2-bar-ui .sm2-inline-texture {
 background: transparent;
}
</style>

</head>

<body>


<a href="http://forrozapp.com.br/simulador/lista.php?id=<?php echo $q; ?>">
	<img onerror="this.onerror=null;this.src='http://forrozapp.com/cds-mes/cd_cover.jpg';" src="<?php echo $cd_cover; ?>" style="width: 300px; height:300px; float: left;"></div>
</a>


<div style="height:60px; width:800px; float:left;"><h2><?php echo $nome; ?></h2></div>
<br><a href="http://forrozapp.com.br/simulador/lista.php?id=<?php echo $q; ?>">VOLTAR AO FORRÓZAPP</a>

<div class="sm2-bar-ui dark-text flat playlist-open" style="width:500px; height:240px;">

 <div style="float: left;" class="bd sm2-main-controls" style="background-color: rgb(194, 100, 48);">
 
  <div class="sm2-inline-texture"></div>
  <div class="sm2-inline-gradient"></div>

  <div class="sm2-inline-element sm2-button-element">
   <div class="sm2-button-bd">
    <a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
   </div>
  </div>

  <div class="sm2-inline-element sm2-inline-status">

   <div class="sm2-playlist">
        <div class="sm2-playlist-target">
            <ul class="sm2-playlist-bd"><li><marquee>ForróZapp - Baixe para Android ou Windows Phone</marquee></li>
            </ul>
        </div>
   </div>

   
   
   <div class="sm2-progress">
							    <div class="sm2-row">
							    <div class="sm2-inline-time">0:00</div>
							     <div class="sm2-progress-bd">
							      <div class="sm2-progress-track">
							       <div class="sm2-progress-bar"></div>
							       <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
							      </div>
							     </div>
							     <div class="sm2-inline-duration">0:00</div>
							    </div>
							   </div>

  </div>

  <div class="sm2-inline-element sm2-button-element sm2-volume">
   <div class="sm2-button-bd">
    <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
    <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
   </div>
  </div>

  <div class="sm2-inline-element sm2-button-element">
   <div class="sm2-button-bd">
    <a href="#prev" title="Anterior" class="sm2-inline-button previous">&lt; anterior</a>
   </div>
  </div>

  <div class="sm2-inline-element sm2-button-element">
   <div class="sm2-button-bd">
    <a href="#next" title="Próxima" class="sm2-inline-button next">&gt; próxima</a>
   </div>
  </div>

  <div class="sm2-inline-element sm2-button-element">
   <div class="sm2-button-bd">
    <a href="#repeat" title="Repetir playlist" class="sm2-inline-button repeat">∞ repetir</a>
   </div>
  </div>

  <!-- not implemented -->
  <!--
  <div class="sm2-inline-element sm2-button-element disabled">
   <div class="sm2-button-bd">
    <a href="#shuffle" title="Shuffle" class="sm2-inline-button shuffle">shuffle</a>
   </div>
  </div>
  -->

 

 </div>

 <div class="bd sm2-playlist-drawer sm2-element" style="height: 0px; background-color: rgb(194, 100, 48);">

  

  <!-- playlist content is mirrored here -->

  <div class="sm2-playlist-wrapper">

    <ul class="sm2-playlist-bd">


     <!-- links -->
     
     <?php 
	 $i=1;
	 $temp=1;
	 while($i<=$faixas)
	 {
		 if($i<10)
		 {
			 $temp="0".$i;
		 }
		 else
		 {
			 $temp=$i;
		 }
		 
		 
		 echo "<li class=\"\">";
		 echo "<a href='".$url."/".$prefixo.$temp.$sufixo."'><b>".$prefixo.$temp.$sufixo."</b> - ".$nome."</a>";
		 echo "</li>";
		 
		 $i++;
	 }
	  ?>
     

    
    </ul>
  
  </div>

 </div>




</div>

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Anuncio Topo Novo_ForroZapp -->
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-3491610413834288"
		 data-ad-slot="7365682458"
		 data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Anuncio Topo Novo_ForroZapp -->
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-3491610413834288"
		 data-ad-slot="7365682458"
		 data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
<!-- RECOMENDAÇÕES E ANUNCIOS abaixo 
	<div style="height:300px; width:100%;">
			
			
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-format="autorelaxed"
				 data-ad-client="ca-pub-3491610413834288"
				 data-ad-slot="9936520451"></ins>
			<script>
				 (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
	</div>
-->

</body>
</html>
