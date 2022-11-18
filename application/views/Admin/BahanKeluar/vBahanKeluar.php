<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Informasi Bahan Keluar</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bahan Keluar</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a href="<?= base_url('Admin/cBahanKeluar/createBahanKeluar') ?>" class="btn btn-primary">
                                Tambah Bahan Keluar
                            </a>

                        </div>
                    </div>
                </div>
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
                                <th>Tanggal Bahan Keluar</th>
                                <th>Tanggal Bahan Masuk</th>
                                <th>Nama Bahan Baku</th>
                                <th>Quantity Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($bb_keluar as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->tgl_keluar ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td><?= $value->nama_bb ?></td>
                                    <td><?= $value->qty_keluar ?></td>

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