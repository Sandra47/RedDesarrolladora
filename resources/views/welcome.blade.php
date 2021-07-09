<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RedDesarrolladoras</title>

        <!-- Fonts -->

        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Purple+Purse&display=swap" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


         @livewireStyles
       
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>


         <style>
            body {
                font-family: 'Purple Purse', sans-serif;
            }
        </style>


    </head>
    <body class="antialiased">
       <header class="fixed  display-flex w-full "> 
         <x-Menu />
       </header>       
        <div class="min-h-screen  flex flex-col sm:justify-center items-center pt-6 py-6  lg:p-20 bg-gradient-to-r from-purple-400 via-pink-400 to-pink-500">

            <div class="md:flex">
                <div class="md:flex-shrink-0 ">
                    <img class="lg:h-781 lg:w-full sm:h-96 sm:w-500 object-cover md:w-500" src="/img/desarrolladora1.png">
                </div>
                <div class="p-8 items-center">
                    <div class="justify-center pt-6 p-5 pl-20 sm:pt-0">
                        <img class="h-100 w-500 object-cover  " src="/img/logo.png">
                    </div>
                      <p class="uppercase tracking-wide lg:text-2xl sm:text-sm text-white font-semibold" >Somos una comunidad para Desarrolladoras una iniciativa para reducir la brecha de genero del sector TIC</p>
                       
                    <div class="justify-center pt-6 p-5 pl-20 sm:pt-0">
                        <button class="justify-center  py-2 px-6 w-50 h-9 bg-purple-700 text-white font-semibold rounded-lg shadow-md hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 ">
                         <a href="{{ route('register') }}" text-center col-sm-12 >Unete</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <x-footer />

        @stack('modals')


        @livewireScripts

    </body>
</html>
