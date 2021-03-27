<?php
$ano = $_GET['data'];

//print $ano;
if($ano > 0){
$seculo = 0;
	if($ano <= 100) {
		$seculo = 1;
	}else
	if($ano >100){
		if($ano % 100 >= 1){$seculo = round($ano/100) + 1;}
		else {$seculo = round($ano/100);}
	}
print "<h1>Século = {$seculo}</h1>";
}

?>