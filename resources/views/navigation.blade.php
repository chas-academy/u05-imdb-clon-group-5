<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>u05</title>
</head>
    <body class="font-sans bg-gray-900 text-white">
    <div class="container mx-auto border-b bg-gray-800 border-gray-800 p-5">
    <header class="flex flex-row justify-between">
        <a href="#" class="x1 mt-2">
            <img class="md:w-12 lg:w-24" src="../img/imdb_logo.svg" alt="Imdb Logo" title="Imdb Logo">        </a>
        <a href="#" class="x2 ml-auto mt-4">
            <img class="md:w-16 lg:w-20" src="../img/login_logo.svg" alt="Login Logo" title="Login Logo">
        </a>
        <p id="burgerbtn" class="lg:w-24 ml-12 mt-2 md:hidden">
            <img class="md:w-8 lg:w-24" src="../img/navigation_logo.svg" alt="Navigation Logo" title="Navigation Logo">
        </p>
</header>
<nav>
    <ul class="hidden md:flex-row" id="mobileNavMenu">
        <li><a href="#" class="pr-5">Movies</a></li>
        <li><a href="#" class="pr-5">Tv shows</a></li>
        <li><a href="#" class="pr-5">Genre</a></li>
        <li><a href="#" class="pr-5">Watchlist</a></li>
    </ul>
</nav>
</div>
</body>
</html>
 
<style>
    .activate{
        display: block;
    }    

    #burgerbtn{
        display: block;
    }

    :after,:before{
        box-sizing:border-box;
        border:0 solid #e5e7eb;}
</style>

<script>
    let burger = document.getElementById('burgerbtn');

    let mobileNavMenu = document.getElementById('mobileNavMenu');

    burger.addEventListener('click', function(){
        mobileNavMenu.classList.toggle('activate');
    });
</script>

</body>
</html>
 