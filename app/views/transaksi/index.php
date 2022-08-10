<?php error_reporting(0); ?>
<style>
    #data {
        display: block;
        overflow: auto;
        max-height: 200px;
    }

    #cart {
        display: block;
        overflow: auto;
        max-height: 250px;
    }
</style>
<article>
    <h3 class="h3 mt-3"><?= $data['judul'] ?></h3>
    <div class="row">
        <div class="col-3">
            <form action="<?= BASEURL; ?>/transaksi/cari" method="POST">
                <div class="input-group mb-3 mt-3">
                    <input type="text" class="form-control" name="keyword" autocomplete="off" id="keyword" aria-label="Cari Data" placeholder="Cari Data" aria-describedby="Cari Data">
                    <button class="btn btn-outline-success" type="submit" id="btn-keyword">Cari</button>
                </div>
            </form>
        </div>

        <div class="col-1"></div>

        <div class="col-8">
            <div class="tbltrn" id="data">
                <table class="table table-striped table-bordered mt-2" id="tabeltr">
                    <tr class="table-dark text-center">
                        <th>Nama Obat</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <!-- <th>QTY</th> -->
                        <th>Opsi</th>
                    </tr>
                    <?php foreach ($data['obat'] as $obat) : ?>
                        <tr>
                            <td><?= $obat['nama_obat']; ?></td>
                            <td><?= $obat['jumlah_obat']; ?></td>
                            <td><?= $obat['harga_obat']; ?></td>

                            <!-- <td style="width: 100px;">
                                <input type="number" class="form-control text-center" value="1" min="1" width="10%" id="qty">
                            </td> -->

                            <td class="text-center">
                                <a href="<?= BASEURL; ?>/transaksi/tambah/<?= $obat['id_obat']; ?>"><button class="btn btn-success center px-3"> Tambah </button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>


    <!-- Buat total harga -->
    <?php
    foreach ($data['trans'] as $trans) :
        $total[] = $trans['harga_obat'];
    endforeach;

    $hargatotal = array_sum($total);
    $totald = "Rp. " . number_format($hargatotal, 0, ',', '.')
    ?>


    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-8" id="cart">
            <table class="table table-striped table-bordered mt-2">
                <tr class="table-dark text-center">
                    <th>Hapus</th>
                    <th>Gambar</th>
                    <th>Nama Obat</th>
                    <th>Harga</th>
                </tr>
                <?php foreach ($data['trans'] as $trans) : ?>
                    <tr>
                        <td class="text-center"><a href="<?= BASEURL; ?>/transaksi/hapus/<?= $trans['id_cart']; ?>" onclick="return confirm('Ingin menghapus data?');"><button class="btn btn-danger mb-2"><i class='bx bxs-trash'></i></button></a></td>
                        <?php
                        if ($trans['gambar'] != "") {
                        ?><td class="text-center mt-5" style="width: 30%;"> <img src="<?= BASEURL; ?>/img/obat/<?= $trans['gambar']; ?>" height="150px" width="150px" alt="Gambar Obat"></td>
                        <?php
                        } else {
                        ?> <td class="text-center mt-5" style="width: 30%;"> <img src="<?= BASEURL; ?>/img/default.png" height="150px" width="150px" alt="Gambar Obat"></td>
                        <?php
                        }
                        ?>
                        <td><?= $trans['nama_obat']; ?></td>
                        <!-- <td>  Rp. <p id="total"><?= $trans['harga_obat']; ?></p> -->
                        <td> Rp. <?= $trans['harga_obat']; ?>
                        </td>
                        <!-- <td style="width: 5%;"><input type="number" name="qty" id="qty" width="5%" min="0"></td> -->

                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="2">

                    </td>
                    <td>Total Belanja</td>
                    <td><?= $totald  ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-9"></div>
        <div class="col-1">
            <a href="<?= BASEURL; ?>/transaksi/bayar/"><button class="btn btn-success center px-3">Bayar</button></a>
        </div>
    </div>