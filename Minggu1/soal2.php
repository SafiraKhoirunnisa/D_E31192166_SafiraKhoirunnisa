<?php
class Kendaraan {
	var $jenis_kendaraan;
	var $jumlah_roda;
	var $merk;
	var $bahan_bakar;
	var $harga;
	var $tahun_pembuatan;
	
	public function mendapat_subsidi_BBM($bahan_bakar,$tahun_pembuatan)
	{
		return "Kendaraan Bus Kopaja mendapat subsidi karena berbahan bakar " . $this -> bahan_bakar . 
		" dan tahun pembuatannya tahun " . $this -> tahun_pembuatan;
	}
	
	public function tidak_mendapat_subsidi_BBM($bahan_bakar,$tahun_pembuatan)
	{
		return "Kendaraan Mobilio tidak mendapat subsidi karena berbahan bakar " . $this -> bahan_bakar . 
		" dan tahun pembuatannya tahun " . $this -> tahun_pembuatan;
	}
}

$Mobilio = new Kendaraan ();
$Bus_Kopaja = new Kendaraan ();


$Mobilio -> jenis_kendaraan = "Mobil";
$Mobilio -> jumlah_roda = "2";
$Mobilio -> merk = "Honda Mobilio";
$Mobilio -> bahan_bakar = "pertamax";
$Mobilio -> harga = "196.000.000";
$Mobilio -> tahun_pembuatan = "2013";

$Bus_Kopaja -> jenis_kendaraan = "Kendaraan Umum";
$Bus_Kopaja -> jumlah_roda = "2";
$Bus_Kopaja -> merk = "Bus Kopaja";
$Bus_Kopaja -> bahan_bakar = "solar";
$Bus_Kopaja -> harga = "80.000.000";
$Bus_Kopaja -> tahun_pembuatan = "2000";


echo $Bus_Kopaja->mendapat_subsidi_BBM("premium", "2000");
echo "<br />";  
echo $Mobilio->tidak_mendapat_subsidi_BBM("pertamax", "2013");

?>