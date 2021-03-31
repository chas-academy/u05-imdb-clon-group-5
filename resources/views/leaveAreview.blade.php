<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://unpkg.com/tailwindcss@1.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>

<!--
///////////////////////////////////////
//                                   //
// Mobile: Mehrdad Amini             //
//                                   //
// Desktop: Tatjana Albairmani       //
//                                   //
///////////////////////////////////////
-->

<body class="overflow-x-hidden relative m-auto bg-gray-900">
    
    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <form class="card-body" action="/search" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." name="q">
                <span class="input-group-btn">
            <button class="btn btn-secondary" type="submit">Go!</button>
          </span>
            </div>
        </form>
    </div>
    
  <div class="max-w-md mx-auto bg-gray-800 shadow-md overflow-hidden md:max-w-4xl  mt-16 my-14 rounded">
    <div class="md:flex ">
      ​
      <!--Movie image  -->
      <div class="md:flex-shrink-0">
        <img class="h-48 object-cover md:w-32 ml-11 mt-7 m-8" src="https://i.pinimg.com/originals/81/d9/2c/81d92c64af7bb4879cb1f2f6561e9c69.jpg" alt="Profile picture">
      </div>

      <!-- Movie title / your rating -->
      <div class="p-10">
        <div class="font-inter text-base md:text-5xl -mt-4 font-bold text-white">Home Front (2013)</div>
        <div class="uppercase font-poppins text-base md:text-sm  font-light text-white pt-2">Your rating</div>

        <!-- Rating stars -->
        <div class="flex col-span-2 m-auto py-2">
          <svg class="w-5 h-5 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
          </svg>
          <svg class="w-5 h-5 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
          </svg>
          <svg class="w-5 h-5 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
          </svg>
          <svg class="w-5 h-5 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
          </svg>
          <svg class="w-5 h-5 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
          </svg>
          <svg class="w-5 h-5 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
          </svg>
          <svg class="w-5 h-5 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
          </svg>
          <svg class="w-5 h-5 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
          </svg>
          <svg class="w-5 h-5 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
          </svg>
          <svg class="w-5 h-5 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
          </svg>
        </div>
        ​
        <!-- Your review-->
        <div class="uppercase font-inter text-base md:text-2xl font-regular text-white  mt-10 pt-10">Your review</div>
        <div class="col-span-2 m-auto">
          <form class="md:w-screen  md:w-screen max-w-xl">
            <div class="flex flex-wrap -mx-3">
              <div class="w-screen ml-3  mr-3">
                <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-password"></label>
                <input class="appearance-none block w-full bg-white text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" placeholder="Add a headline for your reviews here ...">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3">
              <div class="w-full ml-3 mr-3">
                <label class="block uppercase tracking-wide text-black text-xs font-bold " for="grid-password"></label>
                <textarea class=" no-resize appearance-none block w-full bg-white text-black border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-56 resize-none" id="message" placeholder="Write your reviews here ..."></textarea>
                <p class="text-gray-600 text-xs medium font-poppins"></p>
              </div>
            </div>
            <div class="md:flex md:items-center">
              <button class="w-full shadow bg-white hover:bg-teal-400 focus:shadow-outline focus:outline-none text-black font-inter text-base md:text-2xl font-extrabold py-2 -mb-4 rounded" type="button">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>