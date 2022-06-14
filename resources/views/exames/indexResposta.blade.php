@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
        <div class="col-4">
            <a href="/exames/respostas/create/resposta" class="btn btn-primary">Criar Pergunta  </a>
        </div>
        @forelse ( $respostas as $respostas )
            <ul>
                <li><a href="./exames/respostas/{{$resposta->id}}">{{($resposta->corporesposta)}}</a></li>
            </ul>
        @empty
        <p class="txt-warning">Sem respostas Registadas </p>

        @endforelse
        </div>
    </div>

@endsection
