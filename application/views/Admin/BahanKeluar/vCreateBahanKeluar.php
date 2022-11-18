<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form Data Bahan Baku Keluar</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Data Bahan Baku Keluar</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue">Data Bahan Keluar</h4>
                        <p class="mb-30 font-14">Masukkan data bahan baku keluar dengan baik dan benar</p>
                    </div>

                </div>
                <form action="<?= base_url('Admin/cBahanKeluar/create') ?>" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nama Bahan Baku</label>
                        <div class="col-sm-12 col-md-10">
                            <select id="bb" name="bahanbaku" class="form-control" required>
                                <option>--Pilih Bahan Baku Keluar---</option>
                                <?php
                                foreach ($bb as $key => $value) {
                                ?>
                                    <option data-sisa="<?= $value->sisa_stok ?>" data-tgl="<?= $value->tgl_order ?>" value="<?= $value->id_bb_masuk ?>">Tgl.masuk <?= $value->tgl_order ?> | <?= $value->nama_bb ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="tgl form-control" name="alamat" placeholder="Tanggal Masuk" type="text" readonly>
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Quantity Sebelumnya</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="sisa form-control" name="qty_sebelumnya" type="text" placeholder="Quantity Sebelumnnya" readonly>
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Tanggal Keluar</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="date" type="date" placeholder="Masukkan Nama Toko" required>
                            <?= form_error('nama_toko', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Quantity Keluar</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="qty_keluar" type="number" placeholder="Masukkan Quantity Keluar" required>
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>

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