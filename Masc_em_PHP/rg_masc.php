<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SISTEMA</title>
</head>
<body>
<script>
function formatar(mascara, documento) {
	var i = documento.value.length;
	var saida = mascara.substring(0,1);
	var texto = mascara.substring(i);
	
	if(texto.substring(0,1) != saida){
		documento.value += texto.substring(0,1);
		}
}
</script>
</body>
</html>