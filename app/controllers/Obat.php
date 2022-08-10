<?php

class Obat extends Controller
{
    public function index()
    {
        $data['judul'] = "Kelola Obat";
        $data['obat'] = $this->model('Obat_model')->getAllObat();
        $this->view('templates/sidebar', $data);
        $this->view('obat/index', $data);
    }

    public function detail($id_obat)
    {
        $data['judul'] = "Detail Obat";
        $data['obatAll'] = $this->model('Obat_model')->getAllObat();
        $data['obat'] = $this->model('Obat_model')->getObatById($id_obat);
        $this->view('templates/sidebar', $data);
        $this->view('obat/detail', $data);
    }

    public function ubah($id_obat)
    {
        $data['judul'] = "Update Obat";
        $data['obat'] = $this->model('Obat_model')->getAllObat();
        $data['obatId'] = $this->model('Obat_model')->getObatById($id_obat);
        $this->view('templates/sidebar', $data);
        $this->view('obat/ubah', $data);
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Obat';
        $this->view('templates/sidebar', $data);
        $this->view('obat/tambah', $data);
    }

    public function hapus($id_obat)
    {
        if ($this->model('Obat_model')->hapusDataObat($id_obat) > 0) {
            header('Location:' . BASEURL . '/obat');
            exit;
        }
    }

    public function add()
    {
        if ($this->model('Obat_model')->tambahDataObat($_POST) > 0) {
            header('Location:' . BASEURL . '/obat');
            exit;
        }
    }

    public function ubahData()
    {
        if ($this->model('Obat_model')->ubahDataObat($_POST) > 0) {
            header('Location:' . BASEURL . '/obat');
            exit;
        } else {
            header('Location:' . BASEURL . '/obat');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = "Kelola Obat";
        $data['obat'] = $this->model('Obat_model')->cariDataObat();
        $this->view('templates/sidebar', $data);
        $this->view('obat/index', $data);
    }
}
