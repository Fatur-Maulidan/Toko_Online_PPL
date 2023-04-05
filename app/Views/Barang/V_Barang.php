<?= $this->extend('Barang/Template/V_Template_Barang') ?>

<?php echo $this->section('content'); ?>

<div class="container p-5">
    <h2>Data Barang</h2>
    <form class="mt-3" action="<?= base_url('api/add') ?>" method="GET">
        <button type="submit" class="btn btn-primary">Tambah Barang</button>
    </form>
    <div class="col border mt-3 justify-content-center">
        <div class="row mt-3">
            <?php foreach ($barang as $barangs):?>
            <div class="col col-md-3 mb-3 d-flex align-items-center">
                <div class="card mb-4" style="width: 18rem;">
                    <div class="card-body">
                        <img src="image/Produk/<?= $barangs['nama_file_barang']?>"
                            class="card-img-top img-fluid object-fit-cover border rounded" alt="...">
                        <h5 class="card-title mt-3"><?= $barangs['nama_barang']?></h5>
                        <div class="d-flex flex-row mt-3 justify-content-between"><?= $barangs['harga_barang']?>
                            <form method="post" action="<?= base_url('api/cart/'.$barangs['id_barang'])?>">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>