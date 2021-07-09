<div class="font-sans sm:px-4">
    
<h1 class="font-sans text-lg uppercase  text-indigo-50 bg-blue-600 mb-10 text-center"> PUBLICACIONES</h1>

  @foreach($posts as $post)
  
    <x-post-card :post="$post" />

  <br>
  @endforeach
 
  {{$posts->links()}} 
</div>
