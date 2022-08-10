<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('login/index', $data);
    }

    public function cekLogin()
    {

        [$user, $value] = $this->model("Login_model")->prosesLogin($_POST);
        if ($value > 0) {
            session_start();
            $_SESSION['username'] = $user;
            if (isset($_SESSION['username'])) {
                header('Location: ' . BASEURL . '/home');
            }
            return;
        } else {

            echo "<script>
                        alert('Login Gagal Password atau Username Tidak Sesuai');
                        </script>";
?>
            <script>
                window.location = "<?= BASEURL; ?> /login";
            </script>

<?php
        }
    }
}
?>