
<div class="min-h-screen flex flex-col md:flex-row sm:justify-center  items-center pt-6 sm:pt-0 bg-gradient-to-r from-purple-400 via-pink-400 to-pink-500">
 <div>
     <img class="h-781 w-full object-cover md:w-full sm:flex-1 " src="/img/desarrolladora1.png">
  </div>

  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0"> 
        <div>
            {{ $logo }}
        </div>

        <div class="md:flex-shrink-0  w-full sm:max-w-md mt-6 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
   
</div>  
