<article>
    <h3 class="h3 mt-3"><?= $data['judul'] ?></h3>

    <div class="col-5">
        <form action="<?= BASEURL; ?>/apoteker/cari" method="POST">
            <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" name="keyword" autocomplete="off" id="keyword" aria-label="Cari Data" placeholder="Cari Data" aria-describedby="Cari Data">
                <button class="btn btn-outline-success" type="submit" id="btn-keyword">Cari</button>
            </div>
        </form>
    </div>

    <!-- <a href="<?= BASEURL; ?>/apoteker/tambah/"><button class="btn btn-primary">Tambah</button></a> -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table border=1 class="table table-striped table-bordered mt-5">
                <tr class="table-dark text-center">
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th colspan="2">Opsi</th>
                </tr>
                <?php foreach ($data['apoteker'] as $apoteker) : ?>
                    <tr class="text-center">
                        <td><?= $apoteker['username']; ?></td>
                        <td><?= $apoteker['nama_apoteker']; ?></td>
                        <td><?= $apoteker['telp']; ?></td>
                        <td class="text-center">
                            <a href="<?= BASEURL; ?>/apoteker/hapus/<?= $apoteker['id_apoteker']; ?>" onclick="return confirm('Ingin menghapus data?');"><button class="btn btn-danger">Hapus</button></a>
                            <a href="<?= BASEURL; ?>/apoteker/ubah/<?= $apoteker['id_apoteker']; ?>"><button class="btn btn-success">Ubah</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>


            </table>
        </div>
    </div>
    </div>
</article>