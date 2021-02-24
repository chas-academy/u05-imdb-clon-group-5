<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-midnight relative">
   
      
    
    <nav class="bg-indigo-800 shadow dark:bg-gray-800">
        <div class="container px-6 py-3 mx-auto md:flex">
            <div class="flex items-center justify-between">
                <div>
                    <a class="text-xl font-bold text-white dark:text-white md:text-2xl hover:text-gray-700 dark:hover:text-gray-300" href="#">Placeholder</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" class="text-white dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="w-full md:flex md:items-center md:justify-between">
                <div class="flex flex-col px-2 py-3 -mx-4 md:flex-row md:mx-0 md:py-0">
                    <a href="#" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 transform rounded dark:text-gray-200 hover:bg-gray-900 hover:text-gray-100 md:mx-2">Home</a>
                    <a href="#" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 transform rounded dark:text-gray-200 hover:bg-gray-900 hover:text-gray-100 md:mx-2">About</a>
                    <a href="#" class="px-2 py-1 text-sm font-medium text-white transition-colors duration-200 transform rounded dark:text-gray-200 hover:bg-gray-900 hover:text-gray-100 md:mx-2">Contact</a>
                </div>
                
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>

                    <input type="text" class="w-full py-3 pl-10 pr-4 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" placeholder="Search">
                </div>
            </div>
        </div>
    </nav>



  <section class="flex mt-12 justify-center">
    <div class="m-4">
    <h1 class="text-white font-inter text-center text-3xl sm:text-5xl lg:text-7xl">
      Express Your Movie
    </h1>
    <h1 class="text-white font-poppins text-center text-3xl sm:text-5xl lg:text-7xl">Habits</h1>
    
      <img class="lg:m-auto md:w-auto" src="../img/Couch.png">
    
  </div>
  </section>
  

    <div class="flex justify-center">
	<a href="../admin/login" class="w-4/5 text-sm  text-center bg-blue-600 uppercase  text-white font-bold rounded-full border shadow-lg py-4 px-20 hover:bg-blue-800 transition ease-in-out duration-500 sm:w-6/12 lg:text-2xl lg:w-96">
		login
	</a>
</div>

 
  <div class="mt-5 mb-7 flex items-center justify-center">
    <a href="../admin/register" class="text-xs w-4/5 text-center bg-white uppercase  text-gray-600 font-bold rounded-full border shadow-lg py-2 px-20 hover:bg-blue-100 transition ease-in-out duration-500 sm:w-6/12 lg:text-xl lg:w-96">
      sign up
    </a>
    </div>

    

  
    
</body>
</html>