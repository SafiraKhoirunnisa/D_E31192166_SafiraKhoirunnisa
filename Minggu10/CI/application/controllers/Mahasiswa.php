<?php
	defined('BASEPATH')OR exit('No direct script access allowed');
	class Mahasiswa extends CI_Controller
	{
		function _construct()
		{
			parent::_construct();
			$this -> load -> model('Mahasiswa_model');
		}

		public function index()
		{
			$data['Mahasiswa'] = [
				["nama"=>"Kim Jefry","prodi"=>"MIF"],
				["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
				["nama"=>"Budi Sudarsono","prodi"=>"TIF"]
				];
			$this -> load -> view('view_mahasiswa',$data);
		}

		public function profil()
		{
			echo"ini adalah method profil pada controller Mahasiswa";
		}

		public function prodi()
		{
			$data['Prodi'] = [
				["prodi"=>"MIF","keterangan"=>"Manajemen Informatika"],
				["prodi"=>"TKK","keterangan"=>"Teknik Komputer"],
				["prodi"=>"TIF","keterangan"=>"Teknik Informatika"]
				];
			$this -> load -> view('view_prodi',$data);
		}

		public function angkatan()
		{
			$data['Angkatan'] = [
				["angkatan"=>"2016"],
				["angkatan"=>"2017"],
				["angkatan"=>"2018"]
				];
			$this -> load -> view('view_angkatan',$data);
		}
	}
?>