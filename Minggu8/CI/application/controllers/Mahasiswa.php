<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}
	public function index(){
		$data['nama']="Kim Jefry";
		$data['prodi']="MIF";
		$this->load->view('view_mahasiswa',$data);

		$data['Mahasiswa']=[
			["nama"=>"Kim Jefry","prodi"=>"MIF"],
			["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
			["nama"=>"Budi Sudarsono","prodi"=>"TIF"]
		];
		$this->load->view('view_mahasiswa',$data);

		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
			$this->load->view('view_mahasiswa',$data);
	}

	public function profil(){
		echo "ini adalah method profil pada controller Mahasiswa";
	}
	public function prodi(){
		$data['Prodi'] = $this->Mahasiswa_model->get_prodi();
		$this->load->view('view_prodi',$data);
	}
	public function angkatan(){
		$data['Angkatan'] = $this->Mahasiswa_model->get_angkatan();
		$this->load->('view_angkatan',$data);
	}
}
?>