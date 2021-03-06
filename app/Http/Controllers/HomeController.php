<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Postulante;
use App\PostulantePregunta;
use Session;
use GuzzleHttp\Exception\GuzzleException;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function create(Request $request)
    {

        if ($request->input('cedula')) {
            $existe = Postulante::where('ci',$request->input('cedula'))->get();
            if($existe->count() >= 1){
                Session::flash('error', 'Ya existe el postulante!');
                return redirect()->back();
            }

        /*$expediente = SIG005::where('NroExp',$request->input('NroExp'))
        ->where('NroExpS','A')
        ->first();

        $historial = SIG006::where('NroExp',$request->input('NroExp')/*$idexp 1803411)
        ->where('NroExpS','A'/*$request->input('NroExpS'))
        ->orderBy('DENroLin', 'asc')
        ->get();
        $nroexp = $request->input('NroExp');
            return view('home',compact('expediente','historial','nroexp'));*/
            $headers = [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ];

            $GetOrder = [
                'username' => 'senavitatconsultas',
                'password' => 'S3n4vitat'
            ];
            $client = new client();
            $res = $client->post('http://10.1.79.7:8080/mbohape-core/sii/security', [
                'headers' => $headers,
                'json' => $GetOrder,
                'decode_content' => false
            ]);
            //var_dump((string) $res->getBody());
            $contents = $res->getBody()->getContents();
            $book = json_decode($contents);
            //echo $book->token;
            if($book->success == true){
                //obtener la cedula
                $headerscedula = [
                    'Authorization' => 'Bearer '.$book->token,
                    'Accept' => 'application/json',
                    'decode_content' => false
                ];
                $cedula = $client->get('http://10.1.79.7:8080/frontend-identificaciones/api/persona/obtenerPersonaPorCedula/'.$request->input('cedula'), [
                    'headers' => $headerscedula,
                ]);
                $datos=$cedula->getBody()->getContents();
                $datospersona = json_decode($datos);
                if(isset($datospersona->obtenerPersonaPorNroCedulaResponse->return->error)){
                    //Flash::error($datospersona->obtenerPersonaPorNroCedulaResponse->return->error);
                    Session::flash('error', $datospersona->obtenerPersonaPorNroCedulaResponse->return->error);
                    return redirect()->back();
                }else{
                    $nombre = $datospersona->obtenerPersonaPorNroCedulaResponse->return->nombres;
                    $apellido = $datospersona->obtenerPersonaPorNroCedulaResponse->return->apellido;
                    $cedula = $datospersona->obtenerPersonaPorNroCedulaResponse->return->cedula;
                    $sexo = $datospersona->obtenerPersonaPorNroCedulaResponse->return->sexo;
                    $fecha_nac = date('Y-m-d', strtotime($datospersona->obtenerPersonaPorNroCedulaResponse->return->fechNacim));
                    $nacionalidad = $datospersona->obtenerPersonaPorNroCedulaResponse->return->nacionalidadBean;
                    $est = $datospersona->obtenerPersonaPorNroCedulaResponse->return->estadoCivil;
                    $nroexp = $cedula;
                   // var_dump($datospersona->obtenerPersonaPorNroCedulaResponse);
                    return view('createform',compact('nroexp','cedula','nombre','apellido','fecha_nac','sexo',
                    'nacionalidad','est'));
                }

                //$nombre = $datos->nombres;
                //echo $cedula->getBody()->getContents();
            }else{
                Flash::success($book->message);
                return redirect()->back();
            }
        }else{

            $nroexp = '';
            return view('createform',compact('nroexp'));
        }

    }
    public function store(Request $request)
    {

       $input = $request->all();
           //return $input;
        var_dump($input);
        $existe = Postulante::where('ci',$request->ci)->get();
        if($existe->count() >= 1){
            Session::flash('error', 'Ya existe el postulante!');
            return redirect()->back();
        }
        $postulante = new Postulante();
        $postulante->ci=$request->ci;
        $postulante->nombre=$request->nombre;
        $postulante->apellido=$request->apellido;
        $postulante->sexo=$request->sexo;
        $postulante->fecha_nac=$request->fecha_nac;
        $postulante->nacionalidad=$request->nacionalidad;
        $postulante->celular=$request->celular;
        $postulante->email=$request->email;
        $postulante->vivienda_actual=$request->vivienda_actual;
        $postulante->trab_nombre=$request->trab_nombre;
        $postulante->trab_direccion=$request->trab_direccion;
        $postulante->integrante_fliar=$request->integrante_fliar;
        $postulante->numero_aport=$request->numero_aport;
        $postulante->ingreso_fliar=$request->ingreso_fliar;
        $postulante->vivienda_deseada=json_encode($request->vivienda_deseada);
        $postulante->cantidad_dor=$request->cantidad_dor;
        $postulante->save();

        $data = $request->except('_token','id');
        for ($i=1; $i < 3 ; $i++) {
            $question = new PostulantePregunta;
            $question->pregunta_id = $i;
            $question->postulante_id = $postulante->id;
            $question->value = $data['q'.$i];
            $question->text_value = $data['q'.$i.'_text'];
            $question->save();
        }

        Session::flash('message', 'Se ha inscripto Correctamente!');
        return redirect()->route('inicio');
        //var_dump($request->all());
        //return "hola";


        //
    }
}
