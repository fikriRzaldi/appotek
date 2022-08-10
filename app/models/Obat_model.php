<?php
class Obat_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllObat()
    {
        $this->db->query('SELECT * FROM obat');
        return $this->db->resultSet();
    }

    public function getObatById($id_obat)
    {
        $this->db->query('SELECT * FROM obat WHERE id_obat=:id_obat');
        $this->db->bind('id_obat', $id_obat);
        return $this->db->single();
    }

    public function ubahDataObat($data)
    {
        $query = "UPDATE obat SET
                nama_obat=:nama_obat,
                jenis_obat=:jenis_obat,
                jumlah_obat=:jumlah_obat,
                harga_obat=:harga_obat,
                deskripsi=:deskripsi
                WHERE
                id_obat=:id_obat";
        $this->db->query($query);
        $this->db->bind('id_obat', $data['id_obat']);
        $this->db->bind('nama_obat', $data['nama_obat']);
        $this->db->bind('jenis_obat', $data['jenis_obat']);
        $this->db->bind('jumlah_obat', $data['jumlah_obat']);
        $this->db->bind('harga_obat', $data['harga_obat']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataObat($data)
    {
        $acc = array('png', 'jpg');
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];

        if (in_array($ekstensi, $acc) === true) {
            if ($ukuran < 1044070) {
                move_uploaded_file($file_tmp, '../public/img/obat/' . $gambar);
            }
        }
        $query = "INSERT INTO obat
            VALUES 
                (:id_obat, :nama_obat, :jenis_obat, :jumlah_obat, :harga_obat, :deskripsi, :gambar)";
        $this->db->query($query);
        $this->db->bind('id_obat', $data['id_obat']);
        $this->db->bind('nama_obat', $data['nama_obat']);
        $this->db->bind('jenis_obat', $data['jenis_obat']);
        $this->db->bind('jumlah_obat', $data['jumlah_obat']);
        $this->db->bind('harga_obat', $data['harga_obat']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambar', $gambar);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataObat($id_obat)
    {
        $query = 'DELETE FROM obat WHERE id_obat=:id_obat';
        $this->db->query($query);
        $this->db->bind('id_obat', $id_obat);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariDataObat()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM obat WHERE nama_obat like :keyword OR jenis_obat like :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function autoIncrement()
    {
        $this->db->query("SELECT id_obat FROM obat ORDER BY id_obat DESC");
        $id = $this->db->single();
        $kode = $id['id_obat'];
        $get = substr($kode, 2, 3);
        $tambah = (int) $get + 1;

        if (strlen($tambah) == 1) {
            $format = "MD00" . $tambah;
        } elseif (strlen($tambah) == 2) {
            $format = "MD0" . $tambah;
        } else {
            $format = "MD" . $tambah;
        }
        return $format;
    }
}
