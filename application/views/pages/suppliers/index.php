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
                        <h4 class="text-lg font-medium text-gray-900 dark:text-black">List Supplier</h4>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Nama</th>
                                    <th scope="col" class="px-6 py-3">Email</th>
                                    <th scope="col" class="px-6 py-3">Telefon</th>
                                    <th scope="col" class="px-6 py-3">Alamat</th>
                                    <th scope="col" class="px-6 py-3">Status Supplier</th>
                                    <!-- Hanya admin yang boleh edit -->
                                    <?php if ($this->session->userdata('role') == 'admin') : ?>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center"></th>
                                    <?php endif ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($content as $row) : ?>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4"><?= $row->nama ?></td>
                                        <td class="px-6 py-4"><?= $row->email ?></td>
                                        <td class="px-6 py-4"><?= $row->telefon ?></td>
                                        <td class="px-6 py-4"><?= $row->alamat ?></td>
                                        <td class="px-6 py-4">
                                            <?php if ($row->status == 'aktif') : ?>
                                                <i class="fa fa-circle text-success font-12" data-toggle="tooltip" data-placement="top" title="Aktif"></i>
                                            <?php else : ?>
                                                <i class="fa fa-circle text-danger font-12" data-toggle="tooltip" data-placement="top" title="Non-Aktif"></i>
                                            <?php endif ?>
                                        </td>
                                        
                                        <!-- Hanya admin yang boleh melakukan aksi pada data -->
                                        <?php if ($this->session->userdata('role') == 'admin') : ?>
                                            <td class="border-top-0 text-center text-muted px-2 py-4">
                                                <a href="<?= base_url("suppliers/edit/$row->id") ?>" class="btn btn-sm">
                                                    <i class="fas fa-edit text-info"></i>
                                                </a>
                                            </td>
                                        <?php endif ?>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php if ($this->uri->segment(2) == 'search') : ?>
                    <div class="card-footer bg-white">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-2">
                                <a href="<?= base_url('suppliers') ?>" class="btn btn-primary btn-rounded text-white"><i class="fas fa-angle-left"></i> Daftar Supplier</a>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-2 d-flex justify-content-center">
                                <div class="flex">
                                    <nav aria-label="Page navigation example">
                                        <?= $pagination ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="flex">
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