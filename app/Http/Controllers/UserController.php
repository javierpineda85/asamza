<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function perfil(){
      return view('perfil');
    }


    public function listar(Request $req ){ //lista todos los usuarios

      $usuarios =  User::orderBy('lastName','asc')
                ->paginate(10);
      $vac=compact("usuarios");
      return view('listado-de-usuarios',$vac);
    }

   public function listarPorMail(Request $req ){ //lista todos los usuarios por mail

      $email = $req ->get('email');

      $usuarios =  User::orderBy('lastName','asc')
                ->email($email)
                ->paginate(10);
      $vac=compact("usuarios");
      return view('listado-de-usuarios',$vac);
    }

    public function listarPorApellido(Request $req ){ //lista todos los usuarios por apellido

      $lastName = $req ->get('lastName');

      $usuarios =  User::orderBy('lastName','asc')
                ->LastName($lastName)
                ->paginate(10);
      $vac=compact("usuarios");
      return view('listado-de-usuarios',$vac);
    }

    public function modificarUsuario($id){
      $usuario = User::find($id);
      $vac=compact("usuario");
      return view('gestion-de-usuario',$vac);

    }

    public function deleteUsuario(Request $req){

      $userDelete = User::find($req->id);
      $userDelete -> delete();

      $usuarios =  User::orderBy('lastName','asc')
                ->paginate(10);
      $vac=compact("usuarios");
      return view('listado-de-usuarios',$vac);
    }
}
