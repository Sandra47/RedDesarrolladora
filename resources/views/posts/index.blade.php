@extends('layouts.web')
@section('content')
<div class="container py-5">
  
   <div class=" mr-6 ml-6 px-2 py-12 h-full  bg-pink-400 overflow-hidden shadow-xl sm:rounded-lg">
        <div class="card-header justify-center ">
                <h1 class=" title-font text-blue-800 text-center mb-auto text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">
                   Tus Publicaciones
                </h1>
               <div class="flex items-center px-12 py-2 mx-4  bg-pink-300 mr-4 ">
                   <h2 class="text-white">crea tus publicaciones aquí:</h2>
                   <x-jet-button  class=" justify-center py-2 mr-90 px-90 w-50 h-9 bg-purple-700 text-white font-semibold rounded-lg shadow-md hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 ml-4"> 
                        <a href=" {{route('create')}}">Crear</a> 
                    </x-jet-button>
                </div>
                    
        </div>
        <div class="w-full py-1 sm:px-4 sm:py-5 ">
            @foreach($posts as $post)
             <div class="w-full md:w-2/1 px-4 py-4 bg-pink-300 rounded-lg shadow-lg flex flex-col sm:flex-row gap-5 select-none">
                   <img class="h-full w-full md:w-1/3  rounded-lg rounded-r-none pb-5/6" src="{{ Storage::url($post->image)}}">
                    <div class="w-full md:w-2/3  px-4 py-4 bg-pink-300 rounded-lg">
                        <div class="flex items-center">
                            <h5 class="card-title text-xl text-blue-600">{{$post->title}}</h5>
                        </div>
                        <p class="text-sm text-blue-50 mt-4 ">
                            {{$post->body}}
                        </p>
                        <br>
                        <p class="text-muted mb-0 text-blue-600">
                            <em>
                                publicado por:
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
                            <x-jet-button class="py-2 px-4 w-50 h-9 bg-purple-700 text-white font-semibold rounded-lg shadow-md hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 ml-4"> 
                                <a href=" {{route('edit',['post' => $post])}}">Editar</a> 
                            </x-jet-button>
                        </div>
                    </div>
                </div>   
               <br>
            @endforeach
            
        </div>   
    </div>
</div>                                
@endsection