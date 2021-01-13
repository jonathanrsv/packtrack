<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'moradores';
    protected $dates = ['deleted_at'];


    public function unidade()
    {
        return $this->belongsTo('App\Models\Unidade');
    }
}
