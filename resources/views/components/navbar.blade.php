<nav
    class="font-poppins bg-dianne-500 {{-- bg-midnight-500 --}} text-white px-4 w-full flex justify-between lg:justify-evenly items-center h-16">

    <!-- style="max-width: 64rem; -->


    <!-- Logo -->


    <a class="x1 ml-2 text-1xl sm:text-2xl font-poppins font-bold transition duration-500 ease-in-out hover:text-red-500"
        href="/">
        IMDB-clone
    </a>
    </h1>
    </div>
    <!-- Search -->



    <!-- search -->
    <div id="hidde-form" class="x1 sm:hidden xl:w-3/4 w-3/6 md:flex md:justify-center md:items-center" id="mobs"
        id="burgerbtn">
        <form action="{{ route('search') }}" method="GET" role="search"
            class="hidden sm:hidden md:flex lg:w-26 max-w-screen-lg bg-gradient-to-l from-blue-300 to-blue-500 items-center rounded-full shadow-xl md:h-9 p-2">
            @csrf
            <img class="w-9 mb-1 mr-auto" src="../img/magnifier.svg" alt="magnifier" title="magnifier">
            <input name="search" 
                class="rounded-l-full w-full py0 px0 bg-gradient-to-l from-blue-300 to-blue-500 text-white leading-tight focus:outline-none h-2 p-2"
                type="search" placeholder="Search">
            <a href="{{ route('search') }}" class=" mt-1">
                <button
                    class="lg:w-24 top-1/2 left-1/2 bg-white text-blue-600 rounded-full p-2 hover:bg-gray-300 focus:outline-none w-16 h-6 flex items-center justify-center"
                    type="submit">GO</button>
            </a>
        </form>
    </div>

    <section class="flex">

        <div id="logout"
            class="alert-banner hidden text-center w-screen fixed top-0 left-0 close cursor-pointer flex items-center justify-between w-full p-2 bg-red-600 shadow text-white">
            <h1 class="ml-5">You are now logging out</h1>
        </div>

        <!-- logout -->
        @auth
            <a id="logoutbtn" href="/logout"
                class="x2 mr-5 text-1xl sm:text-2xl font-medium font-poppins flex items-center transition duration-500 ease-in-out hover:text-red-500">
                Logout
            </a>




        @endauth
        <!-- LOGIN -->
        @guest
            <a href="/login"
                class="x2 mr-5 text-1xl sm:text-2xl font-medium font-poppins flex items-center transition duration-500 ease-in-out hover:text-red-500">
                Login
            </a>
        @endguest



        <!-- Naviagation -->

        <div class="transform -rotate-90">
            <span class="cursor-pointer text-lg sm:text-2xl h-2" tabindex="0" aria-haspopup="true" onclick="openNav()">

                <span role="navigation" class="h-4 w-2 rounded-2xl  text-white bg-white">&nbsp;</span>
                <span role="navigation" class="h-4 w-2 rounded-2xl text-white bg-white">&nbsp;</span>
                <span role="navigation" class="h-4 w-2 rounded-2xl text-white bg-white">&nbsp;</span>

            </span>
        </div>
    </section>
    <div id="myNav"
        class="overlay h-0 w-full fixed z-10 top-0 left-0 bg-gray-800 no-underline text-gray-600 block duration-75 focus:ring-gray-200 overflow-y-auto right-2">
        <div class="hidden sm:hidden lg:flex">
            <a href="javascript:void(0)" class=" closebtn absolute text-white text-6xl top-1 right-3 sm:"
                onclick="closeNav()">
                <img class=" lg:w-11 lg:mr-7 lg:mt-3.5 pt-1.5 mr-2 w-4" src="../img/close_logo_x.svg" alt="close Logo"
                    title="close Logo">
            </a>
        </div>


        <div class="overlay-content relative top-10 w-full text-center mt-8">
            <!-- Navigation links -->
            <div class="lg:mt-24 md:10">
                <div class="containerx mt-7">
                    <a class="imagex p-2 no-underline text-4xl lg:text-6xl text-white block hover:bg-gray-800 focus:ring-gray-200top-1 right-2 lg:mb-2 md:mb-1 sm:mb-1 xl:text-8xl transition duration-500 ease-in-out hover:text-red-500"
                        href="/movies">Movies</a>
                </div>
                <div class="containerx mt-7">
                    <a class="imagex p-2 no-underline text-4xl lg:text-6xl text-white block  hover:bg-gray-800 focus:ring-gray-200 top-1 right-2 lg:mb-2 md:mb-1 xl:text-8xl transition duration-500 ease-in-out hover:text-red-500"
                        href="/genre-list">Genre

                    </a>
                </div>
                <div class="containerx mt-7">
                    <a class="imagex p-2 no-underline text-4xl lg:text-6xl text-white block  hover:bg-gray-800 focus:ring-gray-200 top-1 right-2 lg:mb-2 md:mb-1 xl:text-8xl transition duration-500 ease-in-out hover:text-red-500"
                        href="/watchlist">Watchlist

                    </a>
                </div>
            </div>
            <!-- Search (nav-open) -->
            <div class="p-2 w-full justify-center inline-flex ml-3"
                style="margin-top: 3rem;padding-left: 2rem;left: 50%;margin-left: -0.75rem;">
                <div id="hidde-form" class="x1 sm:hidden xl:w-3/4 w-3/6 md:flex md:justify-center md:items-center"
                    id="mobs" id="burgerbtn">
                    <form action="{{ route('search') }}" method="GET" role="search"
                        class="hidden sm:hidden md:flex lg:w-26 max-w-screen-lg bg-gradient-to-l from-blue-300 to-blue-500 items-center rounded-full shadow-xl md:h-9 p-2">
                        @csrf
                        <img class="w-9 mb-1 mr-auto" src="../img/magnifier.svg" alt="magnifier" title="magnifier">
                        <input
                            class="rounded-l-full w-full py0 px0 bg-gradient-to-l from-blue-300 to-blue-500 text-white leading-tight focus:outline-none h-2 p-2"
                            type="search" name="search" placeholder="Search">
                        <a href="{{ route('search') }}" class=" mt-1">
                            <button
                                class="lg:w-24 top-1/2 left-1/2 bg-white text-blue-600 rounded-full p-2 hover:bg-gray-300 focus:outline-none w-16 h-6 flex items-center justify-center"
                                type="submit">GO</button>
                        </a>
                    </form>
                </div>
            </div>
            <div class="lg:hidden mt-2">
                <a href="javascript:void(0)" class="closebtn relative top-10 w-full text-center mt-8-3 sm:"
                    onclick="closeNav()">
                    <img class="relative sm:left-1" src="../img/close_logo_x.svg" alt="close Logo" title="close Logo"
                        style="left: 50%; margin-left: -1.5rem;">
                </a>
            </div>
        </div>
    </div>
</nav>
