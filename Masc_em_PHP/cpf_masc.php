<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SISTEMA</title>
</head>
<body>

<?php
$cpf = "12312312312";
$mask=substr($cpf,0,3).".".substr($cpf,3,3).".".substr($cpf,6,3)."-".substr($cpf,6,2);
echo $mask;
?>

</body>
</html>