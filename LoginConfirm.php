<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Confirmação</title>
</head>
<body>
<?php
$user=$_POST["user"];
$senha=$_POST["senha"];

	if($user=="Daniel" && $senha=="1234"){//Inicio do If
		echo"<script> alert('Login OK
		'); </script>";
		setcookie("ck_nome",$user);
		echo"<script> window.location.href='boasvindas.php'</script>";
	}/*Fim do If*/
	else {// Começo do Else
		header('Location:Tela_Login.php');
		
		
		}//Fim do Else
?>
</body>
</html>