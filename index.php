<html>
<head>

<meta http-equiv="content-language" content="pt-br" />
</head>

<body>

<!-- <script src="js/so.js"></script> -->
<?php
/*
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $actual_link;

if(($actual_link=="http://giovanniciresola.com/")||($actual_link=="http://www.giovanniciresola.com/"))
{

	$redirect="http://giovanniciresola.com/01-padre/painel";
	header("location:$redirect");
}
else{
	*/
$redirect = "http://forrozapp.com.br/simulador/destaques.php";

header("location:$redirect");
//}
/*
$_SERVER["REQUEST_URI"];

$parte1 = strrchr($_SERVER["REQUEST_URI"],"?");
$parte2 = str_replace($parte1,"",$_SERVER["REQUEST_URI"]);

$url = explode("/", $parte2);
array_shift($url);

print_r($url);

if(!empty($url[0]))
{

	if(file_exists($url[0]))
	{
		include($url[0]);
	}
	else if(file_exists($url[0].".php"))
	{
		include($url[0].".php");
	}


//	include("lista.php?name=".$url[0]."&id=".$url[1]);

}
*/
?>

</body>
</html>
