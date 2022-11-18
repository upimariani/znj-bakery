<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form Upload Pembayaran</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Pembayaran Data Pembayaran</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue">Data Pembayaran Admin</h4>
                        <p class="mb-30 font-14">Masukkan data pembayaran dengan baik dan benar</p>
                    </div>

                </div>
                <?php
                //notifikasi form kosong
                echo validation_errors('<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fa fa-exclamation-triangle"></i>', '</h5></div>');

                //notifikasi gagal upload gambar
                if (isset($error_upload)) {
                    echo '<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
                }
                echo form_open_multipart('Admin/cBahanMasuk/bayar/' . $pembayaran->id_transaksi)
                ?>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Bukti Pembayaran</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="file" name="bukti_pembayaran" class="form-control" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Simpan</button>

                <?php echo form_close() ?>

            </div>
            <!-- Input Validation End -->

        </div>
        <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
            JNJ BAKERY - AWIRARANGAN KUNINGAN</a>
        </div>
    </div>
</div>