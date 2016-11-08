<?php
class pri{
	public static $o = "dadad";
	private $s = "ga";
	private $s1 = "ga";
	private $s2 = "ga";
	private $s3 = "ga";
	private $s4 = "ga";
	private $s5 = "ga";
	public function __construct($ss){
		$this->s = $ss;
	}
	public function gets(){
		echo $this->s;
	}
}

$cd = new pri("dadf");
$cd2 = new pri("ffff");
echo $cd->gets();
var_dump($cd);
var_dump($cd2);
?>