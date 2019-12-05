<?php

namespace App\Http\Controllers;

use App\Solicitacao;
use Illuminate\Http\Request;
use App\Documento;
use Auth;
use App\User;

class SolicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show(Solicitacao $solicitacao)
    {
        //
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
