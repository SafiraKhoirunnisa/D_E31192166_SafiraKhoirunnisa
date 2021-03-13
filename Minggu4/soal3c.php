<?php
class Tablet {
	// Menggunakan hak akses protected agar property tidak bisa diakses dari luar class ini tapi bisa diakses oleh classnya sendiri dan turunan classnya.
	protected $merk;
	protected $camera;
	protected $memory;
	
	protected function spesifikasiMerk() {
		return $this -> merk;
	}
	
	public function tampilan_spesifikasiMerk() {
		return "Merk : IPhone";
	}
	
	protected function spesifikasiCamera() {
		return $this -> camera;
	}
	
	public function tampilan_spesifikasiCamera() {
		return "Camera : 12mp";
	}
	
	protected function spesifikasiMemory() {
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

echo "properti dengan hak akses protected";
echo "<hr />";

echo $handphone_baru -> tampilan_spesifikasiMerk();
echo "<br />";
echo $handphone_baru -> tampilan_spesifikasiCamera();
echo "<br />";
echo $handphone_baru -> tampilan_spesifikasiMemory();
?>