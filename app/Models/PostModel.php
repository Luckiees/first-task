<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class postModel extends Model
{
    // protected $guarded = ['uid'];
    protected $fillable = ['title', 'content'];
}
