<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condominio;
use App\Models\Unidade;
use DB;

class ReportsController extends Controller
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
    public function pacotes_entregues()
    {
        $results = DB::table('pacotes')
        ->select(DB::raw("count(*) as user_count,  created_at"))
        ->groupBy('created_at')
        ->get();

        foreach ($results as $result) {
            echo $result->created_at;
        }

        
    }

    

    
}
