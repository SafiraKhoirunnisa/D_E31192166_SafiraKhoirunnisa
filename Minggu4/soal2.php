<?php
class item_produk {
	protected $ukuran;
	protected $warna;
	protected $nama;
	
	public function getUkuran() {
		return $this -> ukuran;
	}
	public function setUkuran($ukuran) {
		$this -> ukuran = $ukuran;
	}
	public function getWarna() {
		return $this -> warna;
	}
	public function setWarna($warna) {
		$this -> warna = $warna;
	}
	public function getNama() {
		return $this -> nama;
	}
	public function setNama($nama) {
		$this -> nama = $nama;
	}
}

class Topi extends item_produk{
	private $model;
	
	public function getModel () {
		return $this -> model;
	}
	public function setModel($model) {
		$this -> model = $model;
	}
}

class Celana extends item_produk {
	private $tipe;
	private $model;
	
	public function getTipe () {
		return $this -> tipe;
	}
	public function setTipe($tipe) {
		$this -> tipe = $tipe;
	}
	public function getModel () {
		return $this -> model;
	}
	public function setModel($model) {
		$this -> model = $model;
	}
}

class Baju extends item_produk {
	private $tipe;
	
	public function getTipe () {
		return $this -> tipe;
	}
	public function setTipe($tipe) {
		$this -> tipe = $tipe;
	}
}

$produk_topi = new Topi();
$produk_celana = new Celana();
$produk_baju = new Baju();

$produk_topi -> setNama("Bucket Hat");
$produk_topi -> setUkuran("62cm");
$produk_topi -> setWarna("Hitam");
$produk_topi -> setModel("Korean Style");

$produk_celana -> setNama("Celana Kulot");
$produk_celana -> setUkuran(34);
$produk_celana -> setWarna("Biru Navy");
$produk_celana -> setModel("Oversize");
$produk_celana -> setTipe("Jeans");

$produk_baju -> setNama("Hoodie");
$produk_baju -> setUkuran(15);
$produk_baju -> setWarna("Lylac");
$produk_baju -> setTipe("hoodie katun");

echo "Nama Produk : " . $produk_topi -> getNama();
echo "<br />";
echo "Ukuran : " . $produk_topi -> getUkuran();
echo "<br />";
echo "Warna : " . $produk_topi -> getWarna();
echo "<br />";
echo "Model : " . $produk_topi -> getModel();
echo "<hr />";

echo "Nama Produk : " . $produk_celana -> getNama();
echo "<br />";
echo "Ukuran : " . $produk_celana -> getUkuran();
echo "<br />";
echo "Warna : " . $produk_celana -> getWarna();
echo "<br />";
echo "Model : " . $produk_celana -> getModel();
echo "<br />";
echo "Tipe : " . $produk_celana -> getTipe();
echo "<hr />";

echo "Nama Produk : " . $produk_baju -> getNama();
echo "<br />";
echo "Ukuran : " . $produk_baju -> getUkuran();
echo "<br />";
echo "Warna : " . $produk_baju -> getWarna();
echo "<br />";
echo "Tipe : " . $produk_baju -> getTipe();

?>