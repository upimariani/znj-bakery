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
                                <li class="breadcrumb-item active" aria-current="page">Transaksi Bahan Masuk</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a href="<?= base_url('Admin/cBahanMasuk/createtransaksi') ?>" class="btn btn-primary">
                                Transaksi Bahan Baku
                            </a>
                        </div>
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
                                <th class="table-plus datatable-nosort">No</th>
                                <th>Tanggal Order</th>
                                <th>Total Bayar</th>
                                <th>Nama Supplier</th>
                                <th>Status Pemesanan</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($barang_masuk as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td>Rp. <?= number_format($value->total_order)  ?></td>
                                    <td><?= $value->nama_supplier ?></td>
                                    <td> <?php if ($value->status_order == 1) { ?>
                                            <span class="badge badge-warning">Menunggu Verifikasi</span>
                                        <?php } elseif ($value->status_order == 2) { ?>
                                            <span class="badge badge-success">Pesanan Sudah DiVerifikasi</span>
                                        <?php } else {
                                        ?>
                                            <span class="badge badge-danger">Pesanan Belum Bayar</span>
                                        <?php

                                            } ?>
                                    </td>
                                    <td>

                                        <div class="dropdown">
                                            <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <?php if ($value->status_order == 0) { ?>
                                                    <a class="dropdown-item" href="<?= base_url('Admin/cBahanMasuk/bayar/' . $value->id_transaksi) ?>"><i class="fa fa-pencil"></i> Bayar</a>
                                                <?php } elseif ($value->status_order == 1) { ?>
                                                    <span class="badge badge-warning">Menunggu Verifikasi</span>
                                                <?php } elseif ($value->status_order == 2) { ?>
                                                    <span class="badge badge-success">Pesanan Sudah DiVerifikasi</span>
                                                <?php } ?>

                                                <!-- <a class="dropdown-item" href="<?= base_url('Admin/cSupplier/delete/') ?>"><i class="fa fa-trash"></i> Delete</a> -->
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>

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

<form action="<?= base_url('Admin/cBahanMasuk/createtransaksi') ?>" method="POST">
    <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Transaksi Supplier</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>Silahkan Untuk Memilih Supplier Untuk melakukan Transaksi</p>
                    <div class="col-sm-12 col-md-10">
                        <select name="supplier" class="custom-select col-12" required>
                            <option value="" selected="">Choose...</option>
                            <?php
                            foreach ($supplier as $key => $value) {
                            ?>
                                <option value="<?= $value->id_supplier ?>"><?= $value->nama_supplier ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">OK</button>
                </div>
            </div>
        </div>
    </div>
</form>