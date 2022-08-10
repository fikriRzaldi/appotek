<head>
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/favicon1.png">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/css/bootstrap.min.css">
    <title>Sign Up</title>

    <style>
        body {
            background-color: #E4E9F7;
        }
    </style>
</head>

<body>


    <article class="text-center mt-5">
        <div class="container">
            <h3 class="mt-3"><?= $data['judul'] ?></h3>
            <form action="<?= BASEURL; ?>/apoteker/add" method="POST" class="form-control mt-3">
                <table>
                    <tr>
                        <td><input type="hidden" value="<?= $this->model('Apoteker_model')->autoIncrement(); ?>" readonly name="id_apoteker" id="id_apoteker"></td>
                    </tr>
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td>:</td>
                        <td><input type="text" autocomplete="off" required class="form-control mt-3 mb-3" name="username" id="username"></td>
                    </tr>
                    <tr>
                        <td><label for="pass">Password</label></td>
                        <td>:</td>
                        <td><input type="text" autocomplete="off" required class="form-control mt-3 mb-3" name="pass" id="pass"></td>
                    </tr>
                    <tr>
                        <td><label for="nama_apoteker">Nama Apoteker</label></td>
                        <td>:</td>
                        <td><input type="text" autocomplete="off" required class="form-control mt-3 mb-3" name="nama_apoteker" id="nama_apoteker"></td>
                    </tr>
                    <tr>
                        <td><label for="telp">Telepon</label></td>
                        <td>:</td>
                        <td><input type="text" autocomplete="off" class="form-control mt-3 mb-3" name="telp" id="telp"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button class="btn btn-primary mb-3 me-5 ms-5" type="submit">Simpan</button>
                            <a href="<?= BASEURL; ?>/apoteker/index/"><button class="btn btn-danger mb-3" type="button">Kembali</button></a>
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </article>
</body>