<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    
    <?php $this->load->view('layouts/_alert') ?>
    <div class="lg:columns-1  md:columns-6 sm:columns-1 xs:1 gap-2 mb-2" id="printBukti">
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-2">
        <div class="w-full mb-2">
            <h2 class="text-xl font-semibold">List Pengeluaran Barang</h2>
        </div>
        <div class="card-body">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID Pengeluaran</th>
                                    <th scope="col" class="px-6 py-3">Nama Staff</th>
                                    <th scope="col" class="px-6 py-3">Waktu Pengeluaran</th>
                                    <th scope="col" class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($content as $row) : ?>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4"><?= $row->id ?></td>
                                        <td class="px-6 py-4"><?= $row->nama ?></td>
                                        <td class="px-6 py-4"><?= date('d-m-Y H:i:s', strtotime($row->waktu)) ?></td>
                                        <td class="px-6 py-4">
                                            <a href="<?= base_url("outputs/detail/$row->id") ?>" class="btn btn-primary btn-rounded"><i data-feather="shopping-cart"></i>&nbsp;&nbsp;Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php if ($this->uri->segment(2)) : ?>
                    <div class="card-footer bg-white">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-2">
                                <a href="<?= base_url('outputs') ?>" class="btn btn-primary btn-rounded text-white"><i class="fas fa-angle-left"></i> List Pengeluaran</a>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-2 d-flex justify-content-center">
                                <div class="row d-flex justify-content-center">
                                    <nav aria-label="Page navigation example">
                                        <?= $pagination ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="row d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <?= $pagination ?>
                        </nav>
                    </div>
                <?php endif ?>
            </div>
        </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->