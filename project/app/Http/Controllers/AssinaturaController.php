<?php

namespace App\Http\Controllers;

use App\Assinatura;
use Illuminate\Http\Request;
use App\Solicitacao;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Documento;

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
                'documentos.name', 'documentos.type', 'assinaturas.id', 'assinaturas.solicitacao_id')
            ->get();

        /*$assinaturas = DB::table('solicitacaos')
            ->join('users', 'user_id', '=', 'users.id')
            ->join('documentos', 'documento_id', '=', 'documentos.id')
            ->join('assinaturas', 'id', '=', 'assinaturas.solicitacao_id')
            ->select('assinaturas.created_at', 'users.username',
                'documentos.name', 'documentos.type', 'assinaturas.id as assinatura_id', 'assinaturas.solicitacao_id')
            ->where([
                'user_destino', '=', $id,
                'assinado', '=', 'true'
            ])
            ->get();*/

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
    public function show($id)
    {
        $iduser = Auth::user()->id;
        //DIVIDIR SQL POR CHAVE ESTRANGEIRA
        $dados = DB::table('assinaturas')
            ->join('documentos', 'documento_id', '=', 'documentos.id')
            ->join('solicitacaos', 'solicitacao_id', '=', 'solicitacaos.id')
            ->join('users', 'solicitacaos.user_id', '=', 'users.id')
            ->join('perfils', 'users.id', '=', 'perfils.user_id')
            ->where('assinaturas.id', $id)
            ->select('perfils.profissao', 'users.cpf', 'users.name', 'users.email', 'documentos.name as documento_name',
                'documentos.type', 'documentos.description', 'solicitacaos.created_at as solicitacao_created', 'assinaturas.created_at as assinatura_created')
            ->first();

        return view('viewsTimeline/dadosAssinatura', compact('dados'));
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
