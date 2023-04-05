<?= $this->extend('Barang/Template/V_Template_Barang') ?>

<?php echo $this->section('content'); ?>

<div class="container p-5">
    <h2>Data Checkout</h2>
    <div class="row">
        <form action="<?= base_url('/api/store');?>" method="POST" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="id_transaksi">ID Transaksi</label> <br>
                <input class="col-sm-12" type="text" name="id_transaksi" id="id_transaksi"
                    value="<?= set_value('id_transaksi') ?>">
            </div>
            <div class="mb-2">
                <label for="stok">Nama</label> <br>
                <input class="col-sm-12" type="number" name="stok" id="stok" value="<?= set_value('stok') ?>">
            </div>
            <div class="mb-2">
                <label for="harga"></label> <br>
                <input class="col-sm-12" type="number" name="harga" id="harga" value="<?= set_value('harga') ?>">
            </div>
            <div class="mb-2">
                <label for="upload">Upload Gambar</label> <br>
                <input class="col-sm-12" type="file" name="gambar" id="gambar">
            </div>
            <br>
            <div>
                <a href="/mahasiswa" class="btn btn-secondary">&laquo; Kembali</a>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
<?php echo $this->endSection(); ?>