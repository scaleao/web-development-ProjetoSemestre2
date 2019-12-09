<?php

namespace App\Http\Controllers;

use App\Assinatura;
use Illuminate\Http\Request;
use App\Solicitacao;
use Illuminate\Support\Facades\DB;
use Auth;

class AssinaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;

        $assinaturas = DB::table('assinaturas')
            ->join('users', 'user_destino', '=', 'users.id')
            ->join('documentos', 'documento_id', '=', 'documentos.id')
            ->join('solicitacaos', 'solicitacao_id', '=', 'solicitacaos.id')
            ->where('assinaturas.user_destino', $id)
            ->select('assinaturas.created_at', 'users.username',
                'documentos.name', 'documentos.type')
            ->get();

        return view('viewsTimeline/viewAssinaturas', compact('assinaturas'));
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
    public function store($id, Request $request)
    {
        $solicitacao = Solicitacao::find($id);

        $assinatura = [];
        $assinatura['solicitacao_id'] = $solicitacao->id;
        $assinatura['user_destino'] = $solicitacao->user_destino;
        $assinatura['documento_id'] = $solicitacao->documento_id;

        Assinatura::create($assinatura);

        $solicitacao->update(['assinado'=>'true']);

        return redirect()->route('user.index_solicitacao');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assinatura  $assinatura
     * @return \Illuminate\Http\Response
     */
    public function show(Assinatura $assinatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assinatura  $assinatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Assinatura $assinatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assinatura  $assinatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assinatura $assinatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assinatura  $assinatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assinatura $assinatura)
    {
        //
    }
}
