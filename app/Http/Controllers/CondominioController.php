<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condominio;
use App\Models\Unidade;
use App\Models\Morador;

class CondominioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function unidades_list()
    {
        $this->data['title_view'] = 'Lista de Unidades';
        $this->data['section'] = 'listaunidades';
        $this->data['unidades'] = Unidade::All();
        
        return view('condominio.unidades', $this->data);
    }
    public function unidades_create()
    {
        $dados = $request->except('_token');
        $bloco = $dados['bloco'];
        $unidade = $dados['unidade'];
        $condominio = $dados['condominio_id'];

        $unidade = new Unidade();
        $unidade->bloco = $bloco;
        $unidade->unidade = $unidade;
        $condominio->condominio_id = $condominio;

        $unidade->save();


    }
    public function morador_cadastrar()
    {
        $this->data['moradores'] = Morador::All();
        $this->data['title_view'] = 'Cadastro de Morador';
        $this->data['section'] = 'cadmorador';

       
        return view('condominio.morador_cad', $this->data);
    }
    public function moradores_list()
    {
        $this->data['moradores'] = Morador::All();
        $this->data['title_view'] = 'Lista de Moradores';
        $this->data['section'] = 'listamoradores';

       
        return view('condominio.moradores', $this->data);
    }
    public function morador_delete($id)
    {
        if( Morador::find($id)->delete()){
            return back()->with('success','Morador deletado!');
        }
        return back()->with('error','Tivemos um problema ao concluir essa ação');
    }
    public function moradores_create()
    {
       
    }

    
}
