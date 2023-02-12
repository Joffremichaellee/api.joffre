<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICANDO = 2;

    //Relacion uno a muchos inversa
    Public function user(){
        return $this->belongsTo(User::class);
    }

    //Relacion uno a muchos inversa
    Public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion de muchos a muchos
    Public function tags(){
        return $this->belongsToMany(Tag::class);
    }   

    //Relacion uno a muchos polimorficas
    Public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }   
}
