<div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
   <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="{{ Storage::url($post->image)}}">
      <div class="flex items-center">
          <h5 class="card-title">{{$post->title}}</h5>
         
      </div>
      <p class="text-sm text-gray-700 mt-4">
        {{$post->extract}}
      </p>
       <p class="text-muted mb-0">
         <em>
            &ndash;{{$post->user->name}}
          </em>
          {{$post->created_at->format('d M Y')}}
        </p>
      <div class="flex items-center justify-end mt-4 top-auto">
         <form action="{{ route('destroy',['post' => $post])}}" method = "post" >
            @csrf
            @method('delete')  
            <input type="submit" onclick="return confirm('¿quieres borrar el post?')" value="Borrar" class="py-2 px-4 w-50 h-9 bg-purple-700 text-white font-semibold rounded-lg shadow-md hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 ml-4">
          </form>
         <button class="bg-white text-red-500 px-4 py-2 rounded mr-auto hover:underline">
          Delete
         </button>
         <button class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">
            <a href=" {{route('edit',['post' => $post])}}">Editar</a> 
         </button>
         
         <button class=" bg-blue-600 text-gray-200 px-2 py-2 rounded-md ">Publish</button>
      </div>
   </div>
</div>  
