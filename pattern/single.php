<?php
	class Pre{
		private static $instance;
		private $pro = array();
		private function __construct(){}
		public static function show(){
			echo "this is singlePattern!<br/>";
		}
		
		
		
		
		public static function getInstance(){
			if(empty(self::$instance)){
				self::$instance = new Pre();
			}				
			return self::$instance;
			
		}
		public function getPro(){
			foreach($this->pro as $key){
				echo $key."<br/>";
			}
		}
		public function setPro($key){
			array_push($this->pro,$key);
		}
	}
	Pre::show();
	$P = Pre::getInstance();
	$P->setPro("dwa");
	$P->getPro();
	$e = Pre::getInstance();
	$e->setPro("tea");
	$e->setPro("greem");
	$e->getPro();
?>