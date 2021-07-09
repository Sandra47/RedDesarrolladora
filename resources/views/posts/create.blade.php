@extends('layouts.web')

@section('content')

<div class="py-12 ">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-pink-400 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container">
                <div class="flex flex-col md:flex-row justify-content-center  bg-pink-400 py-8 p-10 ">
                  <div class=" flex flex-col md:flex-row>
                        <div class="md:flex-shrink-0">
                            <img class="h-781 w-full object-cover md:w-600" src="/img/desarrolladora1.png">
                        </div>
                        <div class=" justify-content-center mx-auto w-full sm:max-w-md mt-6 px-6 py-4   shadow-md overflow-hidden sm:rounded-lg">
                            <h1 class="font-bold text-3xl text-blue-800 mb-9">Que deseas Publicar?</h1>
                            <form 
                                action="{{ route('post.store') }}" 
                                method = "post" 
                                enctype="multipart/form-data"
                                >

                                <div class="form-group row">
                                    <label class=" block font-bold text-l text-white">Titulo *:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" id="title" class="form-control w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Titulo" required>
                                    </div>
                                </div>  
                                <div class="form-group row">
                                   <label class="col-sm-2 col-form-label font-bold text-l text-white ">Extracto</label>
                                    <div class="col-sm-10">
                                        <input type="text" rows="3" w-full name ='extract' class="form-control w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" id="extract" > 
                                    </div>
                                </div>
                                <div class="form-group custom-file font-bold text-l text-white">
                                    <label class="font-bold text-l text-white" >Imagen</label>
                                    <div class="col-sm-10">
                                    <input type="file" class="custom-file-input w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="image" accept="image/" required>
                                    <label class="custom-file-label" for="file" data-browse="Elige una imagen"><i class="far fa-file-image"></i> Elige una imagen</label>                           
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="body" class="font-bold text-l text-white">Contenido *:</label>
                                    <div class="col-sm-10">
                                    <textarea class="form-control w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="body" id="body" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group  ">
                                    <h4 class="font-bold text-l text-white">Categorias: </h4>
                                    <select name="category_id" id="category_id" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                        @foreach($categories as $category)
                                        <option value="{{ $category['id']}}">
                                            {{ $category['title']}}
                                        </option>
                                        @endforeach
                                    </select>
                                            
                                </div>
                                <div class="form-group mb-auto text-white">
                                    <p class="font-bold text-l text-white">Estado</p>
                                    <label class="mr-2">
                                    <input type="radio"  name="status" value="Borrador" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 ">
                                    Borrador
                                    </label>
                                    <label class="mr-2">
                                        <input type="radio"  name="status" value="Publicar" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 ">
                                        Publicar
                                    </label>
                                    @error('status')
                                    <br>
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror

                                </div
                                <div class="form-group text-center col-sm-12 py-8 mr-10 ">
                                    @csrf
                                <a href="javascript: history.go(-1)" class="py-2 px-4 w-50 h-9 bg-purple-700 text-white font-semibold rounded-lg shadow-md hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 ml-4">CANCELAR</a>        
                                    <input type="submit" value="ENVIAR" class="py-2 px-4 w-50 h-9 bg-purple-700 text-white font-semibold rounded-lg shadow-md hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 ml-4">
                                </div>
                                                
                            </form>        
                        </div>                          
                    </div>
                </div>   
            </div>
        </div>

    </div>
</div>



             
@endsection