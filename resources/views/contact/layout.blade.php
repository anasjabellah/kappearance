<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('backEnd/assets/') }}"
  data-template="vertical-menu-template-free"
>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('backEnd/assets/vendor/fonts/boxicons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backEnd/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backEnd/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('backEnd/assets/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('backEnd/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />


    <!-- Helpers -->
        <script src="{{ asset('backEnd/assets/vendor/js/helpers.js') }}"></script>
        <script src="{{ asset('backEnd/assets/js/config.js') }}"></script>
    <!-- Helpers -->
</head>
<body>
    
    @yield('aside')
    @yield('content')



    <!-- Core JS -->
    <!-- build:js backEnd/assets/vendor/js/core.js -->
    <script src="{{ asset('backEnd/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backEnd/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('backEnd/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backEnd/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backEnd/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('backEnd/assets/vendor/libs/masonry/masonry.js') }}"></script>
    <!-- Main JS -->

    <script src="{{ asset('backEnd/assets/js/main.js') }}"></script>
    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>
</html>