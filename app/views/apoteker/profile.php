<article>
    <h3 class="h3 mt-3"><?= $data['judul'] ?></h3>
    <div class="form-control mt-5" style="height: 400px;">
        <table class="table">
            <tr>
                <td rowspan="5" style="width: 400px;">
                    <img src="<?= BASEURL; ?>/img/profile.jpg" width="200px" style="margin-left: 60px;" height="200px" alt="Profile Image">
                </td>
                <td>Username</td>
                <td>:</td>
                <td><?= $data['apoteker']['username'] ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $data['apoteker']['nama_apoteker'] ?></td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td><?= $data['apoteker']['telp'] ?></td>
            </tr>
            <tr>

            </tr>
        </table>
        <div class="col-1" style="margin-left: 80%; margin-top: 5%;"><button onclick="history.back()" class="btn btn-danger">Kembali</button></a></div>
    </div>
</article>