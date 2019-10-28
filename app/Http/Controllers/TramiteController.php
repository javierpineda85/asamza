<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tramite;
use App\Muni;
class TramiteController extends Controller
{

    public function online(){
      return view('tramites-online'); // utilizado solo para presentar link externos
    }

    public function agregar(){ // listado de munis para cargar el select
      $munis = Muni::all();
      $vac = compact("munis");
      return view('agregar-tramite',$vac);
    }


      public function listarTramite(){ //lista todos los tramites
        $tramites = Tramite::paginate(10);
        $munis = Muni::all();
        $vac=compact('tramites','munis');
        return view('listado-de-tramites',$vac);
      }

      public function listarPorMuni(Request $req ){ //lista todos los tramites por muni

        $name = strtoupper($req ->get('muni'));

        $id =  Muni::where('name','LIKE',"%$name%")->get('id'); dd($id);

        $tramites = Tramite::where('munis_id','=',$id)->get(); dd($tramites);
        $vac=compact("munis","tramites");
        return view('listado-de-tramites',$vac);

      }
}
