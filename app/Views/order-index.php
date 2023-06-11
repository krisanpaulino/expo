<?= $this->extend('layout_user'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-4">Data Order Tiket</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                    <thead>
                        <tr role="row">
                            <th>ID</th>
                            <th>TglOrder</th>
                            <th>JumlahOrder</th>
                            <th>NoHP</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order) : ?>
                            <tr>
                                <td><?= $order->order_id ?></td>
                                <td><?= $order->order_tgl ?></td>
                                <td><?= $order->jumlah ?></td>
                                <td><?= $order->order_hp ?></td>
                                <td><?= $order->order_status ?></td>
                                <td>
                                    <a href="<?= base_url('order/' . $order->order_id) ?>" class="badge bg-info">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?= $this->endSection() ?>;