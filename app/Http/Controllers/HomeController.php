<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condominio;
use App\Models\Unidade;

class HomeController extends Controller
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
    public function index()
    {
        $this->data['title_view'] = 'Inicio';
        return view('home', $this->data);
    }

    public function checkin()
    {
        $this->data['title_view'] = 'Checkin - Entrada de Mercadorias';
        $this->data['section'] = 'checkin';
        return view('checkin.checkin', $this->data);
    }

    public function checkout()
    {
        

        $this->data['title_view'] = 'Checkin - Entrada de Mercadorias';
        $this->data['section'] = 'checkout';
        return view('checkout.checkout', $this->data);
    }

    
}
