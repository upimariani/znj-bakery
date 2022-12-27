<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Informasi Bahan Masuk</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bahan Masuk</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix mb-20">

                </div>
                <div class="row">
                    <!-- basic table  Start -->
                    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                        <div class="clearfix mb-20">
                            <div class="pull-left">
                                <h4 class="text-blue">Informasi Bahan Masuk</h4>
                                <button class="btn btn-success mt-3" onclick="window.print()">Cetak</button>
                            </div>

                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal Masuk</th>
                                    <th scope="col">Nama Bahan Baku</th>
                                    <th scope="col">Quantity Masuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($bb_masuk as $key => $value) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $value->tgl_order ?></td>
                                        <td><?= $value->nama_bb ?></td>
                                        <td><?= $value->qty_masuk ?></td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- basic table  End -->
                </div>
            </div>
        </div>
        <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
            JNJ BAKERY - AWIRARANGAN KUNINGAN</a>
        </div>
    </div>
</div>