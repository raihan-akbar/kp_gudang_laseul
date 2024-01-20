
<div class="">
<?php $this->load->view('layouts/_alert') ?>
<div class="lg:columns-4 md:columns-1 sm:columns-1 xs:1 gap-4 mb-4">
    
    <div class="relative w-full p-2 bg-white border border-gray-200 rounded-lg shadow mb-2 overflow-hidden">
      <dt>
        <div class="absolute bg-indigo-500 rounded-md p-3">
          <!-- Heroicon name: outline/users -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total User</p>
      </dt>
      <dd class="ml-16 pb-24 flex items-baseline sm:pb-2">
        <p class="text-2xl font-semibold text-gray-900"><?=getJumlahStaff(); ?></p>
        <p class="flex items-baseline text-sm font-semibold text-gray-600 px-2">
          <!-- <span class="sr-only"> Increased by </span> -->
          Orang
        </p>
      </dd>
    </div>
    <div class="relative w-full p-2 bg-white border border-gray-200 rounded-lg shadow mb-2 overflow-hidden">
      <dt>
        <div class="absolute bg-indigo-500 rounded-md p-3">
          <!-- Heroicon name: outline/users -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 21" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5.625c4.418 0 8-1.063 8-2.375S12.418.875 8 .875 0 1.938 0 3.25s3.582 2.375 8 2.375Zm0 13.5c4.963 0 8-1.538 8-2.375v-4.019c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353c-.193.081-.394.158-.6.231l-.189.067c-2.04.628-4.165.936-6.3.911a20.601 20.601 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244c-.053-.028-.113-.053-.165-.082v4.019C0 17.587 3.037 19.125 8 19.125Zm7.09-12.709c-.193.081-.394.158-.6.231l-.189.067a20.6 20.6 0 0 1-6.3.911 20.6 20.6 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244C.112 6.035.052 6.01 0 5.981V10c0 .837 3.037 2.375 8 2.375s8-1.538 8-2.375V5.981c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353Z"></path>
          </svg>
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total Barang</p>
      </dt>
      <dd class="ml-16 pb-24 flex items-baseline sm:pb-2">
        <p class="text-2xl font-semibold text-gray-900"><?=getJumlahBarang(); ?></p>
        <p class="flex items-baseline text-sm font-semibold text-gray-600 px-2">
          <!-- <span class="sr-only"> Increased by </span> -->
          PCS
        </p>
      </dd>
    </div>
    <div class="relative w-full p-2 bg-white border border-gray-200 rounded-lg shadow mb-2 overflow-hidden">
      <dt>
        <div class="absolute bg-indigo-500 rounded-md p-3">
          <!-- Heroicon name: outline/users -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 21" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.994 19a8.999 8.999 0 1 1 3.53-17.281M5.995 9l4 4 7-8m-1 8v5m-2.5-2.5h5"></path>
          </svg>
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total Supplier</p>
      </dt>
      <dd class="ml-16 pb-24 flex items-baseline sm:pb-2">
        <p class="text-2xl font-semibold text-gray-900"><?=getJumlahSupplier(); ?></p>
        <p class="flex items-baseline text-sm font-semibold text-gray-600 px-2">
          <!-- <span class="sr-only"> Increased by </span> -->
          Supplier
        </p>
      </dd>
    </div>
    <div class="relative w-full p-2 bg-white border border-gray-200 rounded-lg shadow mb-2 overflow-hidden">
      <dt>
        <div class="absolute bg-indigo-500 rounded-md p-3">
          <!-- Heroicon name: outline/users -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 21" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"></path>
          </svg>
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">Total Stok</p>
      </dt>
      <dd class="ml-16 pb-24 flex items-baseline sm:pb-2">
        <p class="text-2xl font-semibold text-gray-900"><?=getJumlahStok(); ?></p>
        <p class="flex items-baseline text-sm font-semibold text-gray-600 px-2">
          <!-- <span class="sr-only"> Increased by </span> -->
          Stok
        </p>
      </dd>
    </div>
</div>
<div class="lg:columns-2 md:columns-1 sm:columns-1 xs:1 gap-4 mb-4">
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-4">
        <div class="w-full mb-4">
            <h2 class="text-xl font-semibold">Aktivitas Terakhir Barang Masuk</h2>
        </div>
        <ol class="relative border-s border-gray-700">
            <?php foreach ($barang_masuk as $row) : ?>                        
            <li class="mb-4 ms-4 border rounded-lg p-2 bg-white shadow">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-md font-normal leading-none text-gray-400"><span class="bg-blue-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-white"><?=$row->id; ?></span><span class="bg-green-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-white"><?= date('d-m-Y H:i:s', strtotime($row->waktu)) ?></span></time>
                <h3 class="text-lg font-semibold text-gray-900"><?=$row->nama; ?></h3>
                <a href="<?= base_url("inputs/detail/$row->id") ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Details</a>
            </li>
            <?php endforeach ?>
        </ol>
    </div>
    <div class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-2">
        <div class="w-full mb-4">
            <h2 class="text-xl font-semibold">Aktivitas Terakhir Barang Keluar</h2>
        </div>
        <ol class="relative border-s border-gray-700">
            <?php foreach ($barang_keluar as $row) : ?>                        
            <li class="mb-4 ms-4 border rounded-lg p-2 bg-white shadow">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-md font-normal leading-none text-gray-400"><span class="bg-blue-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-white"><?=$row->id; ?></span><span class="bg-green-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-white"><?= date('d-m-Y H:i:s', strtotime($row->waktu)) ?></span></time>
                <h3 class="text-lg font-semibold text-gray-900"><?=$row->nama; ?></h3>
                <a href="<?= base_url("outputs/detail/$row->id") ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Details</a>
            </li>
            <?php endforeach ?>
        </ol>
    </div>
</div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->