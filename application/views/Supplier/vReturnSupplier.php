<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Informasi Return Barang</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Return</li>
                            </ol>
                        </nav>
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
                                <th>Tanggal Retur</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Masuk Barang</th>
                                <th>Alasan Return</th>
                                <th>Qty Return</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($return as $key => $value) {
                            ?>
                                <tr>
                                    <td class="table-plus"><?= $no++ ?></td>
                                    <td><?= $value->tgl_retur ?></td>
                                    <td><?= $value->nama_bb ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td><?= $value->alasan_retur ?></td>
                                    <td><?= $value->qty_retur ?></td>

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


<form action="<?= base_url('Admin/cReturn/retur_bb') ?>" method="POST">
    <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Return Barang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>Silahkan pilih barang yang akan dilakukan return atau pengembalian</p>
                    <div class="col-sm-12 col-md-10">
                        <select name="barang" id="retur" class="custom-select col-12" required>
                            <option value="" selected="">Choose...</option>
                            <?php
                            foreach ($bb_masuk as $key => $value) {
                            ?>
                                <option data-stok="<?= $value->sisa_stok ?>" value="<?= $value->id_bb_masuk ?>"><?= $value->nama_bb ?> | Tgl. <?= $value->tgl_order ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-10 mt-3">
                        <label>Stok</label>
                        <input type="text" name="stok" class="stok form-control" readonly>
                    </div>
                    <div class="col-sm-12 col-md-10 mt-3">
                        <label>Quantity Return</label>
                        <input type="text" name="retur" class="form-control" required>
                    </div>
                    <div class="col-sm-12 col-md-10 mt-3">
                        <label>Alasan Return</label>
                        <input type="text" name="alasan" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">OK</button>
                </div>
            </div>
        </div>
    </div>
</form>