<?= $this->extend('layout_user'); ?>
<?= $this->section('content'); ?>
<div class="row d-flex justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-4"><?= $title ?></h4>
                <div class="row">
                    <div class="col-md-4">
                        <table class="table">
                            <tr>
                                <th style="width: 10%;">Order ID</th>
                                <td><?= $order->order_id ?></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td><?= $order->order_nama ?></td>
                            </tr>
                            <tr>
                                <th>No HP</th>
                                <td><a href="http://wa.me/62<?= $order->order_hp ?>" target="_blank" rel="noopener noreferrer">0<?= $order->order_hp ?></a></td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-md-2">
                        <h5>Kode Tiket</h5>

                        <div class="code-box">
                            <pre id="code"><?php foreach ($tiket as $t) : ?><?= $t->tiket_kode ?><br><?php endforeach; ?></pre>
                            <button id="copy-button" style="display: block; margin: 10px auto;">Copy to Clipboard</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div>

<?= $this->endSection() ?>;