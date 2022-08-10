<article>
    <h3 class="mt-3"><?= $data['judul'] ?></h3>

    <div class="col-5">
        <form action="<?= BASEURL; ?>/obat/cari" method="POST">
            <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" name="keyword" autocomplete="off" id="keyword" aria-label="Cari Data" placeholder="Cari Data" aria-describedby="Cari Data">
                <button class="btn btn-outline-success" type="submit" id="btn-keyword">Cari</button>
            </div>
        </form>
    </div>

    <a href="<?= BASEURL; ?>/obat/tambah/"><button class="btn btn-primary">Tambah</button></a>


    <div id="data">
        <table class="table table-striped table-bordered mt-3">
            <tr class="table-dark text-center">
                <th>Hapus</th>
                <th>Nama Obat</th>
                <th>Jenis Obat</th>
                <th>Stok</th>
                <th>Harga</th>

                <th colspan="2">Opsi</th>
            </tr>
            <?php foreach ($data['obat'] as $obat) : ?>
                <tr class="text-center">
                    <td class="text-center"><a href="<?= BASEURL; ?>/obat/hapus/<?= $obat['id_obat']; ?>" onclick="return confirm('Ingin menghapus data?');"><button class="btn btn-danger mb-2"><i class='bx bxs-trash'></i></button></a></td>
                    <td><?= $obat['nama_obat']; ?></td>
                    <td><?= $obat['jenis_obat']; ?></td>
                    <td><?= $obat['jumlah_obat']; ?></td>
                    <td>Rp. <?= number_format($obat['harga_obat'], 0, ',', '.'); ?></td>
                    <td class="text-center">
                        <a href="<?= BASEURL; ?>/obat/detail/<?= $obat['id_obat']; ?>"><button class="btn btn-success center px-3">Detail</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>


        </table>
    </div>
    </div>
</article>