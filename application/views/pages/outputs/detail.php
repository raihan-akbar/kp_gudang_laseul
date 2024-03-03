<div class="container-fluid"> 
    
    <?php $this->load->view('layouts/_alert') ?>
    <div class="lg:columns-1 md:columns-2 sm:columns-1 xs:1 gap-2 mb-2" id="printBukti">
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-2">
        <div class="w-full mb-2">
            <h2 class="text-xl font-semibold" align="center">Detail Pengeluaran Barang</h2>
        </div>
        <div class="card-body">
                    <table class="table-responsive mb-3 no-wrap">
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nomor Pengeluaran
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $barang_keluar->id_barang_keluar ?>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                NIP Staff
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $barang_keluar->id_user ?>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama Staff
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $barang_keluar->nama ?>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Waktu
                            </th>
                            <time class="mb-1 text-md font-normal leading-none text-gray-400">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <span class="bg-green-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-white">
                                <?= date('d/m/Y H:i:s', strtotime($barang_keluar->waktu)) ?>
                                </span>
                            </td>
                            </time>
                        </tr>
                    </table>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Barang</th>
                                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php foreach ($list_barang as $barang) : ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <strong><?= $barang->nama ?></strong>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $barang->qty ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
    </div>
    <div class="col-md-6 col-sm-12 mb-2">
                            <button id="print" type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" onclick="printDiv('printBukti')">Cetak Bukti</button>
                        </div>
</div> 
