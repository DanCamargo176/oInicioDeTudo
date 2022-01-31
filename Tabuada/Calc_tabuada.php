<html
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cálcula de Tabuadas - Daniel Camargo</title>
</head>
<body>
<?php
include 'tabuada_form.php';

//Inicio das Variáveis

$vl2= $_POST['vl2'];

for ($vl1=0; $vl1<=10; $vl1++) 
{
      echo "$vl1 * $vl2 =". $vl1*$vl2 ."</br>";      
}    
  echo "</br></br>";



?>
<a href=http://127.0.0.1:8888/Tabuada/tabuada_form.php> Voltar </a>
</body>

</html>