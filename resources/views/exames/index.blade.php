@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
        <div class="col-4">
            <a href="/exames/perguntas/create/pergunta" class="btn btn-primary">Criar Pergunta  </a>
        </div>
        @forelse ( $perguntas as $pergunta )
            <ul>
                <li><a href="./exames/perguntas/{{$pergunta->id}}">{{($pergunta->corpopergunta)}}</a></li>
            </ul>
        @empty
        <p class="txt-warning">Sem Perguntas Registadas </p>

        @endforelse
        </div>
    </div>

@endsection
