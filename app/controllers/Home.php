<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['apoteker'] = $this->model('Home_model')->sumApoteker();
        $data['transaksi'] = $this->model('Home_model')->sumTransaksi();
        $data['obat'] = $this->model('Home_model')->sumObat();
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: ' . BASEURL . '/login');
    }
}
