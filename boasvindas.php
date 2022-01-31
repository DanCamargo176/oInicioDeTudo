<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boas Vindas</title>
</head>
<body>
<?php
$nome_cookie=$_COOKIE['ck_nome'];
echo "Bem Vindo(a): $nome_cookie";
//$senha= md5("testemd5senha");
	//echo $senha;

?>
<br>
Seu número da sorte é: <?php echo rand(0, 400) . "\n";// Rand com minimo=0 e maximo=400
?>
</body>
</html>