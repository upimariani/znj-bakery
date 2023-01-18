<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="row clearfix progress-box">
            <?php if ($this->session->userdata('success')) {
            ?>
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible mt-3">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon-copy fa fa-check" aria-hidden="true"></i> Alert!</h5>
                        <?= $this->session->userdata('success') ?>
                    </div>
                </div>

            <?php
            } ?>
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

        <div class="row clearfix">
            <?php
            $item = $this->db->query("SELECT * FROM `invoice_bb` WHERE id_supplier='" . $this->session->userdata('id_supplier') . "' AND status_order='1';")->result();
            ?>
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
            <?php
            $data = $this->db->query("SELECT SUM(sisa_stok) as stok, bahanbaku.id_bb, nama_bb FROM `invoice_bb` JOIN bb_masuk ON invoice_bb.id_transaksi=bb_masuk.id_transaksi JOIN bahanbaku ON bahanbaku.id_bb=bb_masuk.id_bb WHERE invoice_bb.id_supplier='" . $this->session->userdata('id_supplier') . "' GROUP BY bahanbaku.id_bb;")->result();
            ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <h4 class="mb-20">Informasi Stok Bahan Baku Gudang</h4>
                    <div class="notification-list mx-h-450 customscroll">
                        <ul>
                            <?php
                            foreach ($data as $key => $value) {
                            ?>
                                <li>
                                    <a href="#">
                                        <?php
                                        if ($value->stok <= 10) {
                                        ?>
                                            <h3 class="clearfix text-danger"><?= $value->nama_bb ?> <span>Lakukan Penawaran</span><button class="btn btn-danger" data-toggle="modal" data-target="#Medium-modal<?= $value->id_bb ?>" type="button">
                                                    Penawaran
                                                </button></h3>

                                        <?php
                                        } else {
                                        ?>
                                            <h3 class="clearfix text-success"><?= $value->nama_bb ?> <span>Stok Masih Aman!!!</span></h3>
                                        <?php
                                        }
                                        ?>
                                        <p><?= $value->stok ?></p>
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
        <div class="row clearfix">

            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <h4 class="mb-20">Informasi Penawaran Bahan Baku Supplier</h4>
                    <div class="notification-list mx-h-450 customscroll">
                        <ul>
                            <?php
                            $data = $this->db->query("SELECT * FROM `penawaran` JOIN bahanbaku ON penawaran.id_bb=bahanbaku.id_bb JOIN supplier ON supplier.id_supplier=bahanbaku.id_supplier WHERE supplier.id_supplier='" . $this->session->userdata('id_supplier') . "';")->result();
                            foreach ($data as $key => $value) {
                            ?>

                                <li>
                                    <a>
                                        <img src="vendors/images/img.jpg" alt="">
                                        <h3 class="clearfix"><?= $value->nama_bb ?> | Supplier <strong><?= $value->nama_supplier ?></strong><span>Jumlah Penawaran : <?= $value->qty_penawaran ?> <?= $value->ket_bb ?></span></h3>
                                        <p class="text-danger"><?= $value->time_penawaran ?></p>
                                        <p class="text-primary">Status : <?php if ($value->konfirmasi == '1') {
                                                                                echo 'Dikonfirmasi';
                                                                            } else {
                                                                                echo 'Belum Dikonfirmasi';
                                                                            } ?></p>

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

<?php
foreach ($data as $key => $value) {
?>
    <form action="<?= base_url('Supplier/cDashboard/penawaran/' . $value->id_bb) ?>" method="POST">
        <div class="modal fade" id="Medium-modal<?= $value->id_bb ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Penawaran Bahan Baku</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">

                        <input class="form-control" name="qty" placeholder="Masukkan Quantity penawaran bahan baku...">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
}
?>