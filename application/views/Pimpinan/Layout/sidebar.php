<body>
    <div class="pre-loader"></div>
    <div class="header clearfix">
        <div class="header-right">
            <div class="brand-logo">
                <a href="index.php">
                    <img src="<?= base_url('asset/deskapp-master/') ?>vendors/images/logo.png" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon"><i class="fa fa-user-o"></i></span>
                        <span class="user-name"><?= $this->session->userdata('nama_user') ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a class="dropdown-item" href="<?= base_url('auth/logout_user') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.php">
                <h4>ZNJ BAKERY</h4>
            </a>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">

                    <li>
                        <a href="<?= base_url('Pimpinan/cDashboardPimpinan') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Pimpinan' && $this->uri->segment(2) == 'cDashboardPimpinan') {
                                                                                                                        echo 'active';
                                                                                                                    }  ?>">
                            <span class="fa fa-home"></span><span class="mtext">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Pimpinan/cLaporan') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Pimpinan' && $this->uri->segment(2) == 'cLaporan') {
                                                                                                            echo 'active';
                                                                                                        }  ?>">
                            <span class="fa fa-book"></span><span class="mtext">Laporan Transaksi</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Pimpinan/cLaporanbbKeluar') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Pimpinan' && $this->uri->segment(2) == 'cLaporanbbKeluar') {
                                                                                                                    echo 'active';
                                                                                                                }  ?>">
                            <span class="fa fa-barcode"></span><span class="mtext">Laporan Bahan Baku Keluar</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Pimpinan/cLaporanbbMasuk') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Pimpinan' && $this->uri->segment(2) == 'cLaporanbbMasuk') {
                                                                                                                    echo 'active';
                                                                                                                }  ?>">
                            <span class="fa fa-sign-in"></span><span class="mtext">Laporan Bahan Baku Masuk</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>