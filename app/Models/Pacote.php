<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    use HasFactory;

    public function unidade()
    {
        return $this->belongsTo('App\Models\Unidade');
    }
    public function morador()
    {
        return $this->belongsTo('App\Models\Morador');
    }

    
}
