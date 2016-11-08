<?php
class Product{
	public $name;
	public $price;
	public function __construct($name, $price){
		$this->name = $name;
		$this->price = $price;
	}
}
class ProcessSale{
	private $callback;
	function register_callback($callback){
		if(!is_callable($callback)){
			throw new Exception("callback not callable!");
		}
		$this->callback[] = $callback;
	}
	function sale($product){
		print "{$product->name}:processing!\n";
		foreach($this->callback as $callback){
			call_user_func($callback,$product);
		}
	}
}

$logger = create_function('$product','echo "name:".$product->name;');
$process = new ProcessSale();
$process->register_callback($logger);
$pro = new Product("gold",1234);
$process->sale($pro);
?>