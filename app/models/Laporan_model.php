<?php

class Laporan_model
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cariDataLaporan()
    {
        $tgl_awal = $_POST['tgl_awal'];
        $tgl_akhir = $_POST['tgl_akhir'];
        $this->db->query("SELECT * FROM transaksi WHERE tgl_transaksi BETWEEN :tgl_awal AND :tgl_akhir ORDER BY tgl_transaksi ASC");
        $this->db->bind("tgl_awal", $tgl_awal);
        $this->db->bind("tgl_akhir", $tgl_akhir);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function cariLaporan($tgl_awal, $tgl_akhir)
    {
        $this->db->query("SELECT * FROM transaksi RIGHT JOIN apoteker ON transaksi.username = apoteker.username WHERE tgl_transaksi BETWEEN :tgl_awal AND :tgl_akhir ORDER BY tgl_transaksi ASC");
        $this->db->bind("tgl_awal", $tgl_awal);
        $this->db->bind("tgl_akhir", $tgl_akhir);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function sumTransaksi($tgl_awal, $tgl_akhir)
    {
        $this->db->query("SELECT * FROM transaksi RIGHT JOIN apoteker ON transaksi.username = apoteker.username WHERE tgl_transaksi BETWEEN :tgl_awal AND :tgl_akhir ORDER BY tgl_transaksi ASC");
        $this->db->bind("tgl_awal", $tgl_awal);
        $this->db->bind("tgl_akhir", $tgl_akhir);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
