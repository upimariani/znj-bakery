<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Informasi Transaksi Bahan Baku</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Transaksi Bahan Baku</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">

                    </div>
                </div>
                <?php if ($this->session->userdata('success')) {
                ?>
                    <div class="alert alert-success alert-dismissible mt-3">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon-copy fa fa-check" aria-hidden="true"></i> Alert!</h5>
                        <?= $this->session->userdata('success') ?>
                    </div>
                <?php
                } ?>
            </div>
            <!-- Simple Datatable start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix mb-20">

                </div>
                <div class="row">
                    <table class="data-table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Tanggal Order</th>
                                <th>Atas Nama</th>
                                <th>Total Bayar</th>
                                <th>Status Pemesanan</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($transaksi as $key => $value) {
                            ?>
                                <tr>
                                    <td class="table-plus"><?= $value->tgl_order ?></td>
                                    <td><?= $value->nama_user ?></td>
                                    <td>Rp. <?= number_format($value->total_order) ?></td>
                                    <td><?php if ($value->status_order == 0) { ?>
                                            <span class="badge badge-danger">Belum Melakukan Pembayaran</span>
                                        <?php } elseif ($value->status_order == 1) { ?>
                                            <span class="badge badge-warning">Pembayaran Telah DIlakukan</span>
                                        <?php } elseif ($value->status_order == 2) { ?>
                                            <span class="badge badge-success">Pesanan Sudah DiVerifikasi</span>
                                        <?php } ?>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <?php if ($value->status_order == 1) { ?>
                                                    <a href=" <?= base_url('Supplier/cTransaksiBB/update/' . $value->id_transaksi) ?>" class="dropdown-item">Verifikasi</a>
                                                <?php } elseif ($value->status_order == 0) { ?>
                                                    <span class="badge badge-danger">Belum Melakukan Pembayaran</span>
                                                <?php } elseif ($value->status_order == 2) { ?>
                                                    <span class="badge badge-success">Pesanan Sudah DiVerifikasi</span>
                                                <?php } ?>
                                                <!-- <a class="dropdown-item" href="<?= base_url('Supplier/cTransaksiBB/update/' . $value->id_transaksi) ?>"><i class="fa fa-pencil"></i> Edit</a> -->
                                                <!-- <a class="dropdown-item" href="<?= base_url('Supplier/cBahanBaku/delete/' . $value->id_bb) ?>"><i class="fa fa-trash"></i> Delete</a> -->
                                                <!-- <input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Verifikasi"> -->
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
            JNJ BAKERY - AWIRARANGAN KUNINGAN</a>
        </div>
    </div>
</div>