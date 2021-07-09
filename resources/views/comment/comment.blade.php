@extends('layouts.web')

@section('content')

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
   <div class="row justify-content-center py-8 p-10">
      <div class="col-md-8">
          <div class="card">
              <div class="card-body">
                    <form 
                        action="{{ route('store') }}" 
                        method = "post" 
                        enctype="multipart/form-data"
                        
                    >
                       
                        <div class="form-group">
                            <label for="body" class="font-weight-bold">Contenido *:</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="body" id="body" rows="6" required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group text-center col-sm-12 ">
                                    @csrf

                            <a href="javascript: history.go(-1)" class="btn btn-success">CANCELAR</a>        
                        <input type="submit" value="Enviar" class="btn btn-outline-primary col-2 btn-lg">
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