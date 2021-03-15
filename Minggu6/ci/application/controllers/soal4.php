<?php
class soal4 extends CI_Controller {
	public function index() {
		$data = ("Hewan Mamalia"=>"Sapi,Kuda", "Hewan 2alam"=>"Katak,Siput", "Hewan Melata"=>"Ular,Belut");

		$this -> load -> model("soal4model");

		$model = $this -> soal4model;
		$a = $model -> txt;
		$data("teks") = $a;
		$this -> load -> view("soal4model", $data);
	}
}
?>