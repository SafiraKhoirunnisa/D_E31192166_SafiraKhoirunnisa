<?php
class mobilLengkap {
	public $tv;
	public $mobil;
}

class mobilBMW extends mobilLengkap {
	public function nontonTv() {
		return "Cara kerja tv menyala";
	}
	
	public function TV_hidup() {
		return "Tv dihidupkan";
	}
	
	public function TV_mencari() {
		return "Tv mencari channel";
	}
	
	public function TV_menampilkan() {
		return "Tv menampilkan gambar";
	}
}

class MobilBMWberaksi extends mobilLengkap {
	public function kerjamobil() {
		return "Cara kerja mobil";
	}
	
	public function hidup() {
		return "Hidupkan Mobil";
	}
	
	public function mati() {
		return "Matikan Mobil";
	}
	
	public function ubah() {
		return "Ubah Gigi";
	}
}

$Tv_Avelino = new mobilBMW();
$Mobil_Yaris = new MobilBMWberaksi();

echo $Tv_Avelino -> nontonTv();
echo "<br />";
echo "Pertama-tama " . $Tv_Avelino -> TV_hidup();
echo "<br />";
echo "Lalu " . $Tv_Avelino -> TV_mencari();
echo "<br />";
echo "Selesaideh maka " . $Tv_Avelino -> TV_menampilkan();
echo "<hr />";

echo $Mobil_Yaris -> kerjamobil();
echo "<br />";
echo $Mobil_Yaris -> hidup();
echo "<br />";
echo $Mobil_Yaris -> mati();
echo "<br />";
echo $Mobil_Yaris -> ubah();
echo "<hr />";

?>