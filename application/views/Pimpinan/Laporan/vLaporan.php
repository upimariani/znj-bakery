<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Laporan Transaksi</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Laporan Transaksi</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="row">
                <!-- Bootstrap Switchery Start -->
                <div class="col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 bg-white border-radius-4 box-shadow height-100-p">
                        <div class="clearfix mb-30">
                            <div class="pull-left">
                                <h4 class="text-blue">Laporan Perhari</h4>
                            </div>
                        </div>
                        <?php
                        echo form_open('Pimpinan/cLaporan/lap_harian') ?>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <select name="tanggal" class="form-control">
                                        <?php
                                        $mulai = 1;
                                        for ($i = $mulai; $i < $mulai + 31; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Bulan</label>
                                    <select name="bulan" class="form-control">
                                        <?php
                                        $mulai = 1;
                                        for ($i = $mulai; $i < $mulai + 12; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <select name="tahun" class="form-control">
                                        <?php
                                        $mulai = date('Y') - 1;
                                        for ($i = $mulai; $i < $mulai + 10; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-light btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
                                </div>
                            </div>
                        </div>
                        <?php
                        echo form_close() ?>
                    </div>
                </div>
                <!-- Bootstrap Switchery End -->
                <!-- Bootstrap Tags Input Start -->
                <div class="col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 bg-white border-radius-4 box-shadow height-100-p">
                        <div class="clearfix mb-30">
                            <div class="pull-left">
                                <h4 class="text-blue">Laporan Perbulan</h4>
                            </div>
                        </div>
                        <?php
                        echo form_open('Pimpinan/cLaporan/lap_bulanan') ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Bulan</label>
                                    <select name="bulan" class="form-control">
                                        <?php
                                        $mulai = 1;
                                        for ($i = $mulai; $i < $mulai + 12; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <select name="tahun" class="form-control">
                                        <?php
                                        $mulai = date('Y') - 1;
                                        for ($i = $mulai; $i < $mulai + 10; $i++) {
                                            $sel = $i == date('Y') ? 'selected="selected"' : '';
                                            echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-light btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
                                </div>
                            </div>
                        </div>
                        <?php
                        echo form_close() ?>
                    </div>
                </div>
                <!-- Bootstrap Tags Input End -->
            </div>
            <!-- Bootstrap TouchSpin Start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow height-100-p mb-30">
                <div class="clearfix mb-30">
                    <div class="pull-left">
                        <h4 class="text-blue">laporan Pertahun</h4>
                    </div>
                </div>
                <?php
                echo form_open('Pimpinan/cLaporan/lap_tahunan') ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Tahun</label>
                            <select name="tahun" class="form-control">
                                <?php
                                $mulai = date('Y') - 1;
                                for ($i = $mulai; $i < $mulai + 10; $i++) {
                                    $sel = $i == date('Y') ? 'selected="selected"' : '';
                                    echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
                        </div>
                    </div>
                </div>
                <?php
                echo form_close() ?>
            </div>
            <!-- Bootstrap TouchSpin End -->

        </div>
        <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
            JNJ BAKERY - AWIRARANGAN KUNINGAN</a>
        </div>
    </div>
</div>