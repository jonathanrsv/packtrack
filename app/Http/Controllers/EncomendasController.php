<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Unidade;
use App\Models\Pacote;
use App\Models\Morador;

class EncomendasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
        
    }
    public function checkin()    
    {       
        $this->data['unidades'] = Unidade::All();
        $this->data['moradores'] = Morador::All();
        $this->data['title_view'] = 'Checkin - Entrada de Mercadorias';
        $this->data['section'] = 'checkin';
        return view('encomendas.checkin', $this->data);
    }

    public function checkout()
    {
        $this->data['encomendas'] = Pacote::where('status', '=', 'Aguardando Retirada')->orderBy('created_at', 'ASC')->get();
        $this->data['title_view'] = 'Checkout - Entrega de Mercadorias';
        $this->data['section'] = 'checkout';
        return view('encomendas.checkout', $this->data);
    }

    public function realizar_checkout($id)
    {
        $this->data['encomenda'] = Pacote::find($id);        
        $this->data['title_view'] = 'Realizar Checkout';
        $this->data['section'] = 'realizarcheckout';
        return view('encomendas.docheckout', $this->data);
    }

    public function do_checkout($id, Request $request)
    {
        $dados = $request->except('_token');
        $pacote = Pacote::find($id);
        $pacote->status = 'Entregue';
        $pacote->nome_recebedor = $dados['nome_recebedor'];
        $pacote->doc_number_recebedor = $dados['doc_recebedor'];
        $pacote->save();

        return back()->with('success','Pacote entregue com sucesso!');
        return redirect()->route('realizarcheckout');
    }

    public function geral()
    {
        $this->data['encomendas'] = Pacote::All();
        $results = DB::table('pacotes')
        ->select(DB::raw("count(*) as user_count,  created_at"))
        ->groupBy('created_at')
        ->get();
        $this->data['graph_timelines'] =  $results;
      
        $this->data['title_view'] = 'Checkout - Entrada de Mercadorias';
        $this->data['section'] = 'encomendasgeral';
        return view('encomendas.geral', $this->data);
    }

    public function unidades_json(Request $request){
        $qry = $request->get('q');
        $unidades =  Unidade::where('unidade', 'like', '%'.$qry.'%')->get();
        $json_normalized =  array( );

        foreach ($unidades as $unidade) {
            array_push($json_normalized, (object) ['value' => $unidade->id, 'text' => $unidade->unidade]);
        }
        
        return $json_normalized;
        
    }

    public function create(Request $request)
    {
        $pacote = new Pacote();
        $dados = $request->except('_token');
        $code = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, '5');
        if( $dados['base_img'] != ""){
            
            
            $file_data = $dados['base_img'];
            $file_data = str_replace('data:image/jpeg;base64,', '', $file_data);
            $file_name = 'image_package_' . Str::random(40) . '.jpeg';
            
            if ($file_data != "") { 
                Storage::disk('local')->put($file_name, base64_decode($file_data));
            }
            $pacote->urlimg =  $file_name;
        }
        
        
        $unidademorador = explode('-', $request->input('unidademorador')); 
        $pacote->unidade_id = $unidademorador[0];
        $pacote->obs = $dados['obs'];
        $pacote->code = $code;
        $pacote->ref_pacote = $dados['refpacote'];
        $pacote->morador_id = $unidademorador[1];        
        $pacote->status =  'Aguardando Retirada';

        if($pacote->save()){
            $morador = Morador::find($unidademorador[1]);
            $sms_msg = 'Olá, sua encomenda chegou no LifePark, favor retirar na administração. Codigo de retirada: ' . $code;
            $res_sms = json_decode ($this->send_sms($morador->celphone, $sms_msg));
            
            if($res_sms->situacao == "OK"){    
                $pacote->notified_at = Carbon::now()->toDateTimeString();  
                $pacote->save();
            }
            return back()->with('success','Pacote adicionado com sucesso!');
        }

        return back()->with('error','Erro ao adicionar');
    }

    // Metodo temporario p/ fins de testes...
    public function send_sms($number,$msg){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.smsdev.com.br/v1/send?refer=packtrack&key=&type=9&number=" .$number . "&msg=".urlencode($msg),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return  "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
}
