<?php
	echo 'this is get pathinfo<br/>';
	echo __FILE__.'<br/>';
	echo basename(__FILE__).'<br/>';
	echo basename(__FILE__,'.php').'<br/>';
	echo dirname(__FILE__).'<br/>';
	echo dirname(dirname(__FILE__)).'<br/>';
	echo $_SERVER['HTTP_HOST'].'<br/>';
	echo $_SERVER['PHP_SELF'].'<br/>';
	echo $_SERVER['DOCUMENT_ROOT'].'<br/>';
	echo "this is fopen--> read<br/>";
	$document_path = dirname(__FILE__);
	
	$fp = fopen($document_path.'\\1.txt','r');
	if(!$fp){
		echo "not open this file!<br/>";
	}else{
		echo "open success!<br/>";
		while(!feof($fp)){
			$r = @fgetcsv($fp,999,"\t");
			foreach($r as $i){
				echo $i.'<br/>';
			}
			//echo $r[0].'	'.$r[1];//.'<br/>';
		
		}
		fclose($fp);
	}
	$fp = fopen($document_path.'\\1.txt','w');
	$content = 'dwdffffffffffffffffffff';
	if($fp){
		fwrite($fp,$content,strlen($content));
		fclose($fp);
	}
	
?>