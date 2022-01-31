<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>entrar.php</title>
</head>
<body>
<?php
$novousuario=$_POST['novousuario'];
$login=$_POST['login'];
$novasenha=$_POST['novasenha'];
$senha=$_POST['senha'];
$nome=$_POST['nome'];

if ($login == $novousuario && $senha == $novasenha){
setcookie ("nome", $nome);
echo "<script> alert('Entrada Autorizada!')</script>";
echo "<script> window.location.href='Perg1.php'</script>";
}else{
echo "<script> alert('Usuário e/ou Senha Inválidos')</script>";
echo "<script> window.location.href='Home.php'</script>";
}
?>
</body>
</html>