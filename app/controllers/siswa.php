<?php

class Siswa extends Controller{
    public function index()
    {
        $data['judul'] = 'Data Siswa';
        $data['siswa'] = $this->model('Siswa_model')->get_all_siswa();

        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Siswa';
        $data['siswa'] = $this->model('Siswa_model')->get_detail($id);

        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        // var_dump($_POST);
        if($this->model('Siswa_model')->tambah_siswa($_POST) > 0){
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }
}