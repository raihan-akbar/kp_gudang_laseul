<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    
    <?php $this->load->view('layouts/_alert') ?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="text-lg font-medium text-gray-900 dark:text-black">List Pemasukan Barang</h4>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID Pemasukan</th>
                                    <th scope="col" class="px-6 py-3">Nama Staff</th>
                                    <th scope="col" class="px-6 py-3">Waktu Pemasukan</th>
                                    <th scope="col" class="px-6 py-3">Total Harga</th>
                                    <th scope="col" class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($content as $row) : ?>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4"><?= $row->id ?></td>
                                        <td class="px-6 py-4"><?= $row->nama ?></td>
                                        <td class="px-6 py-4"><?= date('d-m-Y H:i:s', strtotime($row->waktu)) ?></td>
                                        <td class="px-6 py-4">Rp.<?= number_format($row->total_harga, 0, ',', '.') ?>,-</td>
                                        <td class="px-6 py-4">
                                            <a href="<?= base_url("inputs/detail/$row->id") ?>" class="btn btn-primary btn-rounded"><i data-feather="shopping-cart"></i>&nbsp;&nbsp;Detail</a>
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
                                <a href="<?= base_url('inputs') ?>" class="btn btn-primary btn-rounded text-white"><i class="fas fa-angle-left"></i> List Pemasukan</a>
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
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->