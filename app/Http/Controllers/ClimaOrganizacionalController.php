<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\preguntas;
use App\Models\userRespuestas;
use App\Models\userResPreg;
use Illuminate\Support\Facades\DB;

class ClimaOrganizacionalController extends Controller
{
    public function __construct()
    {
        // Permiso solo Personal dado de alta en BD interna
        // $this->middleware(['auth', 'guest.session']);
    }


    public function index()
    {
        $area = \App\Models\area::where('edo',1)->get();
        $areaSec = \App\Models\area::where('edo',1)->get();
        $subArea = \App\Models\subareas::where('edo',1)->get();
        $subAreaSec = \App\Models\subareas::where('edo',1)->get();
        $categoriaPersonal = \App\Models\categoriaPersonal::where('edo',1)->get();
        $categoriaPersonalSec = \App\Models\categoriaPersonal::where('edo',1)->get();
        $discapacidades = \App\Models\discapacidades::where('edo',1)->get();

        $genero = \App\Models\generos::where('edo',1)->get();
        $grupoEdad = \App\Models\rangoEdad::where('edo',1)->get();
        $anosServ = \App\Models\anosServicio::where('edo',1)->get();

        // dd($preguntasd);

        return view('infoinicial', compact('area', 'areaSec', 'subArea', 'subAreaSec', 'categoriaPersonal', 'categoriaPersonalSec', 'genero', 'grupoEdad', 'anosServ', 'discapacidades'));
    }

    public function store(Request $request)
    {

        // Validacion
        $data = request()->validate([
            'evDir' => 'required',
            'evSub' => 'required',
            // 'evClas' => 'required',
            'adDir' => 'required',
            'adSub' => 'required',
            'adClas' => 'required',
            'adGenero' => 'required',
            'adGruEd' => 'required',
            'adAnSer' => 'required',
            'adDiscapacidad' => 'required'
        ],[
            'evDir.required' => 'Por favor, tienes que seleccionar dirección a evaluar',
            'evSub.required' => 'Por favor, tienes que seleccionar subdirección a evaluar',
            // 'evClas.required' => 'Por favor, tienes que seleccionar una clasificación a evaluar',
            'adDir.required' => 'Por favor, tienes que seleccionar dirección adscrito',
            'adSub.required' => 'Por favor, tienes que seleccionar subdirección adscrito',
            'adClas.required' => 'Por favor, tienes que seleccionar una clasificación de adscrito',
            'adGenero.required' => 'Por favor, tienes que seleccionar tu genero',
            'adGruEd.required' => 'Por favor, tienes que seleccionar tu grupo de edad',
            'adAnSer.required' => 'Por favor, tienes que seleccionar tus años de servicio',
            'adDiscapacidad.required' => 'Por favor, tienes que seleccionar una opción',
        ]);
        
        $folio = $this->generarCodigo();
        // inputDiscapacidad
        $newEncuesta = array(
            'folioAtencion' => $folio,
            'adscritoDir_id' => $request['evDir'],
            'adscritoArea_id' => $request['evSub'],
            // 'adscritoG_id' => $request['evClas'],
            'apliEvDir_id' => $request['adDir'],
            'apliEvArea_id' => $request['adSub'],
            'apliEvG_id' => $request['adClas'],
            'generos_id' => $request['adGenero'],
            'rangoEdad_id' => $request['adGruEd'],
            'anosServicio_id' => $request['adAnSer'],
            'discapacidad' => $request['adDiscapacidad'],
            'otrodiscapacidad' => $request['inputDiscapacidad'],
            'tiempoRealizado'  => null
        );

        $preguntas = preguntas::where('edo',1)
            ->where('evento_id',1)->get();
        // return response()->json($newEncuesta);
        //
        Session::flush();
        Session::put('inicioEncuesta', $newEncuesta);
        // Session::put('preguntasTodas', $preguntas);
        return response()->json(['edo'=> true,
                                'preguntas'=> $preguntas
                                ]);
    }

    public function pregun()
    {
        // return view('infoinicial', compact('area', 'areaSec', 'subArea', 'subAreaSec', 'categoriaPersonal', 'categoriaPersonalSec', 'genero', 'grupoEdad', 'anosServ'));
        return view('preguntas');
            
    }
    
    public function findSub(Request $request)
    {
        $director = $request['find'];
        $info= array();
        $info['subArea'] = \App\Models\subareas::where('edo',1)->where('areas_id', $director)->get();

        for($i = 0; $i < count($info['subArea']); $i++) {
            $info['subArea'][$i]->clave = number_format($info['subArea'][$i]->clave, 1);
        }
        return response()->json($info);
            
    }

    public function findSubG($id)
    {
        $director = $id;
        $info= array();
        $info['subArea'] = \App\Models\subareas::where('edo',1)->where('areas_id', $director)->get();

        for($i = 0; $i < count($info['subArea']); $i++) {
            $info['subArea'][$i]->clave = number_format($info['subArea'][$i]->clave, 1);
        }
        return response()->json($info);
            
    }

    public function save(Request $request)
    {
        $folioAtencion = $request->session()->get('inicioEncuesta')['folioAtencion'];
        $adscritoDir_id = $request->session()->get('inicioEncuesta')['adscritoDir_id'];
        $adscritoArea_id = $request->session()->get('inicioEncuesta')['adscritoArea_id'];
        // $adscritoG_id = $request->session()->get('inicioEncuesta')['adscritoG_id'];
        $apliEvDir_id = $request->session()->get('inicioEncuesta')['apliEvDir_id'];
        $apliEvArea_id = $request->session()->get('inicioEncuesta')['apliEvArea_id'];
        $apliEvG_id = $request->session()->get('inicioEncuesta')['apliEvG_id'];
        $generos_id = $request->session()->get('inicioEncuesta')['generos_id'];
        $rangoEdad_id = $request->session()->get('inicioEncuesta')['rangoEdad_id'];
        $anosServicio_id = $request->session()->get('inicioEncuesta')['anosServicio_id'];
        $discapacidad = $request->session()->get('inicioEncuesta')['discapacidad'];
        $otrodiscapacidad = $request->session()->get('inicioEncuesta')['otrodiscapacidad'];
        $tiempoRealizado = $request->session()->get('inicioEncuesta')['tiempoRealizado'];        

        try {
            // Comenzar transacción
            DB::beginTransaction();

            // Crear img
            $nuevoInicio = userRespuestas::create([
                'folioAtencion' => $folioAtencion,
                'adscritoDir_id' => $adscritoDir_id,
                'adscritoArea_id' => $adscritoArea_id,
                // 'adscritoG_id' => $adscritoG_id,
                'apliEvDir_id' => $apliEvDir_id,
                'apliEvArea_id' => $apliEvArea_id,
                'apliEvG_id' => $apliEvG_id,
                'generos_id' => $generos_id,
                'rangoEdad_id' => $rangoEdad_id,
               'anosServicio_id' => $anosServicio_id,
               'discapacidades_id' => $discapacidad,
               'otraDicapacidad' => $otrodiscapacidad,
            ]);
            
            for($i = 0; $i < count($request['Answer']); $i++){
                userResPreg::create([
                    'userRespuestas_id' => $nuevoInicio->id,
                    'preguntas_id' => $i+1,
                    'respuestas_id' => $request['Answer'][$i],
                ]);
            }

            // Finalizar transacción
            DB::commit();

                return response()->json(['edo'=> true,
                                        'nuevo'=> $nuevoInicio->id
                                        ]);
        } catch (\Throwable $th) {
            // Tipo de mensaje
            if (env('APP_DEBUG')) {
                $msg = $th->getMessage();
            } else {
                $msg = 'Hubo un problema con tu petición - (Artículo - Guardar)';
                return response()->json(['edo'=> false,
                                'msg'=> $msg,
                                ]);
            }

            return response()->json(['edo'=> false,
                                'msg'=> $msg,
                                ]);
        }
        
        
            
    }

    private function generarCodigo()
    {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern) - 1;
        for ($i = 0; $i < 13; $i++) $key .= $pattern[mt_rand(0, $max)];

       return strtoupper('CO'.$key);
    }

    public function getQuestion()
    {
        $preguntas = preguntas::where('edo',1)
            ->where('evento_id',1)->get();
        
        return response()->json(['edo'=> true,
                                'preguntas'=> $preguntas
                                ]);
    }
}
