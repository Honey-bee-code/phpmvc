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
}