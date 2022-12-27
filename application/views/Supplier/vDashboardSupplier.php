<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="row clearfix progress-box">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <div class="project-info clearfix">
                        <div class="project-info-left">
                            <div class="icon box-shadow bg-blue text-white">
                                <i class="fa fa-briefcase"></i>
                            </div>
                        </div>
                        <?php
                        $data = $this->db->query("SELECT COUNT(id_bb) as jml FROM `bahanbaku` WHERE id_supplier='" . $this->session->userdata('id_supplier') . "';")->row();
                        ?>
                        <div class="project-info-right">
                            <span class="no text-blue weight-500 font-24"><?= $data->jml ?></span>
                            <p class="weight-400 font-18">Bahan Baku</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <div class="project-info clearfix">
                        <div class="project-info-left">
                            <div class="icon box-shadow bg-light-green text-white">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                        </div>
                        <?php
                        $data = $this->db->query("SELECT COUNT(id_transaksi) as jml_transaksi FROM `invoice_bb` WHERE id_supplier='" . $this->session->userdata('id_supplier') . "';")->row();
                        ?>
                        <div class="project-info-right">
                            <span class="no text-light-green weight-500 font-24"><?= $data->jml_transaksi ?></span>
                            <p class="weight-400 font-18">Transaksi</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <?php
        $item = $this->db->query("SELECT * FROM `invoice_bb` WHERE id_supplier='" . $this->session->userdata('id_supplier') . "' AND status_order='1';")->result();
        ?>
        <div class="row clearfix">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <h4 class="mb-20">Informasi Menunggu Konfirmasi</h4>
                    <div class="notification-list mx-h-450 customscroll">
                        <ul>
                            <?php
                            foreach ($item as $key => $value) {
                            ?>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="">
                                        <h3 class="clearfix"><?= $value->tgl_order ?> <span>Menunggu Konfirmasi</span></h3>
                                        <p>Rp. <?= number_format($value->total_order) ?></p>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>


                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
            JNJ BAKERY - AWIRARANGAN KUNINGAN</a>
        </div>
    </div>
</div>