<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$Antes=file("RG_ANTES.csv",0);//Abre o Arquivo Original
$Depois=fopen("RG_Depois.csv","a",0);//Cria o novo arquivo
for($cont=0;$cont<sizeof($Antes);$cont++){
$Limpo=str_replace(".","",$Antes[$cont]);// Substitui linha a linha
fwrite($Depois,"$Limpo");//Grava as informaçoes com as substituiçoes no novo arquivo
}
fclose($Depois);// Fecha o novo Arquivo
Echo "OK- Substituição Concluída";
?>
</body>
</html>
