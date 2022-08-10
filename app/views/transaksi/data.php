
<article>

    <h3 class="mt-3"><?= $data['judul'] ?></h3>

    <div class="col-5">
        <form action="<?= BASEURL; ?>/transaksi/cariData" method="POST">
            <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" name="keyword" autocomplete="off" id="keyword" aria-label="Cari Data" placeholder="Cari Data" aria-describedby="Cari Data">
                <button class="btn btn-primary" type="submit" id="btn-keyword">Cari</button>
            </div>
        </form>
    </div>


    <div class="row">
        <div class="col-2"></div>
        <div class="col-8" id="data">
            <table class="table table-striped table-bordered mt-3 data">
                <tr class="table-dark text-center">
                    <th>ID Transaksi</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Belanja</th>
                    <th>Detail</th>
                </tr>
                <tbody>
                    <?php foreach ($data['trans'] as $trans) : ?>
                        <tr class="text-center">
                            <td><?= $trans['id_transaksi']; ?></td>
                            <td><?= date('d-M-Y', strtotime($trans['tgl_transaksi'])); ?></td>
                            <td>Rp. <?= number_format($trans['total_harga'], 0, ',', '.'); ?></td>
                            <td> <a href="<?= BASEURL; ?>/transaksi/detail/<?= $trans['id_transaksi']; ?>"><button class="btn btn-primary">Detail</button></a>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

</article>