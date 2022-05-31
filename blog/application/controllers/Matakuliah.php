<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    // Fungsi : menampilkan seluruh data
	public function index()
	{
		// Load model + buat objek
        $this->load->model('matakuliah_model', 'mk1');

        // Pakai class model
        $this->mk1->id = 1;
        $this->mk1->nama_matkul = "Basis Data";
        $this->mk1->sks = 4;
        $this->mk1->dosen = "Edo Riansyah, S.Kom";
        $this->mk1->kode = "011";

        // Buat Objek 2
        // Load model + buat objek
        $this->load->model('matakuliah_model', 'mk2');

        // Pakai Class Model + Isi Data
        $this->mk2->id = 2;
        $this->mk2->nama_matkul = "Pemrograman Web 2";
        $this->mk2->sks = 3;
        $this->mk2->dosen = "Sirojul Munir, S.Si, M.Kom.";
        $this->mk2->kode = "022";

        // Buat Objek 3
        // Load model + buat objek
        $this->load->model('matakuliah_model', 'mk3');

        // Pakai Class Model + Isi Data
        $this->mk3->id = 3;
        $this->mk3->nama_matkul = "Komunikasi Efektif";
        $this->mk3->sks = 2;
        $this->mk3->dosen = "Aqil Wirda Arief, S.T, M.Kesos";
        $this->mk3->kode = "033";

        // Simpan Objek Ke Dalam Array
        $list_mk = [$this->mk1, $this->mk2, $this->mk3];

        // Siapkan Data Untuk Dikirim Ke View
        $data["list_mk"] = $list_mk;

        // Untuk Mengirim Data + Menampilkan Ke View
        $this->load->view('header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('footer');

    
	}
}
