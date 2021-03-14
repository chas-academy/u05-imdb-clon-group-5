<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>U05 Nav</title>
</head>

<body class="font-sans bg-gray-900 text-white">
    <div class="container mx-auto border-b bg-gray-800 border-gray-800 p-0.25">
        <!-- style="max-width: 64rem; -->
        <header class="">
            <div class="container w-full flex items-center justify-between md:h-1" style="height: 3.5rem" ;>

                <!-- Logo -->
                <div class="flex items-center justify-between mb-4 md:mb-0">
                    <h1 class="">
                        <a class="x1 mt-2" href="#">
                            <img class="md:w-24 mt-8 md:mt-4 lg:w-24 ml-2 lg:mt-5" src="./img/imdb_logo.svg">
                        </a>
                    </h1>
                </div>

                <!-- burger when mobile mode
            <a class="text-black hover:text-orange" href="#">
                <i class="fa fa-2x fa-bars"></i>
            </a> -->

                <!-- old Search -->
                <!-- <div class="">
                <form class="x1 mt-3.5 lg:ml-auto w-3/6" class="md:flex md:justify-center md:items-center md:flex lg:w-26 lg:mt-1.5 max-w-screen-lg bg-blue-100 items-center rounded-full shadow-xl lg:h-30 p-2"  action="">
                    <img class="" src="./img/magnifier.svg" alt="magnifier" title="magnifier" style="width: 1.5rem";>
                    <label class="hidden" for="search-form"></label>
                    <input class="rounded-l-full w-full py0 px0 text-gray-700 leading-tight bg-blue-100 focus:outline-none h-2 p-2"
                        placeholder="Search" type="text">
                    <button class="lg:w-24 top-1/2 left-1/2 bg-white text-blue-600 rounded-full p-2 hover:bg-gray-300 focus:outline-none w-12 h-7 flex items-center justify-center">Submit</button>
                </form>
            </div> -->

                <!-- New search -->
                <div class="x1 lg:auto w-3/6 md:mt-1" style="margin-left: auto;margin-right: auto;" class="md:flex md:justify-center md:items-center" id="mobs" id="burgerbtn">
                    <form class="hidden sm:hidden md:flex lg:w-26 lg:mt-1.5 max-w-screen-lg bg-gradient-to-l from-blue-300 to-blue-500 items-center rounded-full shadow-xl md:h-8 p-2">
                        <img class="w-9 mb-1 mr-auto mt-1" src="./img/magnifier.svg" alt="magnifier" title="magnifier">
                        <input class="rounded-l-full w-full py0 px0 bg-gradient-to-l from-blue-300 to-blue-500 text-gray-700 leading-tight focus:outline-none h-2 p-2" id="search" type="text" placeholder="Search">
                        <button class="lg:w-24 top-1/2 left-1/2 bg-white  text-blue-600 rounded-full p-2 hover:bg-gray-300 focus:outline-none w-12 h-7 flex items-center justify-center">GO</button>
                    </form>
                </div>

                <!-- LOGIN  -->
                <div>
                    <h1>
                        <a href="#" class="x2 ml-auto">
                            <img class="lg:w-20 md:w-20 mt-2 lg:mt-2" src="./img/login_logo.svg" alt="Login Logo" title="Login Logo">
                        </a>
                    </h1>
                </div>

                <!-- Naviagation -->
                <!-- <div>
                    <p id="burgerbtn" class="w-13 mt-4 md:mt-5">
                        <img class="w-8 ml-3 md:w-24 lg:w-24 mr-2 lg:mr-auto h-8" src="./img/navigation_logo.svg" alt="Navigation Logo" title="Navigation Logo">
                    </p>
                </div> -->

                <div class="lg:mt-6">
                    <span style="font-size:30px;cursor:pointer" class="" onclick="openNav()">
                        <img class="md:w-8 ml-3 mt-3 mr-2 lg:mt-1 lg:mr-3 lg:w-24" src="./img/navigation_logo.svg" alt="Navigation Logo" title="Navigation Logo">
                    </span>
                </div>

                <div id="myNav" class="overlay h-0 w-full fixed z-10 top-0 left-0 bg-gray-800 overflow-y-hidden duration-75 no-underline text-4xl text-gray-600 block duration-75 focus:ring-gray-200 overflow-y-auto text-xl text-5xl top-1 right-2">
                    <div class="hidden sm:hidden lg:flex">

                        <a href="javascript:void(0)" class=" closebtn absolute text-white text-6xl top-1 right-3 sm:" onclick="closeNav()">
                            <img class=" lg:w-11 lg:mr-7 lg:mt-3.5 pt-1.5 mr-2 w-4" src="./img/close_x.svg" alt="close Logo" title="close Logo">
                        </a>
                    </div>
                    <div class="overlay-content relative top-10 w-full text-center mt-8"> <!-- style="margin-top: 10rem; -->
                        <a class="p-2 no-underline text-4xl text-white block duration-75 hover:bg-gray-200 focus:ring-gray-200 text-xl top-1 right-2" style="margin-bottom: 0.25rem;" href="#">movies</a>
                        <a class="p-2 no-underline text-4xl text-white block duration-75 hover:bg-gray-200 focus:ring-gray-200 text-xl top-1 right-2" style="margin-bottom: 0.25rem;" href="#">Tv shows</a>
                        <a class="p-2 no-underline text-4xl text-white block duration-75 hover:bg-gray-200 focus:ring-gray-200 text-xl top-1 right-2" style="margin-bottom: 0.25rem;" href="#">Genre</a>
                        <a class="p-2 no-underline text-4xl text-white block duration-75 hover:bg-gray-200 focus:ring-gray-200 text-xl top-1 right-2" style="margin-bottom: 0.25rem;" href="#">Watchlist</a>


                        <div class="p-2 w-full justify-center inline-flex ml-3">
                            <div class="bg-white flex items-center rounded-full shadow-xl h-8">
                                <input class="rounded-l-full w-full py-4 px-6 bg-gradient-to-l from-blue-500 to-blue-300 text-gray-200 leading-tight focus:outline-none h-8 text-xl" id="search" type="text" placeholder="Search">

                                <div class="p-1 h-8  rounded-r-full bg-blue-500">
                                    <button class="lg:w-24 top-1/2 left-1/2 bg-white text-indigo-700 rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-6 flex items-center justify-center text-xl">
                                        Go
                                    </button>
                                </div>
                            </div>

                            <div class="lg:hidden">
                                <a href="javascript:void(0)" class="closebtn relative top-10 w-full text-center mt-8-3 sm:" onclick="closeNav()" style="right: 10rem;top:5rem;">
                                    <img class="" src="./img/close_x.svg" alt="close Logo" title="close Logo" class="relative top-10 right 10 w-full text-center mt-8">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function openNav() {
                        document.getElementById("myNav").style.height = "100%";
                    }

                    function closeNav() {
                        document.getElementById("myNav").style.height = "0%";
                    }
                </script>
            </div>

            <!-- nav -->

            </form>
    </div>
    </header>

</body>

</html>

<!-- old code still in the dev -->

<!-- <div>
    <form class="hidden sm:hidden md:flex lg:w-26 lg:mt-1.5 max-w-screen-lg bg-blue-100 items-center rounded-full shadow-xl lg:h-30 p-2" action="">
        <label class="hidden" for="search-form"></label>
        <img class="" src="./img/magnifier.svg" alt="magnifier" title="magnifier">

        <input class="bg-grey-lightest border-2 focus:border-orange p-2 rounded-lg shadow-inner w-full" placeholder="Search" type="text">
        <button class="hidden">Submit</button>
    </form>
</div> -->


<!-- <body class="font-sans bg-gray-900 text-white">
    <div class="container mx-auto border-b bg-gray-800 border-gray-800 p-5">
        <header class="flex flex-row justify-between">
            <a href="#" class="x1 mt-2">
                <img class="md:w-12 lg:w-24 lg:mt-3" src="../img/imdb_logo.svg" alt="Imdb Logo" title="Imdb Logo">
            </a>

            <div class="x1 mt-3.5 lg:ml-auto w-3/6" class="md:flex md:justify-center md:items-center" id="mobs" id="burgerbtn">
                <div class="hidden sm:hidden md:flex lg:w-26 lg:mt-1.5 max-w-screen-lg bg-blue-100 items-center rounded-full shadow-xl lg:h-30 p-2">
                    <div class="x4 mt-2">
                        <img class="w-9 mb-1 mr-auto " src="../img/magnifier.svg" alt="magnifier" title="magnifier">
                    </div>
                    <input class="rounded-l-full w-full py0 px0 text-gray-700 leading-tight bg-blue-100 focus:outline-none h-2 p-2" id="search" type="text" placeholder="Search">
                    <div class="x3 ml-auto h-7">
                        <button class="lg:w-24 top-1/2 left-1/2 bg-white text-blue-600 rounded-full p-2 hover:bg-gray-300 focus:outline-none w-12 h-7 flex items-center justify-center">
                            GO
                        </button>
                    </div>
                </div>
            </div>
            <a href="#" class="x2 ml-auto mt-3">
                <img class="md:w-16 md:mt-3.5 md:pt-2 lg:w-20" src="../img/login_logo.svg" alt="Login Logo" title="Login Logo">
            </a>
            <p id="burgerbtn" class="lg:w-24 lg:ml-5 mt-2 ml-3 md:mt-5 md:hidden">
                <img class="md:w-8 md:ml-3 mt-1 lg:w-24 lg:mt" src="../img/navigation_logo.svg" alt="Navigation Logo" title="Navigation Logo">
            </p>
        </header>
    </div>
    <nav>
        <ul class="hidden mt-7 md:flex-row " id="mobileNavMenu">
            <li class="flex justify-center"><a href="#" class="pr-5">Movies</a></li>
            <li class="flex justify-center"><a href="#" class="pr-5">Tv shows</a></li>
            <li class="flex justify-center"><a href="#" class="pr-5">Genre</a></li>
            <li class="flex justify-center"><a href="#" class="pr-5">Watchlist</a></li>

            <li class="flex justify-center lg:hidden id=" burgerbtn">
                <div class="x1 lg:hidden mt-3.5 lg:ml-auto w-3/6" id="burgerbtn">
                    <div class="hidden sm:hidden md:flex lg:w-26 lg:mt-1.5 max-w-screen-lg bg-blue-100 items-center rounded-full shadow-xl lg:h-30 p-2">
                        <div class="x4 mt-2">
                            <img class="w-9 mb-1 mr-auto " src="../img/magnifier.svg" alt="magnifier" title="magnifier">
                        </div>
                        <input class="rounded-l-full w-full py0 px0 text-gray-700 leading-tight bg-blue-100 focus:outline-none h-2 p-2" id="search" type="text" placeholder="Search">
                        <div class="x3 ml-auto h-7">
                            <button class="lg:w-24 top-1/2 left-1/2 bg-white text-blue-600 rounded-full p-2 hover:bg-gray-300 focus:outline-none w-12 h-7 flex items-center justify-center">
                                GO
                            </button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    </div>
</body>

</html>

<style>
    .activate {
        display: block;
    }

    #burgerbtn {
        display: block;
    }

    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e5e7eb;
    }
</style>

<script>
    // script for burger open (original)
    let burger = document.getElementById('burgerbtn');

    let mobileNavMenu = document.getElementById('mobileNavMenu');

    burger.addEventListener('click', function() {
        mobileNavMenu.classList.toggle('activate');
    });
</script> -->