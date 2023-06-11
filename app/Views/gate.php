<?= $this->extend('layout_user'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-4">Cari Tiket</h4>
                <form action="<?= base_url('gate') ?>" method="get">
                    <div class="form-group mb-4">
                        <label for="kode">Kode Tiket</label>
                        <input type="text" class="form-control <?= (isset(session('errors')['kode'])) ? 'is-invalid' : '' ?>" id="kode" name="kode" value="<?= old('kode', $kode) ?>">
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['kode'])) : ?>
                                <?= session('errors')['kode'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            <i class="ri-search-line align-middle me-2"></i> Cari
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?php if ($tiket != null) : ?>
    <div class="row">
        <div class="col-lg-6 col-md-8">
            <div class="card">
                <div class="card-body">

                    <h4 class="mb-4">Check In</h4>
                    <table class="table table-bodered mb-2">
                        <tr>
                            <td><b>Nomor HP</b></td>
                            <td><?= $tiket->order_hp ?></td>
                        </tr>
                        <tr>
                            <td><b>Tanggal Order</b></td>
                            <td><?= $tiket->order_tgl ?></td>
                        </tr>
                        <tr>
                            <td><b>Kode Tiket</b></td>
                            <td><?= $tiket->tiket_kode ?></td>
                        </tr>
                        <tr>
                            <td><b>Status Check In</b></td>
                            <td><?= $tiket->tiket_gate ?></td>
                        </tr>
                    </table>
                    <?php if ($tiket->tiket_gate == 0) : ?>
                        <form action="<?= base_url('checkin') ?>" method="post">
                            <input type="hidden" name="tiket_id" value="<?= $tiket->tiket_id ?>">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    <i class=" ri-check-line align-middle me-2"></i> Check In
                                </button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
<?php elseif ($kode != null) : ?>
    <div class="row">
        <div class="col-lg-6 col-md-8">
            <div class="card">
                <div class="card-body">

                    <h4 class="mb-4">Tidak Ditemukan.</h4>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
<?php endif; ?>

<?= $this->endSection() ?>;