<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/apoteker/ubahData" method="POST" class="form-control mt-5">
        <table>
            <tr>
                <td><input type="hidden" value="<?= $data['apotekerId']['id_apoteker'] ?>" readonly name="id_apoteker" id="id_apoteker"></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" class="form-control mt-3 ms-4" value="<?= $data['apotekerId']['username'] ?>" name=" username" id="username"></td>
            </tr>
            <!-- <tr>
                <td><label for="pass">Password</label></td>
                <td>:</td>
                <td><input type="text" class="form-control mt-3 ms-4" value="<?= md5($data['apotekerId']['pass']) ?>" name=" pass" id="pass"></td>
            </tr> -->
            <tr>
                <td><label for="nama_apoteker">Nama Apoteker</label></td>
                <td>:</td>
                <td><input type="text" class="form-control mt-3 ms-4" value="<?= $data['apotekerId']['nama_apoteker'] ?>" name=" nama_apoteker" id="nama_apoteker"></td>
            </tr>
            <tr>
                <td><label for="telp">Telepon</label></td>
                <td>:</td>
                <td><input type="text" class="form-control mt-3 ms-4" value="<?= $data['apotekerId']['telp'] ?>" name=" telp" id="telp"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button class="btn btn-primary mt-5 ms-5 mb-5" type="submit">Simpan</button>
                </td>
                <td class="text-center">
                    <a href="<?= BASEURL; ?>/apoteker/index/"><button type="button" class="btn btn-danger mt-5 ms-5 mb-5">Kembali</button></a>
                </td>
            </tr>
        </table>
    </form>

</article>