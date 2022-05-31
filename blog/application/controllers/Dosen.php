<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    // Fungsi : menampilkan seluruh data
	public function index()
	{
		// Load model + buat objek
        $this->load->model('dosen_model', 'dsn1');

        // Pakai class model
        $this->dsn1->id = 1;
        $this->dsn1->nama = "Sirojul Munir, S.Si, M.Kom.";
        $this->dsn1->nidn = "020304";
        $this->dsn1->gender = "L";
        $this->dsn1->tmp_lahir = "Bandung";
        $this->dsn1->tgl_lahir = "20-03-1979";
        $this->dsn1->pendidikan = "S2";


        // Buat Objek 2
        // Load model + buat objek
        $this->load->model('dosen_model', 'dsn2');

        // Pakai Class Model + Isi Data
        $this->dsn2->id = 2;
        $this->dsn2->nama = "Drs. Rusmanto, MM.";
        $this->dsn2->nidn = "030809";
        $this->dsn2->gender = "L";
        $this->dsn2->tmp_lahir = "Surabaya";
        $this->dsn2->tgl_lahir = "03-05-1975";
        $this->dsn2->pendidikan = "S2";

        // Buat Objek 3
        // Load model + buat objek
        $this->load->model('dosen_model', 'dsn3');

        // Pakai Class Model + Isi Data
        $this->dsn3->id = 3;
        $this->dsn3->nama = "Misna Asqia, S.Kom, M.Kom";
        $this->dsn3->nidn = "056432";
        $this->dsn3->gender = "P";
        $this->dsn3->tmp_lahir = "Depok";
        $this->dsn3->tgl_lahir = "13-10-1985";
        $this->dsn3->pendidikan = "S2";

        // Simpan Objek Ke Dalam Array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

        // Siapkan Data Untuk Dikirim Ke View
        $data["list_dsn"] = $list_dsn;

        // Untuk Mengirim Data + Menampilkan Ke View
        // $this->load->view('header');
        // $this->load->view('dosen/index', $data);
        // $this->load->view('footer');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');



    
	}

    public function create(){
        $data["judul"] = "Form Kelola Dosen";
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create', $data);
        $this->load->view('layout/footer');

    }

    public function save (){
        //Load Model Dosen
        $this->load->model('dosen_model', 'dsn');

        $this->dsn->nama = $this->input->post('nama');
        $this->dsn->nidn = $this->input->post('nidn');
        $this->dsn->gender = $this->input->post('gender');
        $this->dsn->tmp_lahir = $this->input->post('tmp_lahir');
        $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn->pendidikan = $this->input->post('pendidikan');

        $data['dsn'] = $this->dsn;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');
    }
}
