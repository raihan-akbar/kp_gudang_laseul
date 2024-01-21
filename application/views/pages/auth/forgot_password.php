<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/Mark-Primary.svg') ?>">
    <title><?= $title ?></title>
    <!-- Custom CSS -->
    <!-- <link href="<?= base_url('assets/css/style.min.css') ?>" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
<?php $this->load->view('layouts/_alert') ?>
<div class="min-h-full flex items-center justify-center py-36 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <img class="mx-auto h-12 w-auto" src="<?=base_url('assets/images/Mark-Primary.svg') ?>" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign-in Page</h2>
      <p class="mt-2 text-center text-sm text-gray-600">Please Log in to Continue</p>
    </div>
    <form class="mt-8 space-y-6" action="<?=base_url('Login/recover_password') ?>" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <div class="w-full">
          <div class="mb-5">
              <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Email Address</label>
              <input type="email" id="email" name="email" placeholder="Registered Email Address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
          </div>
        </div>
      </div>

      <div class="w-full">
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-green-500 group-hover:text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Request Help
        </button>
      </div>
      <div class="text-center">
        <a href="<?=base_url('login') ?>" class="font-medium text-blue-600 hover:underline">
        Back to Sign in
        </a>
      </div>
    </form>
  </div>
</div>
</body>

</html>
