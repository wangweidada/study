<?php
	abstract class weapon{
		//private $value;
		abstract function show();
		//abstract function setValue();
	}
	class axe extends weapon{
		public function show(){
			echo "weapon is axe!<br/>";
		}
	}
	class shotter extends weapon{
		public function show(){
			echo "weapon is shotter!<br/>";
		}
	}
	abstract class cloth{
		abstract function show();
		//private $value;
		//abstract function setValue();
	}
	class outs extends cloth{
		public function show(){
			echo "cloth is outs!<br/>";
		}
	}
	class wud extends cloth{
		public function show(){
			echo "cloth is wud!<br/>";
		}
	}
	
	abstract class player{
		abstract function getWeapon();
		abstract function getCloth();	
	}
	
	class play1 extends player{
		function getWeapon(){
			return new axe();
		}
		function getCloth(){
			return new outs();
		}
	}
	class play2 extends player{
		function getWeapon(){
			return new shotter();
		}
		function getCloth(){
			return new wud();
		}
	}
	
	$peoper = new play1();
	$peoper->getWeapon()->show();
	$peoper->getCloth()->show();
?>