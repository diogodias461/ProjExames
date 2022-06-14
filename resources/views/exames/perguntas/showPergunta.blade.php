@extends('layouts.app')
@section('content')
    <div class="container">
            <div class="row">
                <a href="/exames" class="btn btn-outline-primary">Voltar</a>
                    <h1>PERGUNTA:</h1>
                    <br>
                    <p>{!!$pergunta->corpopregunta!!}</p>

                    <hr>
                    <a href="/exames/{{$pergunta->id}}/edit" class="btn-outline.primary">Editar Pergunta </a>
                    <br><br>
                    <form id="delete-frm" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Remover Pergunta</button>
                    </form>
        </div>
</div>
@endsection

