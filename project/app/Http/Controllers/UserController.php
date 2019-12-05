<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Solicitacao;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(){

    }

    public function store(Request $request){
        $request->flash();
        $request->validate([
            'name' => 'required',
            'email'=> 'email|required|unique:users',
            'password' => 'required|min:8',
            'username' => 'required|unique:users',
            'cpf' => 'required|unique:users',
            'checkbox' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        if($user){
            //return redirect()->route('apelido');
            return redirect('/login');
        }
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'senha' => 'required'
        ]);
        $data = $request->all();
        if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['senha']])){
            $id = (int) Auth::user()->id;
            $solicitacoes = Solicitacao::where('user_destino', $id)->get();
            /*$solicitacoes = DB::statement("CREATE VIEW v_solicitacoes AS
                        SELECT s.created_at, u.name, d.name , d.description
                        FROM solicitacaos s, users u, documentos d
                        WHERE s.user_destino = u.id AND
                              s.documento_id = d.id
                              ORDER BY s.created_at DESC")->;*/
            return view('viewsTimeline/index', compact('solicitacoes'));
        }
        else{
            return redirect('/login');
        }
    }

    function update(){

    }

    function delete(){

    }
}
