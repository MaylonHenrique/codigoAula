<?php
 if(filter_input (INPUT_GET, "aluno") &&
 filter_input (INPUT_GET, "ano") &&
 filter_input (INPUT_GET, "n1") &&
 filter_input (INPUT_GET, "n2") &&
 filter_input (INPUT_GET, "n3") &&
 filter_input (INPUT_GET, "n4") 
 ){
 $aluno = filter_input (INPUT_GET, "aluno");
 $ano = filter_input (INPUT_GET, "ano");
 $n1 = filter_input (INPUT_GET, "n1");
 $n2 = filter_input (INPUT_GET, "n2");
 $n3 = filter_input (INPUT_GET, "n3");
 $n4 = filter_input (INPUT_GET, "n4");
 }else {
 	echo "(Campos Não Preenchidos !!!")
 }
?>