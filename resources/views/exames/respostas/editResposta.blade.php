@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row">
            <a href="/exames" class="btn btn-outline-primary">Voltar</a>
            <div class="border rounded">
                <h1>Editar Resposta </h1>
                <hr>
                <form action="" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="control-group">
                        <label for="body">Resposta</label>
                        <textarea id="body" name="body" class="form-control" rows="5">{{$resposta}}</textarea>
                    <div class="control-gorup">
                    <button id="btn-submit" class="btn btn-primary">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
