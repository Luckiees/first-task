<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'postModels';
    protected $fillable = ['content'];//fillable = 크기가 정해진 값보다 더 커도 허용
}
$postModels = Post::find($request->id);
