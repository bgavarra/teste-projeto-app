<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuarios = Usuario::all();

      return view('welcome',['usuarios' => $usuarios]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = new User;
      $usuario = new Usuario;
      $usuario->nome=$request->nome;
      $usuario->email=$request->email;
      $usuario->telefone=$request->telefone;
      $usuario->endereco=$request->endereco;
      $usuario->senha=bcrypt($request->senha);
      $usuario->cpf=$request->cpf;
      $usuario->categorias=$request->categorias;
      $usuario->save();
      $user->name=$usuario->nome;
      $user->email=$usuario->email;
      $user->password=bcrypt($usuario->senha);
      $user->usuario_id=$usuario->id;
      $user->save();


      return view('/auth/login');
    }

    public function upload()
    {
      return view ('perfil.upload');
    }

    public function move()
    {
      $file = \Input::file('photo'); // retorna o objeto em questão

       var_dump($file);
       var_dump(\Input::hasFile('photo'));

       $destinationPath = public_path().DIRECTORY_SEPARATOR.'files';
       $fileName = '01.'.pathinfo('Hearthstone.desktop')['extension'];

       //var_dump($file->move($destinationPath.DIRECTORY_SEPARATOR.'tmp'));
       var_dump($file->move($destinationPath, $fileName));
    }

    public function storeArray(Array $data)
    {
        $usuario = new Usuario;
        $usuario->nome=$data['nome'];
        $usuario->email=$data['email'];
        $usuario->telefone=$data['telefone'];
        $usuario->endereco=$data['endereco'];
        $usuario->senha=$data['senha'];
        $usuario->cpf=$data['cpf'];
        $usuario->categorias=$data['categorias'];
        $usuario->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show_usuarios_da_categoria($categoria)
    // {
    //     $usuarios= Usuario::where(
    //           'categorias', $categoria)->get();
    //
    //     return view('busca',['usuarios'=>$usuarios]);
    // }
    public function show_usuarios_da_categoria(Request $request)
    {
        $usuarios= Usuario::where(
              'categorias', $request->categoria)->get();

        return view('resultado_busca')->with('usuarios',$usuarios);
    }

    public function verPerfil(Request $request)
    {
      $usuario = Usuario::where(
            'email',$request->usr)->get();
            return view('perfil')->with('usr',$usuario);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $usuario = Usuario::find($id);
      $usuario->nome=$request->nome;
      $usuario->senha=$request->senha;
      $usuario->telefone=$request->telefone;
      $usuario->endereco=$request->endereco;
      $usuario->categorias=$request->categorias;
      $usuario->save();
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $usuario = Usuario::find($id);
      $usuario->delete();
      return back();
    }
    public function goSignin()
    {
      return view('login');
    }
    public function goCadastro()
    {
      return view('cadastro');
    }
    public function goPerfil()
    {
      return view('perfil');
    }
    public function goBusca()
    {
      return view('busca');
    }
}
