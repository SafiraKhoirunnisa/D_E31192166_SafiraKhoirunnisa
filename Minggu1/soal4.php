<?php
class Melukis {
	public $jenis_kanvas;
	public $jenis_cat;
	public $jenis_kuas;
	public $jenis_palet;
	public $jenis_pensil;
	
	public function langkah_awal() {
		return "Pertama-tama siapkan peralatan yaitu " . $this -> jenis_kanvas . 
		" , " . $this -> jenis_cat . " , " . $this -> jenis_kuas . " , " . $this -> jenis_palet . " , dan pensil " . $this -> jenis_pensil;
	}
	public function langkah_kedua() {
		return "Lalu buat sketsa pada kanvas dengan pensil " . $this -> jenis_pensil .
		" Kemudian jika sudah tuang " . $this -> jenis_cat .
		" sesuai warna yang diinginkan kedalam " . $this -> jenis_palet .
		" Ambil cat dengan kuas lalu mulai goreskan dalam " . $this -> jenis_kanvas .
		" sesuai dengan sketsa yang sudah dibuat";
	}
	public function langkah_terakhir() {
		return "Setelah selesai melukis rapikan semua peralatan dan tunggu lukisannya kering";
	}
}

$Melukis_Bebas = new Melukis();
$Melukis_Bebas -> jenis_kanvas ="kanvas blacu";
$Melukis_Bebas -> jenis_cat ="cat air";
$Melukis_Bebas -> jenis_kuas ="angle brush";
$Melukis_Bebas -> jenis_palet ="auxiliary palette";
$Melukis_Bebas -> jenis_pensil ="HB";


echo $Melukis_Bebas -> langkah_awal();
echo "<br />";
echo $Melukis_Bebas -> langkah_kedua();
echo "<br />";
echo $Melukis_Bebas -> langkah_terakhir();
?>