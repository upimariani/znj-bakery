<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Transaksi Bahan Baku Supplier</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Transaksi Bahan Baku</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <?php
            $total = 0;
            foreach ($this->cart->contents() as $key => $value) {
                $total += $value['qty'];
                if ($total != 0) {
            ?>
                    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                        <div class="clearfix mb-20">
                            <div class="pull-left">
                                <h4 class="text-blue">Informasi Keranjang</h4>
                            </div>

                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Bahan Baku</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($this->cart->contents() as $key => $value) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $value['name'] ?></td>
                                        <td>Rp. <?= number_format($value['price'])  ?></td>
                                        <td><?= $value['qty'] ?></td>
                                        <td><span class="badge badge-primary">Rp. <?= number_format($value['price'] * $value['qty'])  ?></span></td>

                                        <td><a href="<?= base_url('Admin/cBahanMasuk/delete/' . $value['rowid'] . '/' . $supplier) ?>">Hapus</a></td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                        <a class="btn btn-success" href="<?= base_url('Admin/cBahanMasuk/selesai_cart/' . $supplier) ?>">Selesai</a>
                    </div>
            <?php
                }
            }
            ?>
            <!-- basic table  Start -->

            <!-- basic table  End -->
            <!-- Default Basic Forms Start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue">Transaksi Bahan Baku</h4>
                        <p class="mb-30 font-14">Masukkan data Transaksi Bahan Baku dengan baik dan benar</p>
                    </div>
                </div>
                <form action="<?= base_url('Admin/cBahanMasuk/addtocart') ?>" method="POST">
                    <input type="hidden" name="supplier" value="<?= $supplier ?>">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-12 col-md-10">
                            <select id="bahanbaku" name="bb" class="custom-select col-12">
                                <option value="" selected="">Choose...</option>
                                <?php
                                foreach ($bahanbaku as $key => $value) {
                                ?>
                                    <option data-harga="<?= $value->harga_bb ?>" data-stok_supp="<?= $value->stok_supp ?>" data-toko="<?= $value->ket_bb ?>" value="<?= $value->id_bb ?>"><?= $value->nama_bb ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <?= form_error('level_user', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Keterangan Bahan Baku</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="toko form-control" name="nama" placeholder="Nama Bahan Baku" type="text" readonly>
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Stok Tersedia</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="stok_supp form-control" name="stok" type="No Telepon" placeholder="Masukkan Stok Tersedia" readonly>
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Harga Bahan Baku</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="harga form-control" name="harga" type="No Telepon" placeholder="Masukkan Stok Tersedia" readonly>
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Quantity Bahan Baku</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="qty" type="text" placeholder="Masukkan Quantity Bahan Baku">
                            <?= form_error('nama_toko', '<small class="text-danger pl-3">', '</small>'); ?>

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