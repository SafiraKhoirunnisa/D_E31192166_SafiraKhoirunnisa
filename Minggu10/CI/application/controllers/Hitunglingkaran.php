<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hitunglingkaran extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->library('lingkaran');
	}

	function index(){
		$this->benchmark->mark('satu');
		$this->lingkaran->keliling('21');
		echo "<hr/>";

		$this->lingkaran->luas('14');
		$this->benchmark->mark('dua');
		$this->load->view('view_hitunglingkaran');
	}
}
?>