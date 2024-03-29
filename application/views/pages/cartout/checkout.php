<div class="container-fluid">
    
    <?php $this->load->view('layouts/_alert') ?> 

    <div class="lg:columns-1  md:columns-6 sm:columns-1 xs:1 gap-2 mb-2" id="printBukti"> 
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-2">
        <div class="w-full mb-2">
            <h2 class="text-xl font-semibold">Pemasukan Barang Selesai</h2>
        </div>
        <div class="card-body">
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">Nomor pengeluaran</td>
                            <td class="px-6 py-4">:</td>
                            <td class="px-6 py-4"><?= $barang_keluar->id_barang_keluar ?></td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">NIP Staff</td>
                            <td class="px-6 py-4">:</td>
                            <td class="px-6 py-4"><?= $barang_keluar->id_user ?></td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">Nama Staff</td>
                            <td class="px-6 py-4">:</td>
                            <td class="px-6 py-4"><?= $barang_keluar->nama ?></td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">Waktu</td>
                            <td class="px-6 py-4">:</td>
                            <td class="px-6 py-4"><?= date('d/m/Y H:i:s', strtotime($barang_keluar->waktu)) ?></td>
                        </tr>
                    </table>
                    <p class="text-lg font-medium text-gray-900 dark:text-white">Barang berhasil dikeluarkan & Stoknya berhasil dikurangi</p>
                </div>
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="col" class="px-6 py-3">Barang</th>
                                <th scope="col" class="px-6 py-3">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_barang as $barang) : ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        <strong><?= $barang->nama ?></strong>
                                    </td>
                                    <td class="px-6 py-4"><?= $barang->qty ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="card-footer bg-white">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-2">
                            <a href="<?= base_url('items') ?>" class="text-lg font-medium text-gray-900 dark:text-black"><i class="fas fa-angle-left"></i> List barang</a>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-2">
                            <button class="btn btn-success btn-rounded float-right" onclick="printDiv('printBukti')">Cetak Bukti <i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>