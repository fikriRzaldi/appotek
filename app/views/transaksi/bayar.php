<?php
foreach ($data['trans'] as $trans) :
    $total[] = $trans['harga_obat'];
endforeach;

$hargatotal = array_sum($total);

$todayDate = date('Y-m-d', strtotime('today'));
?>


<form method="POST" action="<?= BASEURL; ?>/transaksi/add" class="form-control mt-5">
    <div class="row mb-3">
        <div class="col-2">
            ID Transaksi
        </div>
        <div class="col-2">
            <input type="text" class="form-control" readonly name="id_transaksi" value="<?= $this->model('Transaksi_model')->autoIncrement(); ?>" id="">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-2">
            Apoteker
        </div>
        <div class="col-2">
            <input type="text" class="form-control" readonly name="username" value="<?= $_SESSION['username']; ?>" id="">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-2">
            Tanggal
        </div>
        <div class="col-2">
            <input type="date" value="<?= $todayDate ?>" class="form-control" name="tgl_transaksi" id="">
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            Barang
        </div>
        <div class="col-2">
            <?php foreach ($data['trans'] as $trans) : ?>
                <input type="text" name="nama_obat[]" readonly class="form-control" id="" value="<?= $trans['nama_obat']; ?>">
                <input type="text" hidden name="id_obat[]" value="<?= $trans['id_obat']; ?>">
            <?php endforeach; ?>
        </div>
        <div class="col-2">
            <?php foreach ($data['trans'] as $trans) : ?>
                <input type="text" name="harga_obat[]" readonly id="" class="form-control" value="<?= $trans['harga_obat']; ?>">
            <?php endforeach; ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-2">
            Total Harga
        </div>
        <div class="col-2"></div>
        <div class="col-2">
            <input type="text" name="total_harga" readonly class="form-control" value="<?= $hargatotal; ?>" id="">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-2">
            Cash
        </div>
        <div class="col-2"></div>
        <div class="col-2">
            <input type="text" autocomplete="off" name="cash" required class="form-control" id="">
        </div>
    </div>


    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success center px-3">Bayar</button>
        </div>
    </div>

</form>