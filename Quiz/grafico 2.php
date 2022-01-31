<?php
//recebendo as vari�veis(total de acertos e erros) do Quiz
$porc_acertos=70;
$porc_erros=30;

//"excuta" os arquivos jpgraph.php  e jpgraph_pie.php
include ("jpgraph.php");  //"cria gr�ficos"
include ("jpgraph_pie.php");//cria gr�ficos no formato pizza

//informar os valores que ser�o inseridos no gr�fico
$numquestoes = array ($porc_acertos,$porc_erros);

// instanciar o objeto gr�fico pizza
$grafico = new PieGraph(700,500, "graficopizza");

// ajustar alguns par�metros do gr�fico
$grafico->SetScale("textlin");
$grafico->SetShadow();
$grafico->title->Set('Resultado  do Quiz');

// instanciando o desenho da pizza, passando os dados
$gPizza= new PiePlot($numquestoes);

// incluindo legendas
$final=array("Acertos","Erros");
$gPizza->SetLegends($final);

// adicionar gr�fico de barras ao gr�fico
$grafico->Add($gPizza);

// imprimir gr�fico
$grafico->Stroke();
?>
