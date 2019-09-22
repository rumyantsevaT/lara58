<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
//    поля для массового заполнения при Eloquent create()
//это атрибуты, которые мы ПОЗВОЛЯЕМ массово прописывать
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

}
