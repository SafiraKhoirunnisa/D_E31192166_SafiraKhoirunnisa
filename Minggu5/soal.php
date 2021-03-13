<?php
interface hitungLuas{
	public function Menghitung_Luas ();
}

class Persegi implements hitungLuas {
	private $sisi = 4;
	
	public function __construct ($sisi) {
		$this -> sisi = $sisi;
	}
	
	public function Menghitung_Luas () {
		return pow ($this -> sisi,4);
	}
}

class Segitiga implements hitungLuas {
	private $alas;
	private $tinggi;
	
	public function __construct ($alas, $tinggi){
		$this -> alas = $alas;
		$this -> tinggi = $tinggi;
	}
	
	public function Menghitung_Luas () {
		return (0.5 * $this -> alas * $this -> tinggi);
	}
}

class Lingkaran implements hitungLuas {
	private $r = 7;
	
	public function __construct ($r) {
		$this -> r = $r;
	}
	
	public function Menghitung_Luas () {
		return (3.14 * pow($this -> r,2));
	}
}

$persegi = new Persegi(4);
$segitiga = new Segitiga(8,15);
$lingkaran = new Lingkaran(5);

echo "Luas Persegi : " . $persegi -> Menghitung_Luas();
echo "<br />";
echo "Luas Segitiga : " . $segitiga -> Menghitung_Luas();
echo "<br />";
echo "Luas Lingkaran : " . $lingkaran -> Menghitung_Luas();
?>