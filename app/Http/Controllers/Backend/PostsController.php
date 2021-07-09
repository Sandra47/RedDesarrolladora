<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;



class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $posts = Post::where('user_id', auth()->user()->id)
        ->latest('id')
        ->paginate(4);
         return view('posts.index',compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        // return  $category;
        return view('posts.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Validamos que el nombre y el formato y el body de imagen esten presentes,
        $this->validate($request, [
        
            'title' => 'required|max:70',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body'=>'required|max:2000'

        ]); 

        $post=$request->all();

        if($request->hasFile('image')){
            $destination_path='public/image/posts';
            $image=$request->file('image');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('image')->storeAs($destination_path,$image_name);
           
        } $post['image']=$path;
        Post::create([
            'user_id'=> auth()->user()->id
        ]+$post);

        
        return redirect()->route('index')->with("success","Datos Guardados Correctamente"); 

 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //Retornamos la vista
       // compact('post')
       $categories=Category::all();

        return view('posts.edit', [
            'post'=>$post,
            'categories'=>$categories
            
            ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
        //
       


        // Validamos que el nombre y el formato de imagen esten presentes,
        $this->validate($request, [
        
            
            'title' => 'required|max:70',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body'=>'required|max:2000'

        ]); 

     

        if($request->hasFile('image')){
            $destination_path='public/image/posts';
            $image=$request->file('image');
            $image_name=$image->getClientOriginalName();
            $url=$request->file('image')->storeAs($destination_path,$image_name);
            
    
        }$post['image']=$url; 

  
        $post->update([
            'title'=> request('title'),
            'extract'=> request('extract'),
            'image'=> $url,
            'body'=>request('body'),
            'category_id'=>request('category_id'),
            'status'=>request('status')
        ]);
        $categories=Category::all();


        //  dd($request);
        // return view('index')->with("success","Datos Actulaizados Con exitos"); 
        return view('posts.edit', [
            'post'=>$post,
            'categories'=>$categories
            
            ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        //
        Post::destroy($post);
        return redirect()->route('index');
    }

    
    /*muestra todos los cursos*/
    
    public function course(){

        $posts = Post::where('category_id', '1')
        ->latest('id')
        ->paginate(8);
         return view('posts.course',compact('posts'));
        
    }
     /*muestra todos los eventos*/
    public function event(){

        $posts = Post::where('category_id', '2')
        ->latest('id')
        ->paginate(8);
         return view('posts.event',compact('posts'));
        
    }
     /*muestra todos las historias*/
    public function story(){

        $posts = Post::where('category_id', '3')
        ->latest('id')
        ->paginate(8);
         return view('posts.story',compact('posts'));
        
    }
     /*muestra todos los themas */
     public function themeNew(){

        $posts = Post::where('user_id', auth()->user()->id)
        ->latest('id');
         return view('dashboard',compact('posts'));
        
    }

}
