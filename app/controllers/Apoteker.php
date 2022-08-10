<?php

class Apoteker extends Controller
{
    public function index()
    {
        $data['judul'] = "Kelola Apoteker";
        $data['apoteker'] = $this->model('Apoteker_model')->getAllApoteker();
        $this->view('templates/sidebar', $data);
        $this->view('templates/header', $data);
        $this->view('apoteker/index', $data);
        $this->view('templates/footer', $data);
    }

    public function ubah($id_apoteker)
    {
        $data['judul'] = 'Update Apoteker';
        $data['apoteker'] = $this->model('Apoteker_model')->getAllApoteker();
        $data['apotekerId'] = $this->model('Apoteker_model')->getApotekerById($id_apoteker);
        $this->view('templates/sidebar', $data);
        $this->view('apoteker/ubah', $data);
    }

    public function profile($username)
    {
        $data['judul'] = 'Profile Apoteker';
        $data['apoteker'] = $this->model('Apoteker_model')->getApotekerByUsername($username);
        $this->view('templates/sidebar', $data);
        $this->view('apoteker/profile', $data);
    }

    public function tambah()
    {
        $data['judul'] = 'Sign Up';
        $this->view('apoteker/tambah', $data);
    }

    public function hapus($id_apoteker)
    {
        if ($this->model('Apoteker_model')->hapusDataApoteker($id_apoteker) > 0) {
            header('Location:' . BASEURL . '/apoteker');
            exit;
        }
    }

    public function add()
    {
        if ($this->model('Apoteker_model')->tambahDataApoteker($_POST) > 0) {
            header('Location:' . BASEURL . '/apoteker');
            exit;
        }
    }

    public function ubahData()
    {
        if ($this->model('Apoteker_model')->ubahDataApoteker($_POST) > 0) {
            header('Location:' . BASEURL . '/apoteker');
            exit;
        } else {
            header('Location:' . BASEURL . '/apoteker');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = "Kelola Apoteker";
        $data['apoteker'] = $this->model('Apoteker_model')->cariDataApoteker();
        $this->view('templates/sidebar', $data);
        $this->view('apoteker/index', $data);
    }
}
