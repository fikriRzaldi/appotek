<article>
    <h3 class="mt-3"><?= $data['judul'] ?></h3>

    <div class="form-control mt-4">
        <div class="row mb-1 mt-5">
            <div class="col-4"></div>
            <div class="col-2">ID Transaksi :</div>
            <div class="col-2"> <?= $data['trans'][0]['id_transaksi']; ?></div>
        </div>
        <div class="row mb-1">
            <div class="col-4"></div>
            <div class="col-2">Tanggal :</div>
            <div class="col-2"> <?= date('d-m-Y', strtotime($data['trans'][0]['tgl_transaksi'])); ?></div>
        </div>
        <div class="row mb-1">
            <div class="col-4"></div>
            <div class="col-2">Apoteker :</div>
            <div class="col-2"> <?= $data['trans'][0]['nama_apoteker']; ?></div>
        </div>
        <div class="row mb-1">
            <div class="col-4"></div>
            <div class="col-2">Barang :</div>
            <div class="col-1">
                <?php foreach ($data['trans'] as $trans) : ?>
                    <?= $trans['nama_obat']; ?>
                <?php endforeach ?>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-4"></div>
            <div class="col-2">Total Belanja :</div>
            <div class="col-2"> Rp. <?= number_format($data['trans'][0]['total_harga'], 0, ',', '.'); ?></div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-5"></div>
            <div class="col-2"><a href=" <?= BASEURL; ?>/transaksi/data/"><button class="btn btn-danger">Kembali</button></a></div>
        </div>
    </div>