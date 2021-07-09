@extends('layouts.web')

@section('content')
<div class="container">
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-10 lg:px-10 sm:pr-10">
      <div class="bg-pink-400 overflow-hidden shadow-xl sm:rounded-lg ">
         <div class="m-auto border-b-4 border-blue-900">
            
            <div class="px-6 py-12 bg-pink-400">
              <h2 class="font-bold text-4xl text-blue-800">{{$post->title}}</h2>

              <div class>
              <img src="{{ Storage::url($post->image)}}" class=" rounded-lg height="500" width="600" justify-center ">
              </div>
              <p class="sm:text-sm text-xs text-white px-2 mr-1 my-3">
                  {{$post->body}}
              </p>
              <div class="user flex items-center -ml-3 mt-8 mb-4">
                <div class="user-logo">
                   <img class="w-10 h-10 sm:w-12 sm:h-12 object-cover rounded-full mx-4  shadow" src="{{ Auth::user()->profile_photo_url }}" alt="avatar">
                </div>
                  <div class="text-white">
                    <p class="text-muted mb-0 text-white">
                      <h2>Publicado por</h2>
                      <em>
                      &ndash;{{$post->user->name}}
                      </em>
                      {{$post->created_at->format('d M Y')}}
                    </p>     
                  </div>
              </div>
            </div>
         
       </div>
        <div class="text-white border-b-4 border-blue-900 px-4 py-2 mt-2">
            @forelse ($post->comments as $comment)
              <p class="text-blue-900 ">{{$comment->user->name}} {{$comment->created_at}}</p>
              <p >{{$comment->content}}</p>
              <hr>
              @empty
              <p>Esta publicacion no tiene comentarios</p>
            @endforelse
        </div>


        <div class="card-body px-4 py-2 mt-2">
          <form 
            action="{{ route('comment.store', $post) }}" 
            method = "post" 
            enctype="multipart/form-data"  
          >
            <div class="form-group">
              <label for="body" class="font-weight-bold text-white">Comentario:</label>
              <div class="col-sm-10">
                <textarea class="form-control w-full" name="content" id="content" placeholder="comentar" required></textarea>
              </div>
            </div>
            <div class="form-group">
              @csrf
              <input type="submit" value="Enviar" class="py-2 px-4 w-50 h-9 bg-purple-700 text-white font-semibold rounded-lg shadow-md hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 ml-4">
            </div>
          </form>        
               
        </div>
      </div>
    </div>

  </div>   
 
  
</div>
                              
@endsection