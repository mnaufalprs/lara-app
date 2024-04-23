<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Halaman {{ $title }}</title>
</head>
<body>
    {{-- <div class="row justify-content-center">
        <div class="col-md-4">
            
        </div>
    </div> --}}
    
    
    <main class="">
        @yield('LoginClass')
    </main>

    
        @yield('RegisterClass')
    
      
      

{{-- <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script> --}}

</body>
</html>