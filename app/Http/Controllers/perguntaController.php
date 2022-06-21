<?php

namespace App\Http\Controllers;

use App\Models\pergunta;
use Illuminate\Http\Request;

class perguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //
         $pergunta=pergunta::all();
         return view('exames.index',['perguntas'=>$pergunta]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('exames.perguntas.createPregunta');

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
        $newPergunta=Pergunta::create(['corpopregunta'=>$request->corpopregunta]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pergunta  $pergunta
     * @return \Illuminate\Http\Response
     */
    public function show(pergunta $pergunta)
    {
        //
        return view('exames.perguntas.showPergunta',['perguntas'=>$pergunta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pergunta  $pergunta
     * @return \Illuminate\Http\Response
     */
    public function edit(pergunta $pergunta)
    {
        //
        return view('exames.pergunta.editResposta',['pergunta'=>$pergunta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pergunta  $pergunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pergunta $pergunta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pergunta  $pergunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(pergunta $pergunta)
    {
        //
    }
}
