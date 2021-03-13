<?php
class Car {
	public function hello()
	{
		return "beep";
	}
}

class Sportscar extends Car {
	public function hello() {
		return "Hallo";
	}
}

$sportsCar1 = new Sportscar();

echo $sportsCar1 -> hello();
?>