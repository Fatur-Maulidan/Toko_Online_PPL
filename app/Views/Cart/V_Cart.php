<?= $this->extend('Barang/Template/V_Template_Barang') ?>

<?php echo $this->section('content'); ?>

<div class="container p-5">
    <h2>Data Cart</h2>
    <div class="row">
        <div class="col">
            <?php if ($items) : ?>
            <?php foreach ($items as $index => $item):?>
            <div class="row mt-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?=base_url()?>image/Produk/<?= $item['nama_file_barang']?>"
                                class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item['nama_barang']?></h5>
                                <p class="card-text">Harga Satuan : <?= $item['harga_barang']?><br>
                                <form method="POST" action="<?= base_url('api/cart')?>">
                                    Quantity : <button type="submit" name="type" value="min" class="btn btn-primary"> -
                                    </button>
                                    <input type="hidden" name="index" value="<?php echo $index;?>">
                                    <input type="number" name="quantity" value="<?= $item['quantity']?>"
                                        style="width:30px; text-align:center; margin:auto;" disabled>
                                    <button type="submit" class="btn btn-primary" name="type" value="add">+</button>
                                    <br>
                                </form>

                                Total : <?= $item['harga_barang'] * $item['quantity']?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="col">
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Harga</h5>
                    <p class="card-text">
                        <?php
                        $total = 0;
                        $data = $_SESSION['cart'];

                        foreach($data as $item){
                            $total += $item['harga_barang'] * $item['quantity'];
                        }
                    ?>
                    <h5>RP <?php echo $total ?></h5>
                    </p>
                    <a href="<?= base_url('api/cart/checkout'); ?>"><button
                            class="btn btn-primary">Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>