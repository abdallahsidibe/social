<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
   

    protected $fillable = [
        'title', 
        'contenu'
    ];

    //une publication appartient à un seul user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
