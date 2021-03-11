<?php
class Kendaraan {
	var $jenis_kendaraan;
	var $merk;
	var $tahun_pembuatan;
	var $harga_second;
	
	public function hargaSecond () {
		$harga_second = $this -> tahun_pembuatan;
		if ($harga_second > 2010) {
			return $this -> merk . " Harga second turun 20% dari harga aslinya karena pembuatannya diatas tahun " . $this -> tahun_pembuatan;
		} elseif ($harga_second >= 2005 and $harga_second <= 2010) {
			return $this -> merk . "Harga secondnya turun 30% dari harga aslinya karena pembuatannya ditahun " . $this -> tahun_pembuatan;
		} else {
			return $this -> merk . "Harga secondnya turun 40% dari harga aslinya karena pembuatannya dibawah tahun " . $this -> tahun_pembuatan;
		}
	}
}

$Mobilio = new Kendaraan ();
$Vario = new Kendaraan ();
$Supravit = new Kendaraan ();

$Mobilio -> jenis_kendaraan = "Mobil";
$Mobilio -> merk = "Honda Mobilio";
$Mobilio -> tahun_pembuatan = 2013;

$Vario -> jenis_kendaraan = "Motor";
$Vario -> merk = "Honda Vario";
$Vario -> tahun_pembuatan = 2008;

$Supravit -> jenis_kendaraan = "Motor";
$Supravit -> merk = "Honda Supravit";
$Supravit -> tahun_pembuatan = 2003;

echo $Mobilio -> hargaSecond();
echo "<br />"; 
echo $Vario -> hargaSecond();
echo "<br />"; 
echo $Supravit -> hargaSecond();

?>