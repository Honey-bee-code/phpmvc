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
            // set flash message
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');

            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');

            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Siswa_model')->hapus_siswa($id) > 0){
            // set flash message
            Flasher::setFlash('Berhasil', 'dihapus', 'success');

            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');

            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function detail_ubah()
    {
        $id = $_POST['id'];
        $data = $this->model('Siswa_model')->get_detail($id);
        echo json_encode($data);
    }

    public function ubah()
    {
        if($this->model('Siswa_model')->ubah_siswa($_POST) > 0){
            // set flash message
            Flasher::setFlash('Berhasil', 'diubah', 'success');

            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');

            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }
}