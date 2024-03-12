 
<div class="container-fluid">
    
    <?php $this->load->view('layouts/_alert') ?>
    <div class="lg:columns-1  md:columns-6 sm:columns-1 xs:1 gap-2 mb-2" id="printBukti">
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-2">
        <div class="w-full mb-2">
            <h2 class="text-xl font-semibold">Laporan Barang Keluar</h2>
        </div>

        <div class="lg:columns-1  md:columns-6 sm:columns-1 xs:1 gap-2 mb-2" id="printBukti">
        <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-2">
        <div class="card-body">
        <form method="post" action="<?php echo base_url('Outputs/laporan_keluar'); ?>">
            <div id="tanggalawalakhir">
            <label for="tanggal_awal">Tanggal Awal:</label>
            <input type="date" id="tanggal_awal" name="tanggal_awal" required>

            <label for="tanggal_akhir">Tanggal Akhir:</label>
            <input type="date" id="tanggal_akhir" name="tanggal_akhir" required>
            </div>
            <br> 

            <p id="tanggalInfo"></p>
            <button id="printout" type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tampilkan Laporan</button>
            <br> 
            <br>
            <button id="printout2" type="button" class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-white-700 rounded-lg hover:bg-white-800 focus:ring-4 focus:outline-none focus:ring-white-300 dark:bg-white-600 dark:hover:bg-white-700 dark:focus:ring-white-800" onclick="printOutput()">
            <svg class="w-6 h-6 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 3a2 2 0 0 0-2 2v3h12V5a2 2 0 0 0-2-2H8Zm-3 7a2 2 0 0 0-2 2v5c0 1.1.9 2 2 2h1v-4c0-.6.4-1 1-1h10c.6 0 1 .4 1 1v4h1a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5Zm4 11a1 1 0 0 1-1-1v-4h8v4c0 .6-.4 1-1 1H9Z" clip-rule="evenodd"/>
            </svg>
            Print
            </button>
        </form>
        </div>
        </div>
        </div>

        <div class="card-body">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">User</th>
                                    <th scope="col" class="px-6 py-3">Barang Keluar</th>
                                    <th scope="col" class="px-6 py-3">Waktu</th>
                                    <th scope="col" class="px-6 py-3">Qty</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($laporan as $row) : ?>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4"><?= isset($row['nama_user']) ? $row['nama_user'] : ''; ?></td>
                                        <td class="px-6 py-4"><?= isset($row['nama_barang']) ? $row['nama_barang'] : ''; ?></td>
                                        <td class="px-6 py-4"><?= date('d-m-Y H:i:s', strtotime(isset($row['waktu']) ? $row['waktu'] : '')) ?></td>
                                        <td class="px-6 py-4"><?= isset($row['qty']) ? $row['qty'] : ''; ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>