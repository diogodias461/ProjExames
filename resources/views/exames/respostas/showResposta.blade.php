@extends('layouts.app')
@section('content')
    <div class="container">
            <div class="row">
                <a href="/exames" class="btn btn-outline-primary">Voltar</a>
                    <h1>RESPOSTA:</h1>
                    <br>
                    <p>{!!$resposta->corporesposta!!}</p>

                    <hr>
                    <a href="/exames/{{$resposta->id}}/edit" class="btn-outline.primary">Editar Resposta </a>
                    <br><br>
                    <form id="delete-frm" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Remover Resposta</button>
                    </form>
        </div>
</div>
@endsection

