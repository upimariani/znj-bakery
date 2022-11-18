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
                        <a href="<?= base_url('Admin/cDashboardAdmin') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDashboardAdmin') {
                                                                                                                echo 'active';
                                                                                                            }  ?>">
                            <span class="fa fa-home"></span><span class="mtext">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/cUser') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cUser') {
                                                                                                        echo 'active';
                                                                                                    }  ?>">
                            <span class="fa fa-user"></span><span class="mtext">User</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/cSupplier') ?>" class="dropdown-toggle no-arrow <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cSupplier') {
                                                                                                            echo 'active';
                                                                                                        }  ?>">
                            <span class="fa fa-users"></span><span class="mtext">Supplier</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cBahanMasuk') {
                                                                            echo 'active';
                                                                        }  ?>
                                                                        <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cBahanKeluar') {
                                                                            echo 'active';
                                                                        }  ?>">
                            <span class="fa fa-list"></span><span class="mtext">Bahan Baku</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="<?= base_url('Admin/cBahanMasuk') ?>">Transaksi Bahan Baku Masuk</a></li>
                            <li><a href="<?= base_url('Admin/cBahanMasuk/bahanmasuk') ?>">Bahan Baku Masuk</a></li>
                            <li><a href="<?= base_url('Admin/cBahanKeluar') ?>">Bahan Baku Keluar</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>