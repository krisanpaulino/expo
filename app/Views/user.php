<?= $this->extend('layout_user'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-4">Data User</h4>
                <div class="mb-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Tambah User
                    </button>
                </div>
                <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                    <thead>
                        <tr role="row">
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Tipe</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $user->nama_lengkap ?></td>
                                <td><?= $user->username ?></td>
                                <td><?= $user->type ?></td>
                                <td>
                                    <form action="<?= base_url('delete-user') ?>" method="post">
                                        <input type="hidden" name="user_id" value="<?= $user->user_id ?>">
                                        <button type="submit" class="badge bg-danger border" onclick="return confirm('Yakin ?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<form action="<?= base_url('create-user') ?>" method="post">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-4">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control <?= (isset(session('errors')['nama_lengkap'])) ? 'is-invalid' : '' ?>" id="nama_lengkap" name="nama_lengkap" value="<?= old('nama_lengkap') ?>">
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['nama_lengkap'])) : ?>
                                <?= session('errors')['nama_lengkap'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="username">Username</label>
                        <input type="text" class="form-control <?= (isset(session('errors')['username'])) ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= old('username') ?>">
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['username'])) : ?>
                                <?= session('errors')['username'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Tipe User</label>
                        <select name="type" id="" class="form-select">
                            <option value="operator">Operator/Agen</option>
                            <option value="admin">Admin</option>
                        </select>
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['type'])) : ?>
                                <?= session('errors')['type'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control <?= (isset(session('errors')['password'])) ? 'is-invalid' : '' ?>" id="password" name="password" value="<?= old('password') ?>">
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['password'])) : ?>
                                <?= session('errors')['password'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" class="form-control <?= (isset(session('errors')['password_confirmation'])) ? 'is-invalid' : '' ?>" id="password_confirmation" name="password_confirmation" value="<?= old('password_confirmation') ?>">
                        <div class="invalid-feedback">
                            <?php if (isset(session('errors')['password_confirmation'])) : ?>
                                <?= session('errors')['password_confirmation'] ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection() ?>;