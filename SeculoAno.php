<?php

if (isset($_POST['ano'])) {
    seculoAno();
  }
  
function seculoAno(){
 	$ano = $_POST['ano'];

    if($ano > 0){
$seculo = 0;

	if($ano <= 100) {
		$seculo = 1;
	}
	else if($ano >100){
		if($ano % 100 >= 1){$seculo = round($ano/100) + 1;}
		else {$seculo = round($ano/100);}
	}
}

	echo "O seculo é ". $seculo .".";
}


?>