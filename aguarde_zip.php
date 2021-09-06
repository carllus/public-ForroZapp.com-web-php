<!doctype html>
<html>
<head>
<meta charset="utf-8">

<?php include_once("analyticstracking.php") ?>

<?php

	if(strpos($_SERVER['HTTP_REFERER'], "forrozapp.com.br")===false)
	{
		  #abaixo, criamos uma variavel que terá como conteúdo o endereço para onde haverá o redirecionamento:  
		 $redirect = "http://www.forrozapp.com.br/lista.php?id=".$_GET["q"];
		 
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

        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }
	
	
		$sql = "UPDATE cds SET downs = downs+1 WHERE id='$q'";
		$result = mysql_query($sql);
		$cont = mysql_affected_rows($conexao);
?>

<title>Baixando - <?php echo $nome;  ?></title>
<link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico">

<meta name="robots" content="noindex">

</head>

<body onload="RegressivoCont(15); IniciaRegressivo();">


<a href="http://forrozapp.com.br/lista.php?id=<?php echo $q; ?>">
	<div style="background-image: url('<?php echo $cd_cover; ?>'); background-size: 100% 100%; width: 200px; height:200px; float: left;"></div>
</a>


<div style="height:60px; width:800px; float:left;"><h1>PROCESSANDO...<div id="cont"></div></h1></div>
<br><a href="http://forrozapp.com.br/lista.php?id=<?php echo $q; ?>">VOLTAR AO FORRÓZAPP</a>

<br>
<br>
<br>
<h2></h2>
<script type="text/javascript">
var sts = -1;
function RegressivoCont(futy){
  sts = (sts==-1) ? futy : sts;
  var faltam =  '<div class="cont">AGUARDE O INÍCIO DO DOWNLOAD: '+sts+'</div>'
  if (sts > 0) {
        document.getElementById('cont').innerHTML = faltam;
        sts--;
        setTimeout(RegressivoCont,1000);      
  } else {
	  while(trues)
	  {
        document.getElementById('cont').innerHTML = "<div class='cont'>DOWNLOAD (INICIADO OU INICIARÁ) A QUALQUER MOMENTO.</div>";
		setTimeout(RegressivoCont,1000);
		document.getElementById('cont').innerHTML = "<div class='cont'>DOWNLOAD (INICIADO OU INICIARÁ) A QUALQUER MOMENTO..</div>";
		setTimeout(RegressivoCont,1000);
		document.getElementById('cont').innerHTML = "<div class='cont'>DOWNLOAD (INICIADO OU INICIARÁ) A QUALQUER MOMENTO...</div>";
		setTimeout(RegressivoCont,1000);
	  }
  }
}
</script>
<br>
<br>
<h2><?php echo $nome; ?></h2>


<!-- RECOMENDAÇÕES E ANUNCIOS abaixo -->
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

	<?php
	$id=$_GET['id'];
	$servidor=$_GET['servidor'];
	 echo "<meta http-equiv='refresh' content='5; url=http://$servidor.forrozapp.com.br/down-file.php?id=$q' />";

	?>
	
</body>
</html>