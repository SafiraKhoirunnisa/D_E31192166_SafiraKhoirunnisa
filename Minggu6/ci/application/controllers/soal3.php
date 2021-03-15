<?php
class soal3 extends CI_Controller{
	public function index() {
		$this -> load -> model ("soal3model");

		$data = $this -> soal3model -> text_txt();

		echo $data;
	}
}

?>