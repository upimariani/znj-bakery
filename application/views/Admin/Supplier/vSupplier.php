<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Informasi Supplier</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Supplier</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a href="<?= base_url('Admin/cSupplier/createsupplier') ?>" class="btn btn-primary">
                                Tambah Supplier
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
                                <th class="table-plus datatable-nosort">Nama User</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>Nama Toko</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($supplier as $key => $value) {
                            ?>
                                <tr>
                                    <td class="table-plus"><?= $value->nama_supplier ?></td>
                                    <td><?= $value->no_hp_supplier ?></td>
                                    <td><?= $value->alamat_supplier ?></td>
                                    <td><?= $value->nama_toko ?></td>
                                    <td><?= $value->username_supplier ?></td>
                                    <td><?= $value->password_supplier ?></td>
                                    <td>

                                        <div class="dropdown">
                                            <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="<?= base_url('Admin/cSupplier/edit/' . $value->id_supplier) ?>"><i class="fa fa-pencil"></i> Edit</a>
                                                <a class="dropdown-item" href="<?= base_url('Admin/cSupplier/delete/' . $value->id_supplier) ?>"><i class="fa fa-trash"></i> Delete</a>
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