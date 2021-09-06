<!doctype html>
<html>
<head>

<!-- push-->	
	<script type="text/javascript">
    (function(p,u,s,h){
        p._pcq=p._pcq||[];
        p._pcq.push(['_currentTime',Date.now()]);
        s=u.createElement('script');
        s.type='text/javascript';
        s.async=true;
        s.src='https://cdn.pushcrew.com/js/86adb1aacdc8bcfe3d927bb2397693e9.js';
        h=u.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s,h);
    })(window,document);
</script>
<!-- push-->

<meta name="googlebot" content="noindex">

<meta charset="utf-8">


<script src="http://ressio.github.io/lazy-load-xt/libs/error.js"></script>
    <script src="http://ressio.github.io/lazy-load-xt/libs/jquery/jquery.js"></script>
    <script src="http://ressio.github.io/lazy-load-xt/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://ressio.github.io/lazy-load-xt/dist/jquery.lazyloadxt.js"></script>

	<!-- message dialog baixados -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- FB -->
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=479222122140419";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>


<meta name="viewport" content="width=device-width, initial-scale=1">
	
<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{	
}
else
{
	$redirect = "http://forrozapp.com.br/simulador/recentes.php";
	header("location:$redirect");
}

?>

<!-- <\?php

	if(strpos($_SERVER['HTTP_REFERER'], "meuforroapp.com")===false)
	{
		  #abaixo, criamos uma variavel que terá como conteúdo o endereço para onde haverá o redirecionamento:  
		 $redirect = "http://www.meuforroapp.com";
		 
		 #abaixo, chamamos a função header() com o atributo location: apontando para a variavel $redirect, que por 
		 #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
		 header("location:$redirect");
	}
?>
-->

<title>ForróZapp - Mais Baixados</title>
<link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico">

<meta name="robots" content="noindex">

<link rel="stylesheet" type="text/css" href="css/baixados.css">
<link rel="stylesheet" type="text/css" href="css/limpa-links.css">

<!-- <script src="js/so.js"></script> -->
<?php include_once("analyticstracking.php") ?>

<?php
// Conexao com o banco de dados PARA DESTAQUES

    $server = "LOCAL";
    $user = "USER";
    $senha = "SENHA";
    $base = "BASE";

    $conexao = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);

    //$sql = "SELECT SQL_CACHE * FROM cds WHERE data BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() ORDER BY id DESC LIMIT 100";
	  $sql = "SELECT SQL_CACHE * FROM cds WHERE data BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() ORDER BY data DESC, RAND() LIMIT 100";
    
    sleep(1);

    $result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);

?>


<script>
function abre(valor1,valor2) {
window.location.assign(valor1)
}
</script>

		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-3491610413834288",
			enable_page_level_ads: true
		  });
		</script>

</head>
<body>


<div class="tudo">
		<div class="topo">
						<a href="http://forrozapp.com.br">
							<div class="topo-ico"></div>
						</a>
						<div class="topo-texto">
							<!--
							<a href="http://forrozapp.com.br">
								<div class="topo-texto-conteudo"></div>
							</a>
							-->
							<script>
							  (function() {
							    var cx = '002913554630264301877:v2wxvgjzgzm';
							    var gcse = document.createElement('script');
							    gcse.type = 'text/javascript';
							    gcse.async = true;
							    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
							    var s = document.getElementsByTagName('script')[0];
							    s.parentNode.insertBefore(gcse, s);
							  })();
							</script>
							<gcse:search></gcse:search>

							
						</div>
						<div class="topo-ico-menu">

							
							<div class="fb-like" data-href="http://forrozapp.com.br" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
							<br>
							
							
							<script src="https://apis.google.com/js/platform.js" async defer>
							  {lang: 'pt-BR'}
							</script>
							<div class="g-plusone"></div>
							

                        </div>
						
					</div>
    
    <div class="menu">
	    <a href="destaques.php" onClick="abre('destaques.php','_parent')" title="Destaques">
    		<div class="menu-destaque"></div>
		</a>

		<a href="#" id="baixados" title="Mais Baixados">
			<div class="menu-baixados"></div>
		</a>
		
			<div id="dialog" title="Selecione o filtro">
			 <a href="top-bimestre.php">Mais Baixados do Bimestre</a><br><br>
			 <a href="top-mes.php">Mais Baixados do Mês</a><br><br>
			 <a href="top-semana.php">Mais Baixados da Semana</a>
			</div>

			<script>
			$( "#dialog" ).dialog({ autoOpen: false });
			$( "#baixados" ).click(function() {
			  $( "#dialog" ).dialog( "open" );
			});
			</script>
        

        
        <a href="recentes.php" title="Mais Recentes">
	        <div class="menu-recentes-selected"></div>
        </a>
    </div>
    
					<div class="corpo">
						
						<!--
						<a href="lista.php" title="<?php echo $destaque1["nome"]; ?>">
							
							<div class="corpo-item">
								<div class="corpo-item-img">
									<img src="<?php echo $destaque1["url"]."/cd_cover.jpg"; ?>" width="100%" height="100%">
								</div>
								<div class="corpo-item-text">
									<?php echo $destaque1["nome"]; ?>
								</div>
								<div class="corpo-item-subtitle">
									<?php echo "postado em ". $destaque1["data"] ." com ". $destaque1["downs"] ." downloads"; ?>
								</div>
							</div>
							
						</a>
						-->
						
						
						<?php
								// Verifica se a consulta retornou linhas 
							if ($cont > 0) {
								// Captura os dados da consulta e inseri na tabela HTML
								while ($linha = mysql_fetch_array($result)) {
									
									$linha["data"] = date("d-m-Y", strtotime($linha["data"]));

									echo "<a title='".$linha["nome"]."' href=\"lista.php?name=".str_ireplace(" ","+",$linha["nome"])."&id=".$linha["id"]."\">";
									echo "<div class='corpo-item'>";
									echo "<div class='corpo-item-img'>";
									echo "<img onerror=\"this.onerror=null;this.src='http://forrozapp.com/cds-mes/cd_cover.jpg';\" src='".$linha["cd_cover"]."' width='100%' height='100%'>";
									echo "</div>";
									
									if($css == "default-mobile.css")
									{
										echo "<div class='corpo-item-text-mobile'>";
									}
									else
									{
										echo "<div class='corpo-item-text'>";
									}
									
									echo substr($linha["nome"], 0, 90)."...";
									echo "</div>";
									
									if($css == "default-mobile.css")
									{
										echo "<div class='corpo-item-subtitle-mobile'>";
									}
									else
									{
										echo "<div class='corpo-item-subtitle'>";
									}
									
									echo "postado em ". $linha["data"] ."<br>com ". $linha["downs"] ." downloads";
									echo "</div>";
									echo "</div>";
									echo "</a>";
								}
							} else {
						
								// Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
								echo "Não foram encontrados registros!";
							}
						?>
						
						
					</div>

	<div class="rodape">
    
	    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- rodape-mobile-responsive -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-3491610413834288"
             data-ad-slot="3381449656"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    
    </div>
</div>
</body>
</html>
