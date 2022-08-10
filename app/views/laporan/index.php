<?php
error_reporting(0);
?>
<article>
    <h3 class="h3 mt-3"><?= $data['judul'] ?></h3>
    <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col-3">
            <label for="">Tanggal Awal:</label>
        </div>
        <div class="col-3">
            <label for="">Tanggal Akhir:</label>
        </div>
    </div>
    <form name="keyword" action="<?= BASEURL; ?>/laporan/cari" method="POST">
        <div class="row mt-2">
            <div class="col-2"></div>
            <div class="col-3">
                <input class="form-control" type="date" name="tgl_awal" id="tglawal">
            </div>
            <div class="col-3">
                <input class="form-control" type="date" name="tgl_akhir" id="tglakhir">
            </div>
            <div class="col-1 text-center">
                <a href="<?= BASEURL; ?>/laporan/cari/"><button class="btn btn-outline-dark">Cari</button></a>
            </div>
            <div class="col-1 text-center">
                <button type="submit" onclick="keyword.action='<?= BASEURL; ?>/laporan/cetak'; return true;" class="btn btn-primary">Cetak</button>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table table-striped table-bordered mt-3">
                <tr class="table-dark text-center">
                    <th>ID Transaksi</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Harga</th>
                </tr>
                <?php foreach ($data['laporan'] as $laporan) : ?>
                    <tr class="text-center">
                        <td><?= $laporan['id_transaksi']; ?></td>
                        <td><?= date('d-m-Y', strtotime($laporan['tgl_transaksi'])); ?></td>
                        <td>Rp. <?= number_format($laporan['total_harga'], 0, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>


            </table>
        </div>
    </div>
</article>