<article>
    <h3 class="headingform mt-3"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/obat/add" method="POST" enctype="multipart/form-data" class="form-control mt-3">
        <table>
            <tr>
                <td><input type="hidden" value="<?= $this->model('Obat_model')->autoIncrement(); ?>" readonly name="id_obat" id="id_obat"></td>
            </tr>
            <tr>
                <td><label for="nama_obat">Nama Obat</label></td>
                <td>:</td>
                <td><input type="text" autocomplete="off" required class="form-control mb-3 ms-3" name="nama_obat" id="nama_obat"></td>
            </tr>
            <td><label for="gambar">Gambar</label></td>
            <td>:</td>
            <td><input type="file" name="gambar" class="form-control mb-3 ms-3" id="gambar"></td>
            <tr>
                <td><label for="jenis_obat">Jenis Obat</label></td>
                <td>:</td>
                <td><input type="text" autocomplete="off" class="form-control mb-3 ms-3" name="jenis_obat" id="jenis_obat"></td>
            </tr>
            <tr>
                <td><label for="jumlah_obat">Stok Obat</label></td>
                <td>:</td>
                <td><input type="number" autocomplete="off" class="form-control mb-3 ms-3" min="0" name="jumlah_obat" id="jumlah_obat"></td>
            </tr>
            <tr>
                <td><label for="harga_obat">Harga Obat</label></td>
                <td>:</td>
                <td><input type="number" autocomplete="off" class="form-control mb-3 ms-3" min="0" name="harga_obat" id="harga_obat"></td>
            </tr>
            <tr>
                <td><label for="deskripsi">Deskripsi</label></td>
                <td>:</td>
                <td><input type="text" autocomplete="off" class="form-control mb-3 ms-3" name="deskripsi" id="deskripsi"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="btn btn-success me-5 ms-5 mt-3 mb-3" type="submit">Simpan</button>
                    <a href="<?= BASEURL; ?>/Obat/index/"><button type="button" class="btn btn-danger mt-3 mb-3">Kembali</button></a>
                </td>
            </tr>
        </table>
    </form>

</article>