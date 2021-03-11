<?php
class Laptop {
	public $pemilik;
	public $merk;
	public $hasSunRoof = true;
	
	public function hidupkan_laptop() {
		return "Hidupkan Laptop " . $this -> merk .
			" milik " . $this -> pemilik;
	}
	public function matikan_laptop() {
		return "Matikan Laptop " . $this -> merk .
			" milik " . $this -> pemilik;
	}
	public function restart_laptop() {
		return "Matikan Laptop " . $this -> merk .
			" milik " . $this -> pemilik .
			" . Hidupkan Laptop " . $this -> merk .
			" milik " . $this -> pemilik;
	}
}

$laptop_Asus = new laptop();
$laptop_Acer = new laptop();
$laptop_Lenovo = new laptop();

$laptop_Asus -> pemilik = "A";
$laptop_Asus -> merk = "Asus";
$laptop_Acer -> pemilik = "B";
$laptop_Acer -> merk = "Acer";
$laptop_Lenovo -> pemilik = "C";
$laptop_Lenovo -> merk = "Lenovo";

echo $laptop_Asus -> hidupkan_laptop();
echo "<br />";
echo $laptop_Acer -> matikan_laptop();
echo "<br />";
echo $laptop_Lenovo -> restart_laptop();
?>