<?php

class Login_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAkun()
    {
    }

    public function prosesLogin($data)
    {
        if (isset($_POST['login'])) {

            $query = "SELECT * FROM apoteker WHERE username = :username AND pass = :pass";
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('pass', md5($data['pass']));

            $this->db->execute();
            $user = $data['username'];
            $value = $this->db->rowCount();
            return [$user, $value];
        }
    }
}
