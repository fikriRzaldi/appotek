<?php

class Laporan extends Controller
{

    public function index()
    {
        $data['judul'] = 'Laporan';
        $this->view('templates/sidebar', $data);
        $this->view('laporan/index', $data);
    }

    public function cari()
    {
        $data['judul'] = "Laporan";
        $data['laporan'] = $this->model('Laporan_model')->cariDataLaporan();
        $this->view('templates/sidebar', $data);
        $this->view('laporan/index', $data);
    }

    public function cetak()
    {
        $data['judul'] = "Laporan";
        $data['laporan'] = $this->model('Laporan_model')->cariLaporan($_POST['tgl_awal'], $_POST['tgl_akhir']);
        $data['transaksi'] = $this->model('Laporan_model')->sumTransaksi($_POST['tgl_awal'], $_POST['tgl_akhir']);
        $this->view('laporan/laporanPenjualan', $data);
    }
}

?>

<script>
    var popUp;

    function openWin() {
        popUp = window.open("<?= BASEURL . '/laporan/cetak' ?>", "_blank", "width=500", "height=500");
    }
</script>