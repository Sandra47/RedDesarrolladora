@extends('layouts.web')
@section('content')

  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-pink-400 overflow-hidden  pb-6 py-5 px-3 shadow-xl sm:rounded-lg">
                <div class="card-header justify-center">
                     <h1 class=" title-font  text-blue-900 text-center mb-auto text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">
                       Publicaciones de Eventos
               </div>
               <div class= "py-5 px-12 justify-center sm:px-2 sm:py-5">                     
                   @foreach($posts as $post)
                     <x-post-card :post="$post" />
                        <br>
                   @endforeach
                </div>
        
                <!-- metodo de paginacion -->
                {{$posts->links()}}
             
            </div>
        </div>
    </div>
                                
@endsection