
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
      <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-purple-400 via-pink-400 to-pink-500">
                        <!-- component -->
          <section class="text-white body-font text-xl">
               <div class="block lg:flex lg:space-x-2  sm:px-4 px-2 py-12 mb-10">
                            <img class="h-700 w-full  bg-auto object-cover md:w-600" src="/img/desarrolladora1.png">
                    <div class="bg-pink-400 py-4 px-8 font-semibold rounded-lg ">
                        <p font-size:50 text-center  > 
                            Somo una comunidad para unirnos y apoyar diferentes mujeres interesadas en el lenguaje de la programación que desean saber más en este campo.
                            <br>
                            Encontraras aquí cursos que les puede ayudar a fortalecer sus conocimientos y
                            historias facinantes de mujeres que han marcado a historia,      
                            eventos y noticias que impactaran tu vida suscribete y has parte de esta comunidad y comienza tambien a cambiar y aportar para que muchas mujeres se animen y sigan adelanten con esta habilidad que tenemos cada una de nosotras en el desarrollo web
                            <br>  
                            Cada vez son más los eventos y conmemoraciones donde se reconocen las capacidades, liderazgo y aptitudes de las mujeres.
                            <br >
                            Si tenes un curso, historias y eventos que nos puede interesar puedes publicarlo y comentar de los que ya estan pulicado 
          
                        </p>    
                                
                    </div>
                </div>
            </section>

                 
        </div>

         <!-- footer -->
        <x-footer />
                @stack('modals')

        @livewireScripts

    </body>
</html>