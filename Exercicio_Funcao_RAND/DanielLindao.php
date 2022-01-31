<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boas Vindas</title>
</head>
<body>
<?php
$imagem = rand (1,3);
	if($imagem=="1"){//Inicio do If
		echo "<img src='Jellyfish.jpg' >" ;
	}/*Fim do If*/
	else { // Começo do Else
			if($imagem=="2"){//Inicio do If
		echo "<img src='Koala.jpg'>" ;
			}/*Fim do If*/
				else {
						if($imagem=="3"){//Inicio do If
						echo "<img src='Penguins.jpg'>" ;
						}/*Fim do If*/
					 }
		}//Fim do Else
		
		 

	
	


?>
</body>
</html>