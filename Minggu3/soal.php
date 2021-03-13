<?php
class Kalkulator{
  	public $x;
  	public $y;
	public $z;
		
	public function tambah() {
		$hasil = $this -> x + $this -> y + $this -> z;
		return $hasil;
	}
	
	public function kurang () {
		$hasil = $this -> x - $this -> y - $this -> z;
		return $hasil;
	}
	
	public function bagi () {
		$hasil = $this -> x / $this -> y / $this -> z;
		return $hasil;
	}
	
	public function kali () {
		$hasil = $this -> x * $this -> y * $this -> z;
		return $hasil;
	}
}

$nilai1 = new Kalkulator();
$nilai2 = new Kalkulator();
$nilai3 = new Kalkulator();
$nilai4 = new Kalkulator();

$nilai1 -> x = 5;
$nilai1 -> y = 10;
$nilai1 -> z = 2;

$nilai2 -> x = 20;
$nilai2 -> y = 10;
$nilai2 -> z = 5;

$nilai3 -> x = 200;
$nilai3 -> y = 2;
$nilai3 -> z = 2;

$nilai4 -> x = 2;
$nilai4 -> y = 10;
$nilai4 -> z = 3;

echo "Penjumlahan : ";
echo $nilai1 -> x . " + " . $nilai1 -> y . " + " . $nilai1 -> z . " = ";
echo $nilai1 -> tambah();
echo "<br />";

echo "Pengurangan : ";
echo $nilai2 -> x . " - " . $nilai2 -> y . " - " . $nilai2 -> z . " = ";
echo $nilai2 -> kurang();
echo "<br />";

echo "Pembagian : ";
echo $nilai3 -> x . " : " . $nilai3 -> y . " : " . $nilai3 -> z . " = ";
echo $nilai3 -> bagi();
echo "<br />";

echo "Perkalian : ";
echo $nilai4 -> x . " x " . $nilai4 -> y . " x " . $nilai4 -> z . " = ";
echo $nilai4 -> kali();
echo "<br />";
?>