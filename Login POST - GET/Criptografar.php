<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>
<body>
<?php //inicio PHP
$senha=$_POST['senha'];
$senha_crip=base64_encode($senha);
echo "<script> window.location.href='Decriptografar.php?batata=$senha_crip'</script>";
?><!--Fim PHP-->
</body>
</html>