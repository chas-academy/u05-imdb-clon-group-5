<nav class="font-sans bg-gray-900 text-white">
    <div class="container mx-auto border-b bg-gray-900 border-gray-900 p-0.25">
        <!-- style="max-width: 64rem; -->
        <header class="h-16">
            <div class="container w-full flex items-center justify-between md:h-1" style="height: 3.5rem" ;>
                <!-- Logo -->
                <div class="flex items-center justify-between mb-4 md:mb-0">
                    <h1>
                        <a class="x1 mt-2" href="/">
                            <img class="md:w-24 mt-8 md:mt-6 lg:w-24 ml-2 lg:mt-5" src="../img/imdb_logo.svg">
                        </a>
                    </h1>
                </div>
                <!-- Search -->
                <div class="x1 lg:auto w-3/6 md:mt-1" style="margin-left: auto;margin-right: auto;" class="md:flex md:justify-center md:items-center" id="mobs" id="burgerbtn">
                    <form action="{{ route('search') }}" method="GET" role="search" class="hidden sm:hidden md:flex lg:w-26 lg:mt-1.5 max-w-screen-lg bg-gradient-to-l from-blue-300 to-blue-500 items-center rounded-full shadow-xl md:h-9 p-2 md:mt-1">
                        @csrf
                        <img class="w-9 mb-1 mr-auto mt-1" src="../img/magnifier.svg" alt="magnifier" title="magnifier">
                        <input class="rounded-l-full w-full py0 px0 bg-gradient-to-l from-blue-300 to-blue-500 text-white leading-tight focus:outline-none h-2 p-2" id="search" placeholder="Search" type="search" name="search" required />
                        <a href="{{ route('search') }}" class=" mt-1">
                            <button class="lg:w-24 top-1/2 left-1/2 bg-white text-blue-600 rounded-full p-2 hover:bg-gray-300 focus:outline-none w-16 h-6 flex items-center justify-center" type="submit">GO</button>
                        </a>
                    </form>
                </div>
                <!-- LOGIN -->
                <div>
                    <h1>
                        <a href="/login" class="x2 ml-auto">
                            <img class="lg:w-20 md:w-20 md:h-10 mt-2 lg:mt-2" src="../img/login_logo.svg" alt="Login Logo" title="Login Logo">
                        </a>
                    </h1>
                </div>
                <!-- Naviagation -->
                <div class="lg:mt-6 lg:mr-4 lg:w-16 lg:ml-3 mt-4">
                    <span style="font-size:30px;cursor:pointer;width: 6rem;" onclick="openNav()">
                        <img class="md:w-16 md:mt-1 ml-3 mt-0.25 mr-2 lg:mb-2 lg:mr-3 lg:w-24" src="../img/navigation_logo.svg" alt="Navigation Logo" title="Navigation Logo">
                    </span>
                </div>
                <div id="myNav" class="overlay h-0 w-full fixed z-10 top-0 left-0 bg-gray-800 overflow-y-hidden duration-75 no-underline text-4xl text-gray-600 block duration-75 focus:ring-gray-200 overflow-y-auto text-xl text-5xl top-1 right-2">
                    <div class="hidden sm:hidden lg:flex">
                        <a href="javascript:void(0)" class=" closebtn absolute text-white text-6xl top-1 right-3 sm:" onclick="closeNav()">
                            <img class=" lg:w-11 lg:mr-7 lg:mt-3.5 pt-1.5 mr-2 w-4" src="../img/close_logo_x.svg" alt="close Logo" title="close Logo">
                        </a>
                    </div>
                    <div class="overlay-content relative top-10 w-full text-center mt-8">
                        <!-- Navigation links -->
                        <div class="lg:mt-24 md:10">
                            <div class="containerx mt-7">
                                <a class="imagex p-2 no-underline text-4xl lg:text-6xl text-white block duration-75 hover:bg-gray-800 focus:ring-gray-200top-1 right-2 lg:mb-2 md:mb-1 sm:mb-1 xl:text-8xl" href="/movies">Movies
                                    <div class="hidden sm:hidden lg:flex overlayx">
                                        <div class="hidden sm:hidden lg:flex textx">
                                            <img class="" src="../img/movies-hover.svg" alt="movies-hover-frame" title="movies-hover-frame">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="containerx mt-7">
                                <a class="imagex p-2 no-underline text-4xl lg:text-6xl text-white block duration-75 hover:bg-gray-800 focus:ring-gray-200 top-1 right-2 lg:mb-2 md:mb-1 xl:text-8xl" href="/genre">Genre
                                    <div class="hidden sm:hidden lg:flex overlayx">
                                        <div class="hidden sm:hidden lg:flex textx">
                                            <img class="" src="../img/genre-hover.svg" alt="genre-hover-frame" title="genre-hover-frame">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="containerx mt-7">
                                <a class="imagex p-2 no-underline text-4xl lg:text-6xl text-white block duration-75 hover:bg-gray-800 focus:ring-gray-200 top-1 right-2 lg:mb-2 md:mb-1 xl:text-8xl" href="#">Watchlist
                                    <div class="hidden sm:hidden lg:flex overlayx l">
                                        <div class="hidden sm:hidden lg:flex textx">
                                            <img class="" src="../img/watchlist-hover.svg" alt="watchlist-hover-frame" title="watchlist-hover-frame">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Search (nav-open) -->
                        <div class="p-2 w-full justify-center inline-flex ml-3" style="margin-top: 3rem;padding-left: 2rem;left: 50%;margin-left: -0.75rem;">
                            <form action="{{ route('search') }}" method="GET" role="search">
                                @csrf
                                <div class="rounded-l-full bg-white flex items-center rounded-full shadow-xl h-8 xl:h-16">
                                    <span class="rounded-l-full w-12 h-8 lg:h-10 flex justify-end items-center text-gray-00 p-2 bg-blue-500 p-1.5 md:left0  xl:h-16" style="padding: 0rem;">
                                        <img class="w-20 mb-1 mr-auto mt-1 bg-blue-500 h-8" style="position: relative;left: 0.75rem;width: 2rem;" src=" ../img/magnifier.svg" alt="magnifier" title="magnifier">
                                    </span>
                                    <input class="w-full py-4 px-6 bg-gradient-to-l from-blue-300 to-blue-500 text-white leading-tight focus:outline-none h-8 lg:h-10 text-xl xl:h-16" id="search" placeholder="Search" type="search" name="search">
                                    <div class="p-1 h-8 lg:h-10 rounded-r-full bg-blue-300 xl:h-16">
                                        <a href="{{ route('search') }}">
                                            <button class="lg:w-24 top-1/2 left-1/2 bg-white text-indigo-500 rounded-full p-2 hover:bg-blue-300 focus:outline-none w-12 h-6 lg:h-8 flex items-center justify-center text-xl xl:h-14" type="submit">
                                                Go
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="lg:hidden mt-2">
                            <a href="javascript:void(0)" class="closebtn relative top-10 w-full text-center mt-8-3 sm:" onclick="closeNav()">
                                <img class="relative sm:left-1" src="../img/close_logo_x.svg" alt="close Logo" title="close Logo" style="left: 50%; margin-left: -1.5rem;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</nav>