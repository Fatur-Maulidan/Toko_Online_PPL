<?= $this->extend('Barang/Template/V_Template_Barang') ?>

<?php echo $this->section('content'); ?>
<div class="container p-5">
    <h1>Tambah Barang</h1>
    <div class="row col-sm-6">
        <form action="<?= base_url('/api/store');?>" method="POST" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="id_barang">ID Barang</label> <br>
                <input class="col-sm-12" type="text" name="id_barang" id="id_barang"
                    value="<?= set_value('id_barang') ?>">
            </div>
            <div class="mb-2">
                <label for="nama">Nama Barang</label> <br>
                <input class="col-sm-12" type="text" name="nama" id="nama" value="<?= set_value('nama') ?>">
            </div>
            <div class="mb-2">
                <label for="stok">Stok</label> <br>
                <input class="col-sm-12" type="number" name="stok" id="stok" value="<?= set_value('stok') ?>">
            </div>
            <div class="mb-2">
                <label for="harga">Harga</label> <br>
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