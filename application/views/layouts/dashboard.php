<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/Mark-Primary.svg') ?>">
    <title>La Seul Plus</title>
    <!-- CSS Libraries -->
    <!-- <link href="<?= base_url('assets/extra-libs/c3/c3.min.css') ?>" rel="stylesheet"> -->
     <!-- <link href="<?= base_url('assets/css/style.min.css') ?>" rel="stylesheet"> -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-white antialiased h-full w-full">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <?php $this->load->view('layouts/_sidebar') ?>
    
    <div class="md:flex md:items-center md:justify-between">
      <!-- This example requires Tailwind CSS v2.0+ -->
        <div>
            <nav class="sm:hidden" aria-label="Back">
              <a href="<?=base_url('home') ?>" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-600">
                <!-- Heroicon name: solid/chevron-left -->
                <svg class="flex-shrink-0 -ml-1 mr-1 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <?= "Home" ?>
              </a>
            </nav>
            <nav class="hidden sm:flex" aria-label="Breadcrumb">
              <ol role="list" class="flex items-center space-x-4">
                <li>
                  <div class="flex">
                    <a href="<?=base_url('home') ?>" class="text-gray-400 hover:text-gray-500">
                        <svg class="flex-shrink-0 h-4 w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                              <path d="M9 4.025A7.5 7.5 0 1 0 16.975 12H9V4.025Z"/>
                              <path d="M12.5 1c-.169 0-.334.014-.5.025V9h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 12.5 1Z"/>
                            </g>
                        </svg>
                    </a>
                  </div>
                </li>
                <li>
                  <div class="flex items-center">
                    <!-- Heroicon name: solid/chevron-right -->
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    <a href="#" class="ml-4 text-sm font-medium text-gray-700 hover:text-gray-400"><?= $breadcrumb_title ?></a>
                  </div>
                </li>
                <li>
                  <div class="flex items-center">
                    <!-- Heroicon name: solid/chevron-right -->
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    <a href="#" aria-current="page" class="ml-4 text-sm font-medium text-gray-700 hover:text-gray-400"><?= $breadcrumb_path ?></a>
                  </div>
                </li>
              </ol>
            </nav>
        </div>
    </div>
    <hr class="h-px my-4 bg-gray-300 border-2">

    <?php $this->load->view($page) ?>

    </div>
    <footer class="bg-white p-4 sm:ml-64">
      <div class="max-w-7xl mx-auto overflow-hidden sm:px-6 lg:px-8">
        <div class="flex justify-center">
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">La Seul</span>
            <img class="w-5" src="<?=base_url('assets/images/Mark-Primary.svg') ?>">
          </a>
        </div>
        <nav class="mt-2 -mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
          <div class="px-5 py-2">
            <p class="text-base text-gray-500"> Fabio Pamungkas Syechan </p>
          </div>

          <div class="px-5 py-2">
            <p class="text-base text-gray-500"> Raihan Muhammad Akbar </p>
          </div>

          <div class="px-5 py-2">
            <p class="text-base text-gray-500"> Jendra Kamal Yuda Kusumah </p>
          </div>
        </nav>
        <p class="mt-2 text-center text-base text-gray-400">Sangkuriang Labs &copy; <?=date('Y') ?> S-Labs, Inc. All rights reserved.</p>
      </div>
    </footer>    
    <!-- <script src="<?= base_url('assets/libs/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/popper.js/umd/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/app-style-switcher.js') ?>"></script>
    <script src="<?= base_url('assets/js/feather.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/perfect-scrollbar/perfect-scrollbar.jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/sidebarmenu.js') ?>"></script> -->
    <!--Custom JavaScript -->
    <!-- <script src="<?= base_url('assets/js/custom.min.js') ?>"></script> -->

    <!-- Alert Flash Message -->
    <!-- <script src="<?= base_url('assets/js/sweetalert.min.js') ?>"></script> -->
    
    <!-- Cetak struk -->
    <script>
        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            // Menyembunyikan button sebelum mencetak
            var buttonToHide = document.getElementById('print'); // Ganti 'buttonId' dengan id aktual button
            if (buttonToHide) {
                buttonToHide.style.display = 'none';
            }
            window.print();
            // Menampilkan kembali button setelah mencetak
            if (buttonToHide) {
                buttonToHide.style.display = '';
            }
            document.body.innerHTML = originalContents;
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
