<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    // Fungsi : menampilkan seluruh data
    public function index()
    {
        // Load model + buat objek
        $this->load->model('prodi_model', 'prodi');

        // Simpan Objek Ke Dalam Array
        $list_prodi = $this->prodi->getAll();

        // Siapkan Data Untuk Dikirim Ke View
        $data['list_prodi'] = $list_prodi;

        // Untuk Mengirim Data + Menampilkan Ke View
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/index', $data);
        $this->load->view('layout/footer');


        
    }
}