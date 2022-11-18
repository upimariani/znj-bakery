<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form Data Bahan Baku</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Data Bahan Baku</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue">Data Bahan Baku</h4>
                        <p class="mb-30 font-14">Masukkan data bahan baku dengan baik dan benar</p>
                    </div>

                </div>
                <form action="<?= base_url('Supplier/cBahanBaku/createbb') ?>" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nama Bahan Baku</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="nama" type="text" placeholder="Masukkan Nama Bahan Baku" required>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Keterangan Bahan Baku</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="ket" placeholder="Masukkan Keterangan Bahan Baku" type="text" required>
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Harga</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="harga" type="No Telepon" placeholder="Masukkan Harga Bahan Baku" required>
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Stok</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="stok" type="text" placeholder="Masukkan Stok Bahan Baku" required>
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Stok Minimal</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="stok_min" type="text" placeholder="Masukkan Stok Minimal Supplier" required>
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Stok Minimal Gudang</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="stok_min_gudang" type="text" placeholder="Masukkan Stok Minimal Gudang" required>
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>

                </form>

            </div>
            <!-- Input Validation End -->

        </div>
        <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
            JNJ BAKERY - AWIRARANGAN KUNINGAN</a>
        </div>
    </div>
</div>