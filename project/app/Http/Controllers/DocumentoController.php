<?php

namespace App\Http\Controllers;

use App\Documento;
use Illuminate\Http\Request;
use Auth;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $documentos = Documento::where('user_id', $id)->get();

        return view('viewsTimeline/viewDocumentos', compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewsTimeline/addDocumento');
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
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'name_file' => 'required',
        ]);
        $data = $request->all();

        if($request->hasFile('name_file')){
            $fileDoc = $request->file('name_file');
            $num = rand(11111, 99999);
            $dir = "/image/document";
            $extension = $fileDoc->guessClientExtension();
            $nameDoc = "document_".$num.".".$extension;
            $fileDoc->move($dir, $nameDoc);
            $data['name_file'] = $dir."/".$nameDoc;
        }

        Documento::create($data);
        return redirect('/timeline');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documento = Documento::find($id);

        if(!isset($documento)){
            echo "deu merda";
        }
        $documento->delete();
        redirect('/documento');
    }
}
