<?php

class Transaksi_model
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cariDataObat()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM obat WHERE nama_obat like :keyword OR jenis_obat like :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function cariDataTransaksi()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM transaksi WHERE id_transaksi like :keyword OR tgl_transaksi like :keyword OR total_harga like :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function tambahCart($id_obat)
    {

        $this->db->query('INSERT INTO cart VALUES (:id_cart, :id_obat)');
        $this->db->bind('id_cart', $id_obat);
        $this->db->bind('id_obat', $id_obat);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getAllTransaksi()
    {
        $query = "SELECT * FROM transaksi";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getObat()
    {
        $query = "SELECT obat.*, cart.* FROM obat INNER JOIN cart on obat.id_obat=cart.id_obat";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getDetailTransaksi($id_transaksi)
    {
        $query = "SELECT * FROM transaksi RIGHT JOIN detail ON transaksi.id_transaksi = detail.id_transaksi RIGHT JOIN obat ON detail.id_obat = obat.id_obat WHERE transaksi.id_transaksi = :id_transaksi";
        $this->db->query($query);
        $this->db->bind("id_transaksi", $id_transaksi);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function tambahDataTransaksi($data)
    {
        $query = "INSERT INTO transaksi
        VALUES 
        (:id_transaksi, :tgl_transaksi, :total_harga, :username)";
        $this->db->query($query);
        $this->db->bind("id_transaksi", $data['id_transaksi']);
        $this->db->bind("tgl_transaksi", $data['tgl_transaksi']);
        $this->db->bind("total_harga", $data['total_harga']);
        $this->db->bind("username", $data['username']);
        $this->db->execute();

        // insert detail
        for ($i = 0; $i < count($_POST['id_obat']); $i++) {
            $id_obat = $_POST['id_obat'][$i];
            $sql = "INSERT INTO detail
        VALUES 
        (:id_order, :id_obat, :id_transaksi)";
            $this->db->query($sql);
            $this->db->bind("id_order", $id_obat);
            $this->db->bind("id_obat", $id_obat);
            $this->db->bind("id_transaksi", $data['id_transaksi']);
            $this->db->execute();
        }

        // delete chart
        $this->db->query("DELETE from `cart`");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getDataTransaksi($id_transaksi)
    {
        $query = "SELECT * FROM transaksi RIGHT JOIN detail ON transaksi.id_transaksi = detail.id_transaksi RIGHT JOIN obat ON detail.id_obat = obat.id_obat RIGHT JOIN apoteker ON transaksi.username = apoteker.username WHERE transaksi.id_transaksi = :id_transaksi ";

        $this->db->query($query);
        $this->db->bind("id_transaksi", $id_transaksi);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function hapusDataCart($id_cart)
    {
        $query = 'DELETE FROM cart WHERE id_cart=:id_cart';
        $this->db->query($query);
        $this->db->bind('id_cart', $id_cart);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function autoIncrement()
    {
        $this->db->query("SELECT id_transaksi FROM transaksi ORDER BY id_transaksi DESC");
        $id = $this->db->single();
        $kode = $id['id_transaksi'];
        $get = substr($kode, 3, 3);
        $tambah = (int) $get + 1;

        if (strlen($tambah) == 1) {
            $format = "TRN00" . $tambah;
        } elseif (strlen($tambah) == 2) {
            $format = "TRN0" . $tambah;
        } else {
            $format = "TRN" . $tambah;
        }
        return $format;
    }
}
