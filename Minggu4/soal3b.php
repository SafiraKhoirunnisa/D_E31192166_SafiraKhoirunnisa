<?php
class Tablet {
	// Menggunakan hak akses private agar hanya class ini yang satu-satunya dapat mengakses.
	private $merk;
	private $camera;
	private $memory;
	
	private function spesifikasiMerk() {
		return $this -> merk;
	}
	
	public function tampilan_spesifikasiMerk() {
		return "Merk : IPhone";
	}
	
	private function spesifikasiCamera() {
		return $this -> camera;
	}
	
	public function tampilan_spesifikasiCamera() {
		return "Camera : 12mp";
	}
	
	private function spesifikasiMemory() {
		return $this -> memory;
	}
	
	public function tampilan_spesifikasiMemory() {
		return "Memory : 128gb";
	}
	
}

class Handphone extends Tablet {
	public function beli_handphone() {
		return "Aku beli Handphone barulohh";
	}
}
$handphone_baru = new Handphone();

echo "properti dengan hak akses private";
echo "<hr />";


echo "Aku beli hp baru lohh dengan spesifikasi : ";
echo "<br />";
echo $handphone_baru -> tampilan_spesifikasiMerk();
echo "<br />";
echo $handphone_baru -> tampilan_spesifikasiCamera();
echo "<br />";
echo $handphone_baru -> tampilan_spesifikasiMemory();
?>