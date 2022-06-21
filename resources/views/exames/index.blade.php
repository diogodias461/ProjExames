@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
        <div class="col-4">
            <a href="/exames/create/resposta" class="btn btn-primary">Criar Resposta </a>
        </div>
        @forelse ( $respostas as $resposta )
            <ul>
                <li><a href="./exame/{{$resposta->id}}">{{($resposta->corporesposta)}}</a></li>
            </ul>
        @empty
        <p class="txt-warning">Sem Respostas Registados </p>

        @endforelse
        </div>
    </div>

@endsection
