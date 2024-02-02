<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    
    <?php $this->load->view('layouts/_alert') ?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    Keranjang Penambahan Barang
                </div>
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Barang</th>
                                <th scope="col" class="px-6 py-3">Harga</th>
                                <th scope="col" class="px-6 py-3">Jumlah</th>
                                <th scope="col" class="px-6 py-3">Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($content as $row) : ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        <strong><?= $row->nama ?></strong>
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp.<?= number_format($row->harga, 0, ',', '.') ?>,- /pcs
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="<?= base_url('cartin/update') ?>" method="POST">
                                            <input type="hidden" name="id" value="<?= $row->id ?>">
                                            <input type="hidden" name="id_barang" value="<?= $row->id_barang ?>">
                                            <div class="input-group">
                                                <input type="number" name="qty_barang_masuk" class="form-control text-center" value="<?= $row->qty_barang_masuk ?>">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-info"><i class="fas fa-check"></i></button>
                                                </div>
                                            </div>
                                            <small class="text-danger mt-1"><?= $this->session->flashdata("qty_cartin_$row->id") ?></small>
                                        </form>
                                    </td>
                                    <td class="px-6 py-4">Rp.<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
                                    <td class="px-6 py-4">
                                        <form action="<?= base_url('cartin/delete') ?>" method="POST">
                                            <input type="hidden" name="id" value="<?= $row->id ?>">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            <tr>
                                <td class="px-6 py-4"><strong>Total:</strong></td>
                                <td class="px-6 py-4"><strong>Rp.<?= number_format(array_sum(array_column($content, 'subtotal')), 0, ',', '.') ?>,-</strong></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-white">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 mb-2">
                            <a href="<?= base_url('items') ?>" class="btn btn-warning btn-rounded text-white"><i class="fas fa-angle-left"></i> List barang</a>
                        </div>
                        <div class="col-md-4 col-sm-12 mb-2 d-flex justify-content-center">
                            <form action="<?= base_url('cartin/drop') ?>" method="POST">
                                <input type="hidden" name="id_pesanan" value="">
                                <button type="submit" class="btn btn-danger btn-rounded text-white"><i class="fas fa-trash"></i> Kosongkan keranjang</button>
                            </form>
                        </div>
                        <div class="col-md-4 col-sm-12 mb-2">
                            <a href="<?= base_url('cartin/checkout') ?>" class="btn btn-success btn-rounded float-right">Checkout <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->


