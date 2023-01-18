<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

        <div class="row clearfix">
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
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <h4 class="mb-20">Informasi Stok Bahan Baku Gudang</h4>
                    <div class="notification-list mx-h-450 customscroll">
                        <ul>
                            <?php
                            foreach ($stok_bb as $key => $value) {
                                if ($value->sisa_stok != 0) {
                            ?>

                                    <li>
                                        <a href="#">
                                            <img src="vendors/images/img.jpg" alt="">
                                            <h3 class="clearfix"><?= $value->nama_bb ?> | Tgl.Masuk <strong><?= $value->tgl_order ?></strong><span>Stok : <?= $value->sisa_stok ?> <?= $value->ket_bb ?></span></h3>
                                            <?php
                                            if ($value->sisa_stok <= $value->stok_min_gudang) {
                                            ?>
                                                <p class="text-danger">Stok Sudah melewati batas minimal stok!!! Segera Melakukan Transaksi</p>
                                            <?php
                                            } else {
                                            ?>
                                                <p class="text-success">Stok Masih Aman</p>
                                            <?php
                                            }
                                            ?>

                                        </a>
                                    </li>
                            <?php
                                }
                            }
                            ?>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <h4 class="mb-30">Transaksi</h4>
                    <div class="to-do-list mx-h-450 customscroll">
                        <ul>
                            <?php
                            foreach ($transaksi_belum_bayar as $key => $value) {
                            ?>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="">
                                        <h3 class="clearfix"><?= $value->tgl_order ?> | Total Order <strong>Rp. <?= number_format($value->total_order) ?></strong></h3>
                                        <p class="text-danger">Belum Melakukan Pembayaran</p>

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
                            $data = $this->db->query("SELECT * FROM `penawaran` JOIN bahanbaku ON penawaran.id_bb=bahanbaku.id_bb JOIN supplier ON supplier.id_supplier=bahanbaku.id_supplier WHERE konfirmasi='0';")->result();
                            foreach ($data as $key => $value) {
                            ?>
                                <form action="<?= base_url('Admin/cBahanMasuk/addtocart') ?>" method="POST">
                                    <input type="hidden" name="bb" value="<?= $value->id_bb ?>">
                                    <input type="hidden" name="nama" value="<?= $value->nama_bb ?>">
                                    <input type="hidden" name="qty" value="<?= $value->qty_penawaran ?>">
                                    <input type="hidden" name="harga" value="<?= $value->harga_bb ?>">
                                    <input type="hidden" name="stok" value="<?= $value->stok_supp ?>">
                                    <input type="hidden" name="supplier" value="<?= $value->id_supplier ?>">
                                    <input type="hidden" name="id_penawaran" value="<?= $value->id_penawaran ?>">
                                    <input type="hidden" name="konfirmasi" value="1">
                                    <li>
                                        <a>
                                            <img src="vendors/images/img.jpg" alt="">
                                            <h3 class="clearfix"><?= $value->nama_bb ?> | Supplier <strong><?= $value->nama_supplier ?></strong><span>Jumlah Penawaran : <?= $value->qty_penawaran ?> <?= $value->ket_bb ?></span></h3>
                                            <p class="text-danger"><?= $value->time_penawaran ?></p>

                                        </a>

                                    </li>
                                    <button type="submit" class="btn btn-success">Konfirmasi</button>
                                    <a href="<?= base_url('Admin/cDashboardAdmin/tolak/' . $value->id_penawaran) ?>" class="btn btn-danger">Tolak Penawaran</a>

                                </form>
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