<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                January 2018
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invoice-wrap">
                <div class="invoice-box">
                    <div class="invoice-header">
                        <div class="logo text-center">
                            <img src="vendors/images/deskapp-color-logo.png" alt="">
                        </div>
                    </div>
                    <h4 class="text-center mb-30 weight-600">Laporan Perhari</h4>
                    <div class="row pb-30">
                        <div class="col-md-6">
                            <!-- <h5 class="mb-15">Client Name</h5> -->
                            <p class="font-14 mb-5">Date Issued: <strong class="weight-600"><?= $tanggal ?>/<?= $bulan ?>/<?= $tahun ?></strong></p>
                            <!-- <p class="font-14 mb-5">Invoice No: <strong class="weight-600">4556</strong></p> -->
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="text-right">
                                <p class="font-14 mb-5">Your Name </strong></p>
                                <p class="font-14 mb-5">Your Address</p>
                                <p class="font-14 mb-5">City</p>
                                <p class="font-14 mb-5">Postcode</p>
                            </div>
                        </div> -->
                    </div>
                    <div class="invoice-desc pb-30">
                        <div class="invoice-desc-head clearfix">
                            <div class="invoice-sub">No</div>
                            <div class="invoice-rate">Atas Nama</div>
                            <div class="invoice-hours">Tanggal Transaksi</div>
                            <div class="invoice-subtotal">Total Pembayaran</div>
                        </div>
                        <div class="invoice-desc-body">
                            <?php $no = 1;
                            $grand_total = 0;
                            foreach ($laporan as $key => $value) {
                                $grand_total += $value->total_order;
                            ?>
                                <ul>
                                    <li class="clearfix">
                                        <div class="invoice-sub"><?= $no++ ?></div>
                                        <div class="invoice-rate"><?= $value->nama_user ?></div>
                                        <div class="invoice-hours"><?= $value->tgl_order ?></div>
                                        <div class="invoice-subtotal"><span class="weight-600">Rp <?= number_format($value->total_order) ?></span></div>
                                    </li>
                                </ul>
                            <?php } ?>
                        </div>
                        <div class="invoice-desc-footer">
                            <div class="invoice-desc-head clearfix">
                                <!-- <div class="invoice-sub">Bank Info</div> -->
                                <div class="invoice-rate">Tahun Laporan</div>
                                <div class="invoice-subtotal">Total Transaksi</div>
                            </div>
                            <div class="invoice-desc-body">
                                <ul>
                                    <li class="clearfix">
                                        <!-- <div class="invoice-sub">
                                            <p class="font-14 mb-5">Account No: <strong class="weight-600">123 456 789</strong></p>
                                            <p class="font-14 mb-5">Code: <strong class="weight-600">4556</strong></p>
                                        </div> -->
                                        <div class="invoice-rate font-20 weight-600"><?= $tahun ?></div>
                                        <div class="invoice-subtotal"><span class="weight-600 font-24 text-danger">Rp. <?= number_format($grand_total, 0) ?></span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center pb-20">Thank You!!</h4>
                </div>
            </div>
        </div>
    </div>
</div>