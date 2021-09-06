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





    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "UPDATE cds SET downs = downs+1 WHERE id='$q'";
    } else {
        $nome .= "%";
        $sql = "UPDATE cds SET downs = downs+1 WHERE id='$q'";
    }
    sleep(1);

echo "voce digitou $q";

    $result = mysql_query($sql);









$file = $_GET['file'];

$file = substr($file, 28);
$name = substr($file, 16);



echo $file;
echo " - ".$name;

header ("Content-type: octet/stream");
header ("Content-disposition: attachment; filename=".$name.";");
header("Content-Length: ".filesize($file));
readfile($file);
exit;

?>