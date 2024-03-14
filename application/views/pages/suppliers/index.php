<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid"> 
    
    <?php $this->load->view('layouts/_alert') ?>
    <div class="lg:columns-1  md:columns-6 sm:columns-1 xs:1 gap-2 mb-2" id="printBukti">
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-2">
        <div class="w-full mb-2">
            <h2 class="text-xl font-semibold">List Supplier</h2>
        </div>
        <div class="card-body">
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
                                        <td class="px-6 py-4">
                                            <?= $row->email ?> 
                                            <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="javascript:void(0);" onclick="openEmailCompose('<?= $row->email ?>')">Kirim Email
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?php
                                                $nomorTelepon = $row->telefon;

                                                // Tambahkan kode negara jika nomor telepon dimulai dengan "08..."
                                                if (strpos($nomorTelepon, '08') === 0) {
                                                    $nomorTelepon = '+62' . substr($nomorTelepon, 1);
                                                }
                                            ?>
                                            <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="whatsapp://send?phone=<?= $nomorTelepon ?>"><?= $nomorTelepon ?></a>
                                            
                                        </td>
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
                                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                                    </svg>
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
<script>
function openEmailCompose(email) {
    var subject = encodeURIComponent("Permintaan Stok Barang");
    var body = encodeURIComponent("Selamat Siang/Sore\nKami dari bagian Gudang La Seul Plus Skincare.\nNama Barang :\nStok Barang yang diminta :");

    window.location.href = "mailto:" + email + "?subject=" + subject + "&body=" + body;
}
</script>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->