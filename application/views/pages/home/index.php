
<div class="">
<?php $this->load->view('layouts/_alert') ?>
<div class="lg:columns-4 md:columns-1 sm:columns-1 xs:1 gap-4">
    <div class="relative bg-gray-600 pt-5 px-2 pb-4 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden mb-2 align-items-center">
        <dt>
            <div class="absolute bg-indigo-500 rounded-md p-3">
                <!-- Heroicon name: outline/users -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <p class="ml-16 text-sm font-medium text-gray-100 truncate">Jumlah Staff</p>
        </dt>
        <dd class="ml-16 pb-26 flex items-baseline sm:pb-2">
            <p class="text-2xl font-semibold text-gray-50"><?=getJumlahStaff();?></p>
            <p class="ml-2 flex items-baseline text-sm font-semibold text-gray-100">
                <!-- Heroicon name: solid/arrow-sm-up -->
                Orang
            </p>
        </dd>
    </div>
</div>


    <div class="row">
        <div class="col-md-12">
        <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?= getJumlahStaff(); ?></h2>
                                    </div>
                                    <a href="<?= base_url('users') ?>" class="btn"><h4 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Staff</h4></a>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?= getJumlahBarang(); ?></h2>
                                    </div>
                                    <a href="<?= base_url('items') ?>" class="btn"><h4 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Barang</h4></a>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i class="fas fa-boxes"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium"><?= getJumlahSupplier(); ?></h2>
                                        </div>
                                        <a href="<?= base_url('suppliers') ?>" class="btn"><h4 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Supplier</h4></a>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i class="fas fa-users"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?= getJumlahStok(); ?></h2>
                                    </div>
                                    <a href="<?= base_url('items') ?>" class="btn"><h4 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Stok</h4></a>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i class="fas fa-box"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Aktivitas Terakhir Pemasukan Barang</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">ID Pemasukan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Nama Staff</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Waktu Pemasukan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($barang_masuk as $row) : ?>
                                    <tr>
                                        <td class="border-top-0 px-2 py-4 font-weight-medium"><?= $row->id ?></td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14"><?= $row->nama ?></td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center"><?= date('d-m-Y H:i:s', strtotime($row->waktu)) ?></td>
                                        <td class="border-top-0 text-center text-muted px-2 py-4">
                                            <a href="<?= base_url("inputs/detail/$row->id") ?>" class="btn btn-primary btn-rounded"><i data-feather="shopping-cart"></i>&nbsp;&nbsp;Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Aktivitas Terakhir Pengeluaran Barang</h4>
                    </div>
                    <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">ID Pemasukan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Nama Staff</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2 text-center">Waktu Pemasukan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($barang_keluar as $row) : ?>
                                    <tr>
                                        <td class="border-top-0 px-2 py-4 font-weight-medium"><?= $row->id ?></td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14"><?= $row->nama ?></td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14 text-center"><?= date('d-m-Y H:i:s', strtotime($row->waktu)) ?></td>
                                        <td class="border-top-0 text-center text-muted px-2 py-4">
                                            <a href="<?= base_url("outputs/detail/$row->id") ?>" class="btn btn-primary btn-rounded"><i data-feather="shopping-cart"></i>&nbsp;&nbsp;Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->