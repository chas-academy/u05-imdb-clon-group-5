<!DOCTYPE html>
<html class="bg-midnight-700" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/code.js')}}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Movie-db</title>
</head>

<body class="bg-midnight-500  max-w-screen-xl m-auto">
    {{-- add navigation here --}}


    
    @yield('content')  

  

 

   
    
  

 
     <x-footer-component/>
  

  
</body>
</html>

