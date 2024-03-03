<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    
    <?php $this->load->view('layouts/_alert') ?>
    <div class="lg:columns-1  md:columns-6 sm:columns-1 xs:1 gap-2 mb-2" id="printBukti">
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-2">
        <div class="w-full mb-2">
            <h2 class="text-xl font-semibold">List Barang</h2>
        </div>
        <div class="card-body">

    <!-- Filter -->
    <h5 class="d-inline text-dark">Filter ketersediaan&nbsp;&#8594;&nbsp;</h5>
                            <span>
                                <a href="<?= base_url('items/availability/available') ?>" class="bg-green-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-white">Tersedia</a>
                                <a href="<?= base_url('items/availability/empty') ?>" class="bg-red-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-white">Kosong</a>
                            </span>
    </div>
    </div>
    </div>

    <!-- List Menu -->
    <!-- <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"> -->
    <div class="lg:columns-1 md:columns-6 sm:columns-1 xs:1 gap-2 mb-2" id="printBukti">
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-2">
        
        <div class="card-body">    
        <div class="grid grid-cols-4 gap-4 bm-4">
            <?php foreach ($content as $row) : ?>
                <div class="card border-primary w-full mb-4">
                    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $row->nama_barang ?></h3>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Rp.<?= number_format($row->harga, 0, ',', '.') ?>,-</strong></p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kuantitas barang: <?= $row->qty . ' pcs' ?></p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Supplier: <?= $row->nama_supplier ?></p>
                        <div>
                            <div class="col-md-6 mt-2">
                                <form action="<?= base_url('cartin/add') ?>" method="POST">
                                     <input class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" type="hidden" name="id_barang" value="<?= $row->id_barang ?>">
                                    <div class="input-group">
                                        <input type="number" name="qty_masuk" min="1" max="10000" value="1" class="">
                                            <button class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" type="submit">In</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 mt-2">
                                <form action="<?= base_url('cartout/add') ?>" method="POST">
                                    <input class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" type="hidden" name="id_barang" value="<?= $row->id_barang ?>">
                                    <div class="input-group">
                                        <input type="number" name="qty_keluar" min="0" max="<?= $row->qty ?>" value="1" class="">
                                            <button class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" type="submit">Out</button>
                                    </div>
                                </form>
                            </div>
                        </div>         
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
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


