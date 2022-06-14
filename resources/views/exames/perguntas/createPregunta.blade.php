@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row">
            <a href="/" class="btn btn-outline-primary">Voltar!</a>
            <div class="border rounded">
                <h1>Criar uma pregunta</h1>
                    <hr>
                    <form action="" method="POST">
                        @csrf
            <div class="control-group">
                <label for="title">Pergunta</label>
                <textarea type="text" name="corpopregunta" id="corpopregunta" placeholder="Escreva a pregunta" required class="form-control" rows="5"></textarea>
            </div>
            <div class="control-goup">
                <button id="btn-submit" class="btn btn-primary">Criar Pregunta</button>
                    </form>

@endsection
