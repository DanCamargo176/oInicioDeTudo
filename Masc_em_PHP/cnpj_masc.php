<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SISTEMA</title>
</head>
<body>

<?php
$CNPJ = "11222333444455";
$mask=substr($CNPJ,0,2).".".substr($CNPJ,2,3).".".substr($CNPJ,5,3)."/".substr($CNPJ,8,4)."-".substr($CNPJ,12,2);
echo $mask;
?>
</body>
</html>