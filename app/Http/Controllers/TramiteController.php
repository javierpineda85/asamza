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
      return view('/admin/tramites/agregar-tramite',$vac);
    }

    public function modificarTramite($id){
      $tramite = Tramite::find($id);
      $munis = Muni::all();
      //$tramite['muni_name']= Muni::join('tramites','munis.id', '=','tramites.munis_id')
      //                            ->select('munis.name')
      //                            ->get('name');
      dd($tramite);
      $vac=compact("tramite","munis");
      return view('/admin/tramites/modificar-tramite',$vac);

    }

    public function updateTramite($id){

    }


      public function listarTramite(){ //lista TODOS los tramites
        $tramites = Tramite::paginate(10);
        $munis = Muni::all();
        $vac=compact('tramites','munis');
        return view('/admin/tramites/listado-de-tramites',$vac);
      }

      public function listarPorMuni($id){ //lista todos los tramites por muni (viene de listado por municipios)
        $munis = Muni::find($id);
        $tramites = Tramite::where('munis_id','=',$id)->get();
        $vac=compact("munis","tramites");
        return view('/admin/tramites/listado-de-tramites',$vac); //(url: admin/tramite/listado-por-municipios-id)

      }

      public function listarMunicipios(){ //lista todas las munis
        $munis =  Muni::paginate(20);
        $vac=compact("munis");
        return view('/admin/tramites/gestion-de-tramites',$vac);
      }
}
