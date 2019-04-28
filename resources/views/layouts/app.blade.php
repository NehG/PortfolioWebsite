<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- SEO Meta Tags -->
    <meta name="Description" content="An ingenious full stack developer with professional programming skills as a developer and designer. Cutting-edge projects and work experience makes Nehal Gajjar a preferable computer programmer. ">
    <meta name="Keywords" content="COMPUTER PROGRAMMER FULL-STACK WEB DEVELOPER DESIGNER HTML5 CSS3 JAVASCRIPT PHP LARAVEL JQUERY MVC MYSQL PDO PYTHON JAVA C++ C# PERSONAL WEBSITE COOP">
    <!-- Robots Meta Tags -->
    <meta name="Robots" content="index," "nofollow," "noimageindex">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ str_replace('_', ' ', config('app.name', 'Nehal Gajjar')) }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .navbar-brand {
            font-size: 1.5em;
        }
    </style>
</head>

<body class="container-fluid">
    <div id="app">
        <main class="my-auto mx-auto">
          <div class="content">
            @yield('profile')
          </div>
        </main>
    </div>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5b4f6faa91379020b95efdf5/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>
