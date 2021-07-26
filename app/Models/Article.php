<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['title', 'description', 'publishdate', 'created_at', 'updated_at'];

    public function comment()
    {
        return $this->hasMany('App\Models\Article', 'article_id', 'id');
    }
}
