<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tramite;
use App\File;

class FileController extends Controller
{
  public function downloadFile($src,$file_title){ // metodo para obtener un archivo

    if (is_file($src)) {

      $finfo = finfo_open(FILEINFO_MIME_TYPE);
      $content_type = finfo_file($finfo, $src);
      finfo_close($finfo);
      $file_name = basename($src).PHP_EOL;
      $extention = explode(".",$file_name); //obtengo la extension del archivo en un array
      $newName = $file_title .".".$extention[1]; // concateno el title con la extension

      $size = filesize($src);
      header("Content-Type: $content_type");
      header("Content-Disposition:attachment; filename=$newName"); // asigno el nombre del archivo con la extension para q se descargue con el nombre y no la ruta
      header("Content-Transfer-Encoding: binary");
      header("Content-Length:$size");
      readfile($src);

      return true;
    } else {
      return false;
    }
  }

  public function download($file_name,$file_title){ // esta funcion es la descargar el archivo recuperado en la funcion de arriba
    if (!$this->downloadFile(storage_path()."/app/public/$file_name",$file_title)) {// si no se ha podido descargar, redireccionamos atras.

      return redirect()->back();
    }
  }

  public function store(Request $req){
    //reglas de validacion para guardar el archivo
    $rules=[
      "title"=> "required|string|min:6|max:200",
      "description"=>"required|string|min:10|max:200",
      "muni"=>"required",
      "file"=>"required"
    ];

    $this->validate($req,$rules);
    $routeFile = $req['file']->store("public");
    $fileName = basename($routeFile);


    // aqui es dnd pasamos los parametros y guardamos
    $newTramite = new Tramite();
    $newTramite->title = $req->title;
    $newTramite->description = $req->description;
    $newTramite->munis_id = $req->muni;
    $newTramite->file = $fileName;

    $newTramite->save();
    return redirect('admin/tramites/agregar-tramite');
    }

    public function delete(Request $req){

      $tramiteDelete = Tramite::find($req->id);

      $file_name = $tramiteDelete['file']; //obtengo el nombre del archivo

      $file_path =storage_path()."/app/public/"; // obtengo la ubicacion del archivo
      $tramiteRuoteDelete= $file_path .$file_name; // completo la ubicacion con el nombre del tramite


      unlink($tramiteRuoteDelete); //elimina el archivo de la carpeta public
      $tramiteDelete -> delete(); // elimina el archivo de la BD

      return redirect("admin/admin");
    }
}
