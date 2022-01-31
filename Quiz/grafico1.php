<?php
 $porc_acertos=$_POST['acertos'];
 $porc_erros=$_POST['erros'];
 
 include ("../../../../jpgraph.php");
 include  ("../../../../jpgraph_pie.php");
 
 //add os elementoas(valores no gráfico)
 $numquestoes =array ($porc_acertos,$porc_erros);
 
 //instanciar o objeto gráfico pizza
 $grafico = new PieGraph(700,500, "graficopizza");
 
 //ajustar alguns parâmetros do gráfico 
 $grafico->SetScale("textlin");//escala
 //$grafico->SetShadow();//contorno
 $grafico->SetMarginColor('#EAEAAE');
 $grafico->title->Set('Questões Quiz');//titulo
 $grafico->title->SetColor('darkorange');
 
 //Subtitulo
 $grafico->SetMarginColor('#EAEAAE');
 $grafico->subtitle->Set('Questões Quiz');//titulo
 $grafico->subtitle->SetColor('darkyellow');
 
 //instanciando o desenho da pizza, passando os dados 
 $gPizza= new PiePlot($numquestoes);
 $gPizza-> SetShadow('darkgray');
 $gPizza-> SetLabelTitle('');
 
 
 //incluindo legendas
 $final=array("Acertos","Erros");
 $gPizza->SetLegends($final);
 
 //adicionar gráfico de barras ao grafico
 $grafico->Add($gPizza);
 
 //imprimir grafico
 $grafico->Stroke();
 
  
?>