<?php
class Tablet {
	// Menggunakan hak akses public agar seluruh kode yang ada diluar program ini dapat mengakses.
	public $merk;
	public $camera;
	public $memory;
	
	public function spesifikasi() {
		return "merknya: $this->merk, camera: $this->camera, 
     memory: $this->memory";
	}
}

class Handphone extends Tablet {
	public function beli_handphone() {
		return "Aku beli Handphone barulohh";
	}
}

$handphone_baru = new Handphone();
$handphone_baru -> merk = "IPhone";
$handphone_baru -> camera = "12mp";
$handphone_baru -> memory = "128gb";

echo "properti dengan hak akses public";
echo "<hr />";
echo $handphone_baru -> beli_handphone();
echo "<br />";
echo $handphone_baru -> spesifikasi();
?>