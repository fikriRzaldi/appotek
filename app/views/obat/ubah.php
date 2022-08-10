<article>
    <h3 class="headingform mt-3"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/obat/ubahData" method="POST" class="form-control mt-3">
        <table>
            <tr>
                <td><input type="hidden" value="<?= $data['obatId']['id_obat'] ?>" readonly name="id_obat" id="id_obat"></td>
            </tr>
            <tr>
                <td><label for="nama_obat">Nama Obat</label></td>
                <td>:</td>
                <td><input type="text" class="form-control mb-3" value="<?= $data['obatId']['nama_obat'] ?>" name="nama_obat" id="nama_obat"></td>
            </tr>
            <tr>
                <td><label for="jenis_obat">Jenis Obat</label></td>
                <td>:</td>
                <td><input type="text" class="form-control mb-3" name="jenis_obat" value="<?= $data['obatId']['jenis_obat'] ?>" id="jenis_obat"></td>
            </tr>
            <tr>
                <td><label for="jumlah_obat">Jumlah Obat</label></td>
                <td>:</td>
                <td><input type="number" class="form-control mb-3" min="0" name="jumlah_obat" value="<?= $data['obatId']['jumlah_obat'] ?>" id="jumlah_obat"></td>
            </tr>
            <tr>
                <td><label for="harga_obat">Harga Obat</label></td>
                <td>:</td>
                <td><input type="number" class="form-control mb-3" min="0" name="harga_obat" value="<?= $data['obatId']['harga_obat'] ?>" id="harga_obat"></td>
            </tr>
            <tr>
                <td><label for="deskripsi">Deskripsi</label></td>
                <td>:</td>
                <td><input type="text" class="form-control mb-3" name="deskripsi" value="<?= $data['obatId']['deskripsi'] ?>" id="deskripsi"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="btn btn-success" type="submit">Simpan</button>
                    <a href="<?= BASEURL; ?>/Obat/index/"><button class="btn btn-danger" type="button">Kembali</button></a>
                </td>
            </tr>
        </table>
    </form>

</article>