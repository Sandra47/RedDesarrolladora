<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\comments;

class ShowPosts extends Component
{
 use WithPagination;

    public $title, $slug, $extract, $body, $status;

    public $view ='create';
    
    public function render()
    {
        return view('livewire.show-posts',[
            'posts' => Post::orderBy('id','desc')->paginate(4)
        ]);
    }

















    

    // public function getPost($id) {
   
    //     $post = Post::find($id);
    //     if($post == null)
    //         return 'No existe el post';
    //     else {
    //         $data['post'] = $post;
    //         $data['comments'] = comments::where('post_id', $id)->get();
    //         return view('post', $data);
    //     }
    //  }
    //  public function getDeletecomment($id) {
    //     $comment = comments::find($id);
    //     if($comment == null)
    //         return 'El comentario no existe';
    //     else
    //         $comment->delete();
    //     return 'Comentario eliminado';
    //  }


    // public function store(){

    //     $this->validate([
 
    //         'title' => 'required',
    //         'extract'=>'required',
    //         'body'=> 'required',
    //         'status' => 'required'

 
    //     ]); 

    //      //salvar   
    //     Post::create([
    //         'title'=> $this->title,
    //         'slug'=> $this->slug,
    //         'extract'=> $this->extract,
    //         'body'=>$this->body,
    //         'status'=>$this->status,
    //         'user_id'=> auth()->user()->id
    //     ]);

        
    //     // return view('livewire.show-posts');
    // }

    // public function destroy($id){
    //     Post::destroy($id);


    // }
}
