<!-- component -->
<div class="w-full md:w-2/1 px-4 py-4 bg-pink-300 rounded-lg shadow-lg flex flex-col sm:flex-row gap-5 select-none">
    
    <div class="rounded-xl bg-cover ">
     <img src="{{ Storage::url($post->image)}}"  class="img-responsive wp-post-image"  height="350" width="300">
    </div>
    <div class="flex sm:flex-1 flex-col gap-2 p-1">
        <h1 class="text-lg sm:text-xl font-semibold  text-blue-800">
           {{$post->title}}
        </h1>
        <p class="text-white text-sm sm:text-base line-clamp-3">
         {{$post->body}}
        </p>

         <p class="text-muted mb-0 text-white my-5">
            Publicado por:
            <br>
            <em>
                &ndash;{{$post->user->name}}
              </em>
              {{$post->created_at->format('d M Y')}}
            </p>
        <div class="flex gap-4 mt-auto">
        
         <button
            class='ml-auto flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1  bg-purple-700 text-white font-semibold rounded-lg shadow-md hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75'
        >
           <a href="{{route('post', $post)}} "> <span>Leer Más</span> </a>
        </button>
        </div>
    </div>
</div>