<?php

	if(strpos($_SERVER['HTTP_REFERER'], "forrozapp.com.br")===false)
	{
		  #abaixo, criamos uma variavel que terá como conteúdo o endereço para onde haverá o redirecionamento:  
		 $redirect = "http://www.forrozapp.com.br/lista.php?id=".$_GET["id"];
		 
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


      $id = $_GET['id'];


    $conexao = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);

    $query = preg_replace('/[^[:alnum:]_]/', '',$id);

    $q = addslashes($query);

    $sql = "SELECT * FROM cds WHERE id='$q'";

	$result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);
	
    // Verifica se a consulta retornou linhas 
    if ($cont > 0) {

        
        $return= "";

        // Captura os dados da consulta e inseri na tabela HTML
        if ($linha = mysql_fetch_array($result)) {
            		$diretorio = utf8_encode($linha["diretorio"]);
	                $url = utf8_encode($linha["url"]);
			$prefixo = utf8_encode($linha["prefixo"]);
			$sufixo = utf8_encode($linha["sufixo"]);
			$faixas = utf8_encode($linha["faixas"]);
        }

        echo $return;
    } else {

        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }


//##############################################################


    // Verifica se a variável está vazia
    if (empty($nome)) {
	$sql = "UPDATE cds SET downs = downs, `gostei`=`gostei` WHERE id='$q'";
    } else {
        $nome .= "%";
	$sql = "UPDATE cds SET downs = downs, `gostei`=`gostei` WHERE id='$q'";
    }
    sleep(1);

echo "voce digitou $q";

    $result = mysql_query($sql);




include_once('simple_html_dom.php');

$html = file_get_html("http://forrozapp.com.br/appforrozapp1_22/insert_todos_down.php?q=".$id);




$filename = $url."/".$diretorio.".zip";

if (!file_exists($filename)) {
    



$file = substr($url, 28);

echo $file;


 
echo $prefixo;
echo $sufixo;
// Inicia a instância da classe ZipArchive
$zip = new ZipArchive;

echo "nao existe";
 
// Cria um novo arquivo .zip chamado minhas_fotos.zip
$zip->open( $file.'/'.$diretorio.'.zip', ZipArchive::CREATE);
 
// Adiciona um arquivo à pasta
$zip->addFile( 
	// Caminho do arquivo original
	$file.'/cd_cover.jpg',
	// Novo nome do arquivo
	'cd_cover.jpg' 
);

$i=1;
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

// Adiciona um arquivo à pasta
$zip->addFile( 

	// Caminho do arquivo original
	$file."/".$prefixo.$temp.$sufixo,
	// Novo nome do arquivo
	$prefixo.$temp.$sufixo 
);

$i++;
}
// Fecha a pasta e salva o arquivo
$zip->close();





}



 $redirect = $url."/".$diretorio.".zip";

header("location:$redirect");



?>
