<?php

class Transaksi extends Controller
{

    public function index()
    {
        $data['judul'] = "Transaksi";
        $data['trans'] = $this->model('Transaksi_model')->getObat();
        $this->view('templates/sidebar', $data);
        $this->view('transaksi/index', $data);
    }

    public function cari()
    {
        $data['judul'] = "Transaksi";
        $data['obat'] = $this->model('Transaksi_model')->cariDataObat();
        $data['trans'] = $this->model('Transaksi_model')->getObat();
        $this->view('templates/sidebar', $data);
        $this->view('transaksi/index', $data);
    }

    public function bayar()
    {
        $data['judul'] = "Transaksi";
        $data['trans'] = $this->model('Transaksi_model')->getObat();
        $this->view('templates/sidebar', $data);
        $this->view('transaksi/bayar', $data);
    }

    public function detail($id_transaksi)
    {
        $data['judul'] = "Detail Transaksi";
        $data['trans'] = $this->model('Transaksi_model')->getDataTransaksi($id_transaksi);
        $this->view('templates/sidebar', $data);
        $this->view('transaksi/detail', $data);
    }

    public function data()
    {
        $data['judul'] = "Data Transaksi";
        $data['trans'] = $this->model('Transaksi_model')->getAllTransaksi();
        $this->view('templates/sidebar', $data);
        $this->view('transaksi/data', $data);
    }

    public function cariData()
    {
        $data['judul'] = "Data Transaksi";
        $data['trans'] = $this->model('Transaksi_model')->cariDataTransaksi();
        $this->view('templates/sidebar', $data);
        $this->view('transaksi/data', $data);
    }

    public function struk($id_transaksi, $cash)
    {
        $data['judul'] = "Struk Transaksi";
        $data['trans'] = $this->model('Transaksi_model')->getDataTransaksi($id_transaksi);
        $data['cash'] = $cash;
        $this->view('transaksi/struk', $data);
    }

    public function add()
    {
        if ($this->model('Transaksi_model')->tambahDataTransaksi($_POST) > 0) {
            echo "<script> 
                    openWin(); 
                    window.location('<?= BASEURL; ?> /transaksi');             
                 </script>";
            exit;
        }
    }

    public function tambah($id_obat)
    {
        if ($this->model('Transaksi_model')->tambahCart($id_obat) > 0) {
            header('Location:' . BASEURL . '/transaksi');
            exit;
        }
    }

    public function hapus($id_cart)
    {
        if ($this->model('Transaksi_model')->hapusDataCart($id_cart) > 0) {
            header('Location:' . BASEURL . '/transaksi');
            exit;
        }
    }
}
?>


<script>
    var popUp;

    function openWin() {
        window.location = "<?= BASEURL; ?> /transaksi";
        popUp = window.open("<?= BASEURL . '/transaksi/struk/' . $_POST['id_transaksi'] . '/' . $_POST['cash'] ?>", "_blank", "width=500", "height=500");
    }
</script>