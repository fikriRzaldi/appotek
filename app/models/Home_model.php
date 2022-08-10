<?php

class Home_model
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function sumApoteker()
    {
        $this->db->query("SELECT * FROM apoteker");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function sumTransaksi()
    {
        $this->db->query("SELECT * FROM transaksi");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function sumObat()
    {
        $this->db->query("SELECT * FROM obat");
        $this->db->execute();
        return $this->db->rowCount();
    }
}
