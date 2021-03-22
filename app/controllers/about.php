<?php

class About extends Controller{
    public function index($nama = 'Hanifi', $profesi = 'Programmer', $umur = '32')
    {
        $data['nama'] = $nama;
        $data['profesi'] = $profesi;
        $data['umur'] = $umur;
        $data['judul'] = 'About Page';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Pages';

        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}