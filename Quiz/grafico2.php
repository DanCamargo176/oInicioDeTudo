<?php


//recebendo as variáveis(total de acertos e erros) do Quiz
$porc_acertos=$_POST['acertos'];
$porc_erros=$_POST['erros'];

//"excuta" os arquivos jpgraph.php  e jpgraph_pie.php
include ("file:///C|/Users/ETEC/Desktop/jpgraph.php");  //"cria gráficos"
include ("file:///C|/Users/ETEC/Desktop/jpgraph_pie.php");//cria gráficos no formato pizza

//informar os valores que serão inseridos no gráfico
$numquestoes = array ($porc_acertos,$porc_erros);

// instanciar o objeto gráfico pizza
$grafico = new PieGraph(700,500, "graficopizza");

// ajustar alguns parâmetros do gráfico
$grafico->SetScale("textlin");
$grafico->SetMarginColor('#666666');
//$grafico->SetShadow();

$grafico->title->Set('Resultado Final do Quiz');
$grafico->title->SetFont(FF_VERDANA,FS_NORMAL,12);
$grafico->title->SetColor("lightblue");
$grafico->subtitle->Set('Curso Infonet');
$grafico->subtitle->SetFont(FF_VERDANA,FS_NORMAL,12);
$grafico->subtitle->SetColor("lightblue");

// instanciando o desenho da pizza, passando os dados
$gPizza= new PiePlot($numquestoes);
$gPizza->SetShadow("darkgreen");
$gPizza->SetLabelType(PIE_VALUE_ABS);
$gPizza->SetLabelPos(.5);
$gPizza->value->SetFont(FF_COMIC,FS_BOLD,10);
$gPizza->value->SetColor("black");

// incluindo legendas
$final=array("Acertos","Erros");
$gPizza->SetLegends($final);

// adicionar gráfico de barras ao gráfico
$grafico->Add($gPizza);

// imprimir gráfico
$grafico->Stroke();
?>
