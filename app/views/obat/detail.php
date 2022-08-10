<article>
    <h3 class="mt-3"><?= $data['judul'] ?></h3>

    <div class="form-control mt-4">
        <table class="table mt-5">
            <tr>
                <?php
                if ($data['obat']['gambar'] != "") {
                ?><td rowspan="5" class="text-center mt-5" style="width: 30%;"> <img src="<?= BASEURL; ?>/img/obat/<?= $data['obat']['gambar']; ?>" height="150px" width="150px" alt="Gambar Obat"></td>
                <?php
                } else {
                ?> <td rowspan="5" class="text-center mt-5" style="width: 30%;"> <img src="<?= BASEURL; ?>/img/default.png" height="150px" width="150px" alt="Gambar Obat"></td>
                <?php
                }
                ?>
                <td>Nama Obat</td>
                <td>:</td>
                <td><?= $data['obat']['nama_obat'] ?></td>
            </tr>
            <tr>
                <td style="width: 20%;">Jenis Obat</td>
                <td>:</td>
                <td><?= $data['obat']['jenis_obat'] ?></td>
            </tr>
            <tr>
                <td>Jumlah Obat</td>
                <td>:</td>
                <td><?= $data['obat']['jumlah_obat'] ?></td>
            </tr>
            <tr>
                <td>Harga Obat</td>
                <td>:</td>
                <td>Rp. <?= number_format($data['obat']['harga_obat'], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><?= $data['obat']['deskripsi'] ?></td>
            </tr>
        </table>
        <div class="row mt-5 mb-5">
            <div class="col-4"></div>

            <div class="col-1"> <a href="<?= BASEURL; ?>/obat/ubah/<?= $data['obat']['id_obat']; ?>"><button class="btn btn-primary center px-3">Ubah</button></a></div>

            <div class="col-1"><a href="<?= BASEURL; ?>/obat/hapus/<?= $data['obat']['id_obat']; ?>" onclick="return confirm('Ingin menghapus data?');"><button class="btn btn-danger mb-2">Hapus</button></a></div>
            <div class="col-1"><a href=" <?= BASEURL; ?>/obat"><button class="btn btn-success">Kembali</button></a></div>
        </div>
    </div>