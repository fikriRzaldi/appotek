<?php error_reporting(0) ?>
<style>
    @page {
        size: auto;
        margin: 0;
    }

    * {
        font-family: 'montserrat', sans-serif;
        box-sizing: border-box;
    }

    .kop {
        width: 80%;
        height: 100px;
        margin: auto;
        margin-top: 3%;
    }

    .kop h2,
    .kop p {
        position: relative;
        top: 25px;
        left: 20px;
        text-align: justify;
    }

    .kop img {
        float: left;
        margin-top: 3px;
    }

    hr {
        border: 1px solid black;
    }

    body {
        margin: auto;
        width: 100%;
        height: 100%;
    }

    h3,
    table td {
        text-align: center;
    }

    table {
        margin: auto;
        width: 95%;
        border-collapse: collapse;
    }


    .table1 {
        font-family: sans-serif;
        border-collapse: collapse;
        width: 80%;
        border: 1;
    }

    .table1 tr th {
        font-weight: normal;
    }

    .table1,
    th,
    td {
        padding: 15px 5px;
        text-align: center;
    }


    /*list*/
    ul,
    li {
        list-style-type: none;
    }

    .input form {
        display: grid;
        grid-template-columns: 200px 1fr;
    }

    .ttd {
        bottom: 0;
    }
</style>

<?php
foreach ($data['laporan'] as $laporan) :
    $total[] = $laporan['total_harga'];
endforeach;

$hargatotal = array_sum($total);
?>
<div class="kop">
    <img src="<?= BASEURL; ?>/img/logoapotek.png" width="130px" height="130px">
    <h2>Apotek Myn Farma</h2>
    <p>Jl. Japos Raya No.029, Jurang Mangu Barat, Pondok Aren, Tangerang Selatan 12110</p>
</div>

<br><br>
<hr>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h2>
        <center>Laporan Penjualan</center>
    </h2>
    <br>
    <center>
    </center>
    <table border="1" cellpadding="15" cellspacing="0" class="table1" align="center">

        <tr>

            <th>ID Transaksi</th>
            <th>Tanggal</th>
            <th>Apoteker</th>
            <th>Total Penjualan</th>
        </tr>
        <?php foreach ($data['laporan'] as $laporan) : ?>

            <tr class="text-center">

                <td><?= $laporan['id_transaksi']; ?></td>
                <td><?= date('d-m-Y', strtotime($laporan['tgl_transaksi'])); ?></td>
                <td><?= $laporan['nama_apoteker'] ?></td>
                <td>Rp. <?= number_format($laporan['total_harga'], 0, ',', '.'); ?></td>
            </tr>

        <?php endforeach; ?>
        <tr>
            <td style="text-align: center;">Jumlah Transaksi</td>
            <td><?= $data['transaksi']; ?></td>
            <td style="text-align: center;">Total Penjualan</td>
            <td>Rp. <?= number_format($hargatotal, 0, ',', '.'); ?></td>
        </tr>



        <table class="ttd">
            <br>
            <br>
            <tr>
                <td></td>
                <td width="220px">
                    <p>Tangerang Selatan, <?php echo date('d/m/y'); ?> <br>
                        Apoteker,</p>
                    <br>
                    <br>
                    <p>_____________________</p>
                </td>
            </tr>
        </table>

        <script>

        </script>
</body>

</html>
<script>
    window.print()
    // window.location = history.go(-1);
</script>