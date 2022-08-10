<?php

class Apoteker_model
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllApoteker()
    {
        $this->db->query('SELECT * FROM apoteker');
        return $this->db->resultSet();
    }



    public function getApotekerById($id_apoteker)
    {
        $this->db->query('SELECT * FROM apoteker WHERE id_apoteker=:id_apoteker');
        $this->db->bind('id_apoteker', $id_apoteker);
        return $this->db->single();
    }

    public function getApotekerByUsername($username)
    {
        $this->db->query('SELECT * FROM apoteker WHERE username=:username');
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function tambahDataApoteker($data)
    {
        $query = "INSERT INTO apoteker 
        VALUES
            (:id_apoteker, :username, :pass, :nama_apoteker, :telp)";
        $this->db->query($query);
        $this->db->bind('id_apoteker', $data['id_apoteker']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', md5($data['pass']));
        $this->db->bind('nama_apoteker', $data['nama_apoteker']);
        $this->db->bind('telp', $data['telp']);
        $this->db->execute($query);
        return $this->db->rowCount();
    }

    public function hapusDataApoteker($id_apoteker)
    {
        $query = "DELETE FROM apoteker WHERE id_apoteker=:id_apoteker";
        $this->db->query($query);
        $this->db->bind('id_apoteker', $id_apoteker);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataApoteker($data)
    {
        $query = "UPDATE apoteker
                    SET                    
                        username=:username,
                        pass=:pass,
                        nama_apoteker=:nama_apoteker,
                        telp=:telp
                    WHERE
                        id_apoteker=:id_apoteker
                    ";
        $this->db->query($query);
        $this->db->bind('id_apoteker', $data['id_apoteker']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', md5($data['pass']));
        $this->db->bind('nama_apoteker', $data['nama_apoteker']);
        $this->db->bind('telp', $data['telp']);
        $this->db->execute($query);
        return $this->db->rowCount();
    }

    public function cariDataApoteker()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM apoteker WHERE nama_apoteker like :keyword OR username like :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function autoIncrement()
    {
        $this->db->query("SELECT id_apoteker FROM apoteker ORDER BY id_apoteker DESC");
        $id = $this->db->single();
        $kode = $id['id_apoteker'];
        $get = substr($kode, 2, 3);
        $tambah = (int) $get + 1;

        if (strlen($tambah) == 1) {
            $format = "AP00" . $tambah;
        } elseif (strlen($tambah) == 2) {
            $format = "AP0" . $tambah;
        } else {
            $format = "AP" . $tambah;
        }
        return $format;
    }
}
