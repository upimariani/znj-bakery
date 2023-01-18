<body>
    <div class="pre-loader"></div>
    <div class="header clearfix">
        <div class="header-right">
            <div class="brand-logo">
                <a href="index.php">
                    <h4>ZNJ BAKERY</h4>
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
                        <span class="user-name"><?= $this->session->userdata('nama_supplier') ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?= base_url('auth/logout_supplier') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
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
                        <a href="<?= base_url('Supplier/cDashboard') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Supplier' && $this->uri->segment(2) == 'cDashboard') {
                                                                                                                echo 'active';
                                                                                                            }  ?>">
                            <span class="fa fa-home"></span><span class="mtext">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Supplier/cBahanBaku') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Supplier' && $this->uri->segment(2) == 'cBahanBaku') {
                                                                                                                echo 'active';
                                                                                                            }  ?>">
                            <span class="fa fa-user"></span><span class="mtext">Bahan Baku</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Supplier/cTransaksibb') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Supplier' && $this->uri->segment(2) == 'cTransaksibb') {
                                                                                                                echo 'active';
                                                                                                            }  ?>">
                            <span class="fa fa-users"></span><span class="mtext">Transaksi Bahan Baku</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Supplier/cReturn') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Supplier' && $this->uri->segment(2) == 'cReturn') {
                                                                                                            echo 'active';
                                                                                                        }  ?>">
                            <span class="fa fa-book"></span><span class="mtext">Return Barang</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>