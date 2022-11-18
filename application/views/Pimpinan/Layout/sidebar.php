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
                        <a class="dropdown-item" href="profile.php"><i class="fa fa-user-md" aria-hidden="true"></i> Profile</a>
                        <a class="dropdown-item" href="profile.php"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a>
                        <a class="dropdown-item" href="faq.php"><i class="fa fa-question" aria-hidden="true"></i> Help</a>
                        <a class="dropdown-item" href="<?= base_url('auth/logout_user') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
                    </div>
                </div>
            </div>
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.php">
                <img src="<?= base_url('asset/deskapp-master/') ?>vendors/images/deskapp-logo.png" alt="">
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
                            <span class="fa fa-book"></span><span class="mtext">Laporan</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>