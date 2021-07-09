@extends('layouts.web')

@section('content')

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-pink-400 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
            <div class="flex flex-col md:flex-row justify-content-center  bg-pink-400 py-8 p-10 ">
                    <div class=" flex flex-col md:flex-row>
                            <div class="md:flex-shrink-0">
                                <img class="h-781 w-full object-cover md:w-600" src="/img/desarrolladora1.png">
                            </div>
                <div class=" justify-content-center mx-auto w-full sm:max-w-md mt-6 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg">
                    <h1 class="font-bold text-3xl text-blue-800">Actualizar Publicaciones</h1>
                    <form 
                        action="{{ route('update',['post' => $post])}}" 
                        method = "post" 
                        enctype="multipart/form-data"
                        
                    >

                       <div class="form-group row">
                            <label class="font-bold text-l text-white">Titulo *:</label>
                            <div class="col-sm-10">
                              <input type="text" name="title" id="title" id="title" class="form-control w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required value="{{old('title',$post->title)}}">
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label font-bold text-l text-white">Extracto</label>
                           <div class="col-sm-10">
                             <input type="text" name ='extract' id="extract" rows="4" class="form-control w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" id="extract"  value="{{old('extract',$post->extract)}}> 
                            </div>
                        </div>
                        <div class="form-group  row custom-file font-bold text-l text-white">
                            <label class="font-bold text-l text-white">Imagen</label>
                            <div class="col-sm-10 font-bold text-l text-white">
                            <img src="{{Storage::url($post->image)}}" width="220" height="80" >
                            <input type="file" class="custom-file-input" name="image" accept="image/*" required>
                            <label class="custom-file-label" for="file" data-browse="Elige una imagen"><i class="far fa-file-image"></i> Elige una imagen</label>                           
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="body" class="font-bold text-l text-white">Contenido *:</label>
                            <div class="col-sm-10">
                             <textarea class="form-control w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="body" id="body" rows="6"  required>{{old('body',$post->body)}}</textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <h4 class="font-bold text-l text-white">Categorias: </h4>
                            <select name="category_id" id="category_id" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                @foreach($categories as $category)
                                    <option value="{{ $category['id']}}" >
                                        {{ $category['title']}}
                                    </option>
                                @endforeach
                            </select>
                        
                        </div>
                        <div class="form-group font-bold text-l text-white">
                            <p class="font-bold text-l text-white">Estado</p>
                            <input type="radio"  name="status" value=" {{old('status',$post->status)}} ">
                                Borrador
                            </label>

                            <label class="mr-2">
                            <input type="radio"  name="status" value="{{old('status',$post->status)}}">
                                Publicar
                            </label>

                            @error('status')
                            <br>
                            <small class="text-danger">{{$message}}</small>
                            @enderror

                        </div
                        <div class="form-group text-center col-sm-12 ">
                                @csrf
                               
                           
                        <input type="submit" value="Actualizar" class="py-2 px-4 w-50 h-9 bg-purple-700 text-white font-semibold rounded-lg shadow-md hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 ml-4">
                        </div>
                    </form>        
               
              </div>
          
          </div>
            
      </div>   
   </div>
</div>

            </div>
        </div>
    </div>



             
@endsection