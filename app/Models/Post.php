<?php

namespace App\Models;

use App\Models\comments;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','extract','image','body', 'status','user_id','category_id'
    ];

  
      //Relacion uno a muchos inverso
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
    return $this->hasMany(comments::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
