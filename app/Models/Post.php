<?php

namespace App\Models;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Table Name
    protected $table = "posts";
    
    // Primary Key
    public $primarykey = "id";

    // Timestamp
    public $timestamp = true;

    // create relation ship
    public function user(){
        return $this->belongsTo('App\User');
    }
}
