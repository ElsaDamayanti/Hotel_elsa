<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Hotel Elsa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav nav-brand text-uppercase ms-auto py-2 py-lg-0">
                    <li class="#page-top"><a class="nav-link" href="<?= base_url('index.php/home'); ?>">HOME</a></li>
                    <li class="#page-top"><a class="nav-link" href="<?= base_url('index.php/room'); ?>">ROOM</a></li>
                    <li class="#page-top"><a class="nav-link" href="<?= base_url('index.php/fasilitas'); ?>">FASILITAS</a></li>
                    <li class="#page-top"><a class="nav-link" href="<?= base_url('index.php/promo'); ?>">PROMO</a></li>
                    <li class="#page-top"><a class="nav-link" href="<?= base_url('index.php/pesan_kamar'); ?>">PESAN KAMAR</a></li>
                    <?php
                        if ($this->session->userdata ('status') == "login") {
                            echo '<li class="#page-top"><a class="nav-link" href="'.base_url('index.php/profile').'">profile</a></li>';
                            echo '<li class="#page-top"><a class="nav-link" href="'.base_url('index.php/auth/logout').'">logout</a></li>';
                        }else{
                            echo '<li class="#page-top"><a class="nav-link" href="'.base_url('index.php/auth').'">login</a></li>';
                        }
                    ?>
                
                </ul>
            </div>
        </div>
    </nav>