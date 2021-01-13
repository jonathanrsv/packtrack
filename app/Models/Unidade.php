<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;

    public function condominio()
    {
        return $this->belongsTo('App\Models\Condominio');
    }

    
   
}
