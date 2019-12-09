<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;
use App\User;
use Auth;


class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $data = Perfil::where('user_id', $id)->get()->first();
        if($data){
            return view('viewsTimeline/perfil', compact('data'));
        }
        else{
            return view('viewsTimeline/perfil');
        }

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
        $request->flash();

        $id = Auth::user()->id;
        $userPerfil = Perfil::where('user_id', $id)->get()->first();
        if($userPerfil){
            $this->update($request);
            return redirect('/timeline');
        }
        else{
            $data = $request->all();
            Perfil::create($data);
            return redirect('/perfil');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $data = $request->all();
        Perfil::find($id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        //
    }
}
