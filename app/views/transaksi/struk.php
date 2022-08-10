<?php
$total_belanja = $data['trans'][0]['total_harga'];
$adm = 2500;
$total = $data['trans'][0]['total_harga'];
$kembali = $data['cash'] - $total;
date_default_timezone_set('Asia/Jakarta');
?>
<html>

<head>
    <title>Faktur Pembayaran</title>
    <style>
        #tabel {
            font-size: 15px;
            border-collapse: collapse;
        }

        #tabel td {
            padding-left: 5px;
            border: 1px solid black;
        }

        .top {
            border: 0;
            border-top: 3px double;
        }

        #C1 {
            text-align: right;
        }

        #C2 {
            text-align: right;
            font-size: 14pt;
            color: black
        }

        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 1px;
        }
    </style>
</head>

<body style='font-family:tahoma; font-size:8pt;'>
    <center>

        <table style='width:350px; font-size:16pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='CENTER' vertical-align:top'><span style='color:black;'>
                    <b>APOTEK MYN FARMA</b></br>JL XXXXXXXXXXX XXXXXXX</span></br>


                <span style='font-size:12pt'>ID. : <?= $data['trans'][0]['id_transaksi']; ?>, <?= date('d-m-Y', strtotime($data['trans'][0]['tgl_transaksi'])); ?> (user: <?= $data['trans'][0]['nama_apoteker']; ?>), <?= date("h:i:sa"); ?></span></br>
            </td>
            <tr>
                <td colspan='5'>
                    <hr class="top">
                </td>
            </tr>
        </table>


        <table cellspacing='0' cellpadding='0' style='width:350px; font-size:12pt; font-family:calibri;  border-collapse: collapse; margin-top: 1%;' border='0'>

            <tr align='center'>
                <td colspan="4" width='10%'>Item</td>
                <td width='13%'>Price</td>
            <tr>
                <td colspan='5'>
                    <hr>
                </td>
            </tr>
            </tr>
            <?php foreach ($data['trans'] as $trans) : ?>
                <tr align="center">

                    <td colspan="4" style='vertical-align:top'><?= $trans['nama_obat']; ?></td>
                    <td style='vertical-align:top; text-align:center; padding-right:10px'>Rp. <?= number_format($trans['harga_obat'], 0, ',', '.'); ?></td>

                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan='5'>
                    <hr>
                </td>
            </tr>

            <tr>
                <td colspan='4'>
                    <div id="C1">Total Belanja : </div>
                </td>
                <td id="C2">Rp. <?= number_format($data['trans'][0]['total_harga'], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td colspan='4'>
                    <div id="C1">Total Harga : </div>
                </td>
                <td id="C2">Rp. <?= number_format($total, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td colspan='4'>
                    <div id="C1">Cash : </div>
                </td>
                <td id="C2">Rp. <?= number_format($data['cash'], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td colspan='4'>
                    <div id="C1">Kembali : </div>
                </td>
                <td id="C2">Rp. <?= number_format($kembali, 0, ',', '.'); ?></td>
            </tr>
        </table>


        <table style='width:350; font-size:12pt;' cellspacing='2'>
            <tr></br>
                <td align='center'>****** TERIMAKASIH ******</br></td>
            </tr>
        </table>
    </center>
    <script>
        window.print();
    </script>
</body>

</html>