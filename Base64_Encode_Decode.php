<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teste de Base64</title>
</head>
<body>
<?php //inicio PHP
$senha="Centro Paula Souza";
$senha_crip=base64_encode($senha);
?><!--Fim PHP-->
Senha Criptografada: <?php echo $senha_crip; ?>
<br>
Senha Decriptografada: <?php echo base64_decode($senha_crip); ?>
</body>
</html>