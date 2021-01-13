<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Condominio;
use App\Models\Unidade;
use App\Models\Morador;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $data = array(
        'title_view' => '',
        'section' => 'd'
    );

    public function welcome()
    {
        
        /*
        
        $unidade = new Unidade();
        $unidade->unidade = '1108';
        $unidade->bloco = 'Unico';
        $unidade->condominio_id = 1;
        //$unidade->condominio()->associate($condo);
        $unidade->save();
        
         

        $morador = new Morador();
        $morador->name = 'Bruna';
        $morador->lastname = 'Borges';
        $morador->celphone = '1196d1565644';
        $morador->email = 'bruna@gdmail.com';
        $morador->unidade()->associate( $unidade);
        $morador->save();  
        */

        $this->data['title_view'] = 'Bem vindo';
        return view('welcome', $this->data);
    }
}
