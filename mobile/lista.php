

<?php
// Conexao com o banco de dados PARA DESTAQUES
$id = $_GET['id'];

if($id==null)
{
$redirect = "http://forrozapp.com.br";

header("location:$redirect");

//echo "<meta http-equiv='refresh' content=0;url='http://forrozapp.com.br'>";
}


if(isset($_GET['banda']))
{
  $redirect = "http://forrozapp.com.br/mobile/lista.php?name=".str_replace(' ', '+', $_GET['banda'])."&id=".$_GET['id'];

  header("location:$redirect");

  //echo "<meta http-equiv='refresh' content=0;url='http://forrozapp.com.br'>";
}


//############### MANTEM VERSÃO PARA O SISTEMA

	$useragent=$_SERVER['HTTP_USER_AGENT'];

	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
	{	
	}
	else
	{
		$redirect = "http://forrozapp.com.br/simulador/lista.php?name=".str_replace(' ', '+', $_GET['name'])."&id=".$_GET['id'];
		header("location:$redirect");
	}

//############### MANTEM VERSÃO PARA O SISTEMA





    $server = "LOCAL";
    $user = "USER";
    $senha = "SENHA";
    $base = "BASE";

    $conexao = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);

	$query = $_GET['id'];
    $query = preg_replace('/[^[:alnum:]_]/', '',$query); 

    $id = addslashes($query);
	
    $sql = "SELECT SQL_CACHE * FROM cds WHERE id=".$id;
    

    $result = mysql_query($sql);

if ($linha = mysql_fetch_array($result)) {

    	$banda = $linha['nome'];
	$faixas = $linha['faixas'];
	$cd_cover= $linha['cd_cover'];
	$cd_cover=str_replace(" ", "%20", $cd_cover);
	$downs = $linha['downs'];
	$data = $linha['data'];
	$diretorio = $linha['diretorio'];
	$url = $linha['url'];
	$prefixo = $linha['prefixo'];
	$sufixo = $linha['sufixo'];

        if((!isset($_GET['banda']))&&(!isset($_GET['name'])))
        {
         $redirect = "http://forrozapp.com.br/mobile/lista.php?name=".str_replace(' ', '+', $banda)."&id=".$_GET['id'];

         header("location:$redirect");
        }

}
else
{
		$redirect = "http://forrozapp.com.br";

         header("location:$redirect");
}


//busca qual servidor ta hospedado
if(strpos("[".$url."]", "www"))
     {
     //echo 'www';
	$servidor="www";
     }
else if(strpos("[".$url."]", "server2"))
     {
     //echo 'server2';
	$servidor="server2";
     }
else if(strpos("[".$url."]", "files2"))
     {
     //echo 'files2';
	$servidor="files2";
     }
else
     {
//echo 'é pq é sem www';
	$servidor="www";
     }



?>


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


<title>ForróZapp - Baixar <?php echo $banda ?></title>


<!-- player -->
    <!-- required -->
    <link rel="stylesheet" type="text/css" href="player/360player.css" />
    
    <!-- Apache-licensed animation library -->
    <script type="text/javascript" src="player/berniecode-animator.js"></script>
    
    <!-- the core stuff -->
    <script type="text/javascript" src="player/soundmanager2.js"></script>
    <script type="text/javascript" src="player/360player.js"></script>
<!-- player -->


<link rel="stylesheet" type="text/css" href="css/lista.css">
<link rel="stylesheet" type="text/css" href="css/limpa-links.css">

<!-- <script src="js/so.js"></script> -->
<?php include_once("analyticstracking.php") ?>


		<!-- Google -->
		<meta name="description" content="Ouça e baixe <?php echo $banda; ?> em seu computador ou diretamente em seu celular com Android ou Windows Phone" />
        <meta name="keywords" content="<?php echo $banda; ?>, Meu Forró, Forrozapp, Forrózapp, baixar forró, músicas de forró, Aplicativo, Baixar, Forró, Download, Shows, Música, Suamusica.com, Sua Música, dandan cds, jordy produções, joão antonio cds, toninho cds, China cd, China cds, chinacd.com.br, chinacds.net.br, chinacds.br"/>
        <meta name="robots" content="index, follow">
        <link rel="Shortcut Icon" type="image/x-icon" href="img/favicon.ico">    
    
    
        <!-- Facebook -->
        <meta property="og:url" content="http://forrozapp.com.br<?php echo $_SERVER['REQUEST_URI'] ?>">
        <meta property="og:title" content="ForróZapp - <?php echo $banda; ?>">
        <meta property="og:site_name" content="ForróZapp">
        <meta property="og:description" content="Ouça e baixe <?php echo $banda; ?> diretamente em seu celular com ForróZapp Mobile, Android ou Windows Phone">        
	<meta property="og:image" content="<?php echo $cd_cover; ?>">
	<meta property="og:image" content="<?php echo str_replace("%20", " ", $cd_cover); ?>">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">

<meta charset="utf-8">



<?php
// Conexao com o banco de dados PARA DESTAQUES
$id = $_GET['id'];

    $server = "LOCAL";
    $user = "USER";
    $senha = "SENHA";
    $base = "BASE";

    $conexao = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);

    $sql = "SELECT SQL_CACHE * FROM cds WHERE id=".$id;
    
    sleep(1);

    $result = mysql_query($sql);

if ($linha = mysql_fetch_array($result)) {

    	$banda = $linha['nome'];
	$faixas = $linha['faixas'];
	$downs = $linha['downs'];
	$data = $linha['data'];
	$diretorio = $linha['diretorio'];
	$url = $linha['url'];
	$prefixo = $linha['prefixo'];
	$sufixo = $linha['sufixo'];

}





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
						<div class="fb-like" data-href="http://forrozapp.com.br<?php echo $_SERVER['REQUEST_URI'] ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
						<br>
						<!-- PLUS +1 -->
						<!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
						<script src="https://apis.google.com/js/platform.js" async defer>
						  {lang: 'pt-BR'}
						</script>

						<!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
						<div class="g-plusone"></div>

						</div>

					</div>
    

    
    <div class="description">
    		<div class="description-img">
				<?php echo "<img onerror=\"this.onerror=null;this.src='http://forrozapp.com/cds-mes/cd_cover.jpg';\" src='".$url."/cd_cover.jpg' width='100%' height='100%'>";?>
            </div>
	        <div class="description-text"><?php echo substr($banda, 0, 90)."..."; ?></div>
	        <div class="description-subtitle">    
            	<div class="description-subtitle-text">
					<?php echo "postado: ".$data." com ".$downs." downs" ?>
               	</div>        
                
				<?php 
				echo "<a href=\"javascript:void(0)\" onClick=\"abre('reprodutor/index.php?q=".$id."','_blank')\">";
				 ?>
					<div class="ouvir-todas"></div>
                </a>
                 
                <?php 
				echo "<a href='javascript:void(0)\' onClick=\"abre('http://".$servidor.".forrozapp.com.br/down-file.php?id=".$id."', '_parent')\">";
				 ?>

					<div class="baixar-todos">

					</div>
				</a>
           	</div>
    </div>
    
					<div class="corpo">
						
						<!--
						<a href="#" title="<?php echo $destaque1["nome"]; ?>">
							
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
							
							$i=1;
							while ($i <= $faixas) {
								
								//<a href="http://sample.mp3" id="audiolink">play</a>
								
									if($i<10)
									{
										$num="0".$i;
									}
									else
									{
										$num=$i;
									}
								
									//echo "<a href='".$url."/".$prefixo.$num.$sufixo."' id='audiolink' title='".$prefixo.$sufixo. "'>";
									echo "<div class='corpo-item'>";
									echo "<div class='corpo-item-img'>";
									//echo "<img src='".$url."/cd_cover.jpg' width='100%' height='100%'>";
									echo "</div>";
									
									if($css == "default-mobile.css")
									{
										echo "<br><div class='corpo-item-text-mobile'>";
									}
									else
									{
										echo "<div class='corpo-item-text'>";
									}
									
									//echo $linha["nome"];
									echo $prefixo.$num.$sufixo;
									
									echo "</div>";
									
									echo "<div class='play'> <div class='ui360' style='width:10px; height:10px' ><a href='".$url."/".$prefixo.$num.$sufixo."' id='audiolink' title='".$prefixo.$sufixo. "' ></a></div>  </div>";
									
								
									
									echo "<a href=\"javascript:void(0)\" onClick=\"abre('http://forrozapp.com.br/direct_download.php?q=".$id."&file=".$prefixo.$num.$sufixo."', '_parent')\"><div class='baixar'></div></a>";
									
									echo "</div>";
									//echo "</a>";
									
									$i++;
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
