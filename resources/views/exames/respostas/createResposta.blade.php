@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row">
            <a href="/exames" class="btn btn-outline-primary">Voltar!</a>
            <div class="border rounded">
                <h1>Criar uma resposta</h1>
                    <hr>
                    <form action="" method="POST">
                        @csrf
            <div class="control-group">
                <label for="title">Resposta</label>
                <textarea type="text" name="corporesposta" id="corporesposta" placeholder="Escreva a resposta" required class="form-control" rows="5"></textarea>
            </div>
            <div class="control-goup">
                <button id="btn-submit" class="btn btn-primary">Criar Resposta</button>
                    </form>

@endsection
