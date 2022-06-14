<?php

namespace App\Http\Controllers;

use App\Models\resposta;
use Illuminate\Http\Request;

class respostaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resposta=resposta::all();
        return view('exames.respostas.indexResposta',['respostas'=>$resposta]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('exames.respostas.createResposta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newResposta=Resposta::create(['corporesposta'=>$request->corporesposta]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resposta  $resposta
     * @return \Illuminate\Http\Response
     */
    public function show(resposta $resposta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resposta  $resposta
     * @return \Illuminate\Http\Response
     */
    public function edit(resposta $resposta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resposta  $resposta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resposta $resposta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resposta  $resposta
     * @return \Illuminate\Http\Response
     */
    public function destroy(resposta $resposta)
    {
        //
    }
}
