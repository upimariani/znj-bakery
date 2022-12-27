<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">

        <div class="row clearfix">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
                    <h4 class="mb-20">Informasi Stok Bahan Baku Gudang</h4>
                    <div class="notification-list mx-h-450 customscroll">
                        <ul>
                            <?php
                            foreach ($stok_bb as $key => $value) {
                            ?>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="">
                                        <h3 class="clearfix"><?= $value->nama_bb ?> | Tgl.Masuk <strong><?= $value->tgl_order ?></strong><span><?= $value->sisa_stok ?></span></h3>
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
        <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
            JNJ BAKERY - AWIRARANGAN KUNINGAN</a>
        </div>
    </div>
</div>