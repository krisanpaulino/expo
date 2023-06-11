<?= $this->extend('layout_user'); ?>
<?= $this->section('content'); ?>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-4"><?= $title ?></h4>
                <form action="<?= base_url('order') ?>" method="post">
                    <div class="form-group mb-4">
                        <label for="order_nama">Nama</label>
                        <input type="text" class="form-control <?= (isset(session('errors')['order_nama'])) ? 'is-invalid' : '' ?>" id="order_nama" name="order_nama" value="<?= old('order_nama') ?>">
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['order_nama'])) : ?>
                                <?= session('errors')['order_nama'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="order_hp">Nomor HP</label>
                        <input type="text" class="form-control <?= (isset(session('errors')['order_hp'])) ? 'is-invalid' : '' ?>" id="order_hp" name="order_hp" value="<?= old('order_hp') ?>">
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['order_hp'])) : ?>
                                <?= session('errors')['order_hp'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="jumlah">Jumlah Tiket</label>
                        <input type="number" class="form-control <?= (isset(session('errors')['jumlah'])) ? 'is-invalid' : '' ?>" id="jumlah" name="jumlah" value="<?= old('jumlah') ?>" required>
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['jumlah'])) : ?>
                                <?= session('errors')['jumlah'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?php if (isset(session('errors')['order_status'])) : ?>
                            <?= session('errors')['order_status'] ?>
                        <?php endif; ?>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order_status" id="order_status1" value="lunas">
                        <label class="form-check-label" for="order_status1">
                            Langsung Bayar
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="order_status" id="order_status2" value="belum bayar">
                        <label class="form-check-label" for="order_status2">
                            Belum Bayar
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning waves-effect waves-light">
                            <i class="ri-shopping-bag-3-line align-middle me-2"></i> Pesan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div>

<?= $this->endSection() ?>;