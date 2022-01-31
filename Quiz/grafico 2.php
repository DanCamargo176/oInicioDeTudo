<?php
//recebendo as variáveis(total de acertos e erros) do Quiz
$porc_acertos=70;
$porc_erros=30;

//"excuta" os arquivos jpgraph.php  e jpgraph_pie.php
include ("jpgraph.php");  //"cria gráficos"
include ("jpgraph_pie.php");//cria gráficos no formato pizza

//informar os valores que serão inseridos no gráfico
$numquestoes = array ($porc_acertos,$porc_erros);

// instanciar o objeto gráfico pizza
$grafico = new PieGraph(700,500, "graficopizza");

// ajustar alguns parâmetros do gráfico
$grafico->SetScale("textlin");
$grafico->SetShadow();
$grafico->title->Set('Resultado  do Quiz');

// instanciando o desenho da pizza, passando os dados
$gPizza= new PiePlot($numquestoes);

// incluindo legendas
$final=array("Acertos","Erros");
$gPizza->SetLegends($final);

// adicionar gráfico de barras ao gráfico
$grafico->Add($gPizza);

// imprimir gráfico
$grafico->Stroke();
?>
