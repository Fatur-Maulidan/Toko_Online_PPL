<!DOCTYPE html>
<html>
<meta http-equiv="refresh" content="10">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<header>

    <body>
        <div>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg sticky-top bg-primary" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= base_url('api')?>">Toko Online</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= base_url('api') ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/api/cart">Keranjang
                                    <?php if(session('cart')) {echo count(session('cart'));} else {echo '0';}?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Detail</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- End Navbar -->

        <!-- Content -->
        <container>
            <?= $this->renderSection('content') ?>
        </container>
        <!-- End Content -->

        <!-- Footer -->

        <!-- End Footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </body>

</html>