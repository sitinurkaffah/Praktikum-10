<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    // Fungsi : menampilkan seluruh data
	public function index()
	{
		// Load model + buat objek
        $this->load->model('mahasiswa_model', 'mhs');

        // Simpan Objek Ke Dalam Array
        $list_mhs = $this->mhs->getAll();

        // Siapkan Data Untuk Dikirim Ke View
        $data["list_mhs"] = $list_mhs;

        // Untuk Mengirim Data + Menampilkan Ke View
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');


    
	}
}