<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style=" background: rgb(255,165,0); background: linear-gradient(196deg, rgba(255,165,0,1) 36%, rgba(255,105,0,1) 100%); ">
        
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>welcome">
                <!-- <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Toko Online</div> -->
                <img src="<?= base_url('assets/img/logo3.png')?>" class="img-fluid" alt="">
            </a>
            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"> -->
            <hr class="sidebar-divider my-3" style="background-color: white; opacity: 70%;">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>welcome">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <i class="fas fa-duotone fa-couch"></i>
                    <span>Semua Funiture</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider bg-white font-weight-bolder"style="background-color: white; opacity: 70%;">

            <!-- Heading -->
            <div class="sidebar-heading" style="color: white;opacity: 70%;">
                
            Kategori
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item font-weight-bolder">
                <a class="nav-link" href="<?= base_url('kategori/living_room') ?>">
                    <img src="<?= base_url('assets/img/living room.png')?>" height="25px" alt="">
                    <span>Living Room</span></a>
            </li>
            <li class="nav-item font-weight-bolder">
            <a class="nav-link" href="<?= base_url('kategori/dining_room') ?>">
                <img src="<?= base_url('assets/img/dining room.png')?>" height="25px" alt="">
                    <span>Dining Room</span></a>
            </li>
            <li class="nav-item font-weight-bolder">
                <a class="nav-link" href="<?= base_url('kategori/bedroom') ?>">
                <img src="<?= base_url('assets/img/bedroom.png')?>" height="25px" alt="">
                    <span>Bedroom</span></a>
            </li>
            <li class="nav-item font-weight-bolder">
                <a class="nav-link" href="<?= base_url('kategori/wallart') ?>">
                <img src="<?= base_url('assets/img/wallart.png')?>" height="25px" alt="">
                    <span>Wall Art</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Menampilkan jumlah barang yang sudah dimasukan ke keranjang belanja -->
                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php
                                    $keranjangs = 'Keranjang Belanja: ' . $this->cart->total_items() . ' items'
                                    // .$this->cart->total_items(). 'items' masukkan total item, untuk menampilkan jumlah barang di dalam keranjang belanja
                                    ?>
                                    <!-- Ini untk membuat detail keranjang -->
                                    <?php echo anchor('dashboard/detail_keranjang', $keranjangs); ?>
                                    <i class="fas fa-cart-plus"></i>
                                </li>
                            </ul>
                            <div class="topbar-divider d-none d-sm-block"></div>

                            <ul class="na navbar-nav navbar-right">
                                <?php if ($this->session->userdata('username')) { ?>
                                    <li>
                                        <div>Selamat Datang <?php echo $this->session->userdata('username') ?></div>
                                    </li>
                                    <!-- Jika sudah login maka akan ada logout nyaa -->
                                    <li class="ml-2"><?php echo anchor('auth/logout','Logout'); ?> </li>
                                <?php } else { ?>
                                    <!-- Jika blm login maka akan ada perintah suruh login -->
                                    <li> <?php echo anchor('auth/login', 'Login'); ?></li>
                                <?php }; ?>
                            </ul>
                            
                        </div>
                    </ul>
                </nav>
                <!-- End of Topbar -->