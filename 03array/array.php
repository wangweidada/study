<?php

	$pro = array("ww","yyj","gg");
	for($i = 0; $i < 3; $i++){
		echo $pro[$i].'	';
	}
	echo '<br/>';
	foreach($pro as $con){
		echo $con.'	';
	}
	echo '<br/>';
	$price = array("wast"=>100,"pc"=>3141,"lenovo"=>3411);
	echo $price[0]."	".$price['pc'].'	'.$price['lenovo'].'<br/>';
	

	echo "foreach:";
	foreach($price as $key => $value){
		echo $key.'=>'.$value.'	';
	}
	echo '<br/>';
	reset($price);
	echo "while:";
	while($element = each($price)){
		
		echo $element['key'];
		echo '=>';
		echo $element['value'].'	';
	}
	echo '<br/>';
	$price2 = array("pc"=>3141,"wast"=>100,"lenovo"=>3411);
	if($price == $price2){
		echo "price == price2";
	}
	
?>