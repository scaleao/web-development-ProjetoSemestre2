<?php

namespace App\Http\Controllers;

use App\Solicitacao;
use Illuminate\Http\Request;
use App\Documento;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class SolicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;

        $solicitacoes = DB::table('solicitacaos')
            ->join('users', 'user_destino', '=', 'users.id')
            ->join('documentos', 'documento_id', '=', 'documentos.id')
            ->select('solicitacaos.id', 'solicitacaos.created_at', 'users.username', 'documentos.name', 'documentos.type', 'documentos.description')
            ->where('solicitacaos.user_destino', $id)
            ->orderBy('solicitacaos.created_at', 'desc')
            ->get();

        return view('viewsTimeline/index', compact('solicitacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $documentos = Documento::where('user_id', $id)->get();
        return view('viewsTimeline/addSolicitacao', compact('documentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'destino' => 'required',
            'documento' => 'required'
        ]);

        $user_id = Auth::user()->id;
        $mailDestino = $request['destino'];
        $destino = User::where('email', $mailDestino)->first();
        $user_destino = $destino->id;

        if(empty($destino)){
            echo 'erro';
        }

        $documento_id = $request['documento'];

        $solicitacao = [];
        $solicitacao['user_id'] = $user_id;
        $solicitacao['user_destino'] = $user_destino;
        $solicitacao['documento_id'] = $documento_id;
        Solicitacao::create($solicitacao);

        return redirect('/timeline');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //SELECT u.email, d.name, d.type, d.description
        // FROM solicitacaos s, documentos d, users u
        // WHERE s.user_id = u.id AND
        //  s.documento_id = d.id AND
        //  s.id = 1
        $info_solici = DB::table('solicitacaos')
            ->join('users', 'user_id', '=', 'users.id')
            ->join('documentos', 'documento_id', '=', 'documentos.id')
            ->where('solicitacaos.id', $id)
            ->select('users.email', 'solicitacaos.created_at', 'users.username', 'documentos.name', 'documentos.type', 'documentos.description')
            ->first();
        //dd($info_solici);
        return view('viewsTimeline/viewSolicitacao', compact('info_solici'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitacao $solicitacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitacao $solicitacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitacao $solicitacao)
    {
        //
    }
}
