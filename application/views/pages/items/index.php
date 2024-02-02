<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    
    <?php $this->load->view('layouts/_alert') ?>
    
    <!-- Filter -->
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="d-inline text-dark">Filter ketersediaan&nbsp;&#8594;&nbsp;</h5>
                            <span>
                                <a href="<?= base_url('items/availability/available') ?>" class="btn btn-rounded btn-success mt-1 mb-1">Tersedia</a>
                                <a href="<?= base_url('items/availability/empty') ?>" class="btn btn-rounded btn-danger mt-1 mb-1">Kosong</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- List Menu -->
    <!-- <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"> -->
        
        <div class="lg:columns-4 md:columns-2 sm:columns-1 gap-4 mb-4 w-full mb-4">
            <?php foreach ($content as $row) : ?>
                <div class="card border-primary w-full mb-4">
                    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $row->nama_barang ?></h3>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Rp.<?= number_format($row->harga, 0, ',', '.') ?>,-</strong></p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kuantitas barang: <?= $row->qty . ' pcs' ?></p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Supplier: <?= $row->nama_supplier ?></p>
                        <div>
                            <div class="mb-5">
                                <form action="<?= base_url('cartin/add') ?>" method="POST">
                                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="hidden" name="id_barang" value="<?= $row->id_barang ?>">
                                    <div class="relative">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                                              </svg>
                                        </div>
                                        <input type="number" name="qty_masuk" min="1" value="1" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">In</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 mt-2">
                                <form action="<?= base_url('cartout/add') ?>" method="POST">
                                    <input class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" type="hidden" name="id_barang" value="<?= $row->id_barang ?>">
                                    <div class="input-group">
                                        <input type="number" name="qty_keluar" min="0" max="<?= $row->qty ?>" value="1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                                        <div class="input-group-append">
                                            <button class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" type="submit">Out</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>         
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    <div class="row d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <?= $pagination ?>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->


