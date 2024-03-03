<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    
    <?php $this->load->view('layouts/_alert') ?>
    <div class="lg:columns-1  md:columns-6 sm:columns-1 xs:1 gap-2 mb-2" id="printBukti">
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-2">
        <div class="w-full mb-2">
            <h2 class="text-xl font-semibold">Keranjang Penambahan Barang</h2>
        </div>
        <div class="card-body">
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
                <br>
                        <div class="col-md-4 col-sm-12 mb-2">
                            <form action="<?= base_url('cartin/drop') ?>" method="POST">
                                <input type="hidden" name="id_pesanan" value="">
                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                              </svg>Kosongkan keranjang
                                </button>
                            </form>
                            <button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"><a href="<?= base_url('cartin/checkout') ?>">Checkout</a></button>
                            
                        </div>
                  
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->


