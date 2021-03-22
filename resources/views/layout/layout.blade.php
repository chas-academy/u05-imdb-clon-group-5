<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="{{ asset('js/glide.min.js')}}"></script>
    <link rel="stylesheet" href="css/glide.core.css">
    <link rel="stylesheet" href="css/glide.theme.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/glide.js')}}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Movie-db</title>
</head>

<body class="bg-midnight-500">
@component('components.navbar')
@endcomponent
    <div class=" max-w-screen-xl m-auto">

       
    @yield('content')  

  
</div>
 

   
    
  

 
     <x-footer_component/>
  

  
</body>
</html>

