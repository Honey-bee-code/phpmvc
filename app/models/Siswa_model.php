<?php

class Siswa_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function get_all_siswa()
    {
        $this->db->query('SELECT * FROM siswa');
        return $this->db->resultSet();
    }

    public function get_detail($id)
    {
        $this->db->query('SELECT * FROM siswa WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambah_siswa($data)
    {
        $query = "INSERT INTO siswa VALUES (null , :nama, :nis, :email, :kelas)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('kelas', $data['kelas']);
        
        $this->db->execute();

        return $this->db->hitung_baris();
    }

    public function hapus_siswa($id)
    {
        $query = "DELETE FROM siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->hitung_baris();
    }

    public function ubah_siswa($data)
    {
        $query = "UPDATE siswa SET nama = :nama, nis = :nis, email = :email, kelas = :kelas WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('kelas', $data['kelas']);
        
        $this->db->execute();

        return $this->db->hitung_baris();
    }


}