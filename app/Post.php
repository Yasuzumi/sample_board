<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'content', 'title', 'image'
    ];
    
     public function category(){
      // 投稿は1つのカテゴリーに属する
      return $this->belongsTo(\App\Category::class,'category_id');
    }
    
      public function user(){
      return $this->belongsTo(\App\User::class,'user_id');
    }
   
}