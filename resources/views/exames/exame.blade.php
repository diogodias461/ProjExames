@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row">
            <a href="/" class="btn btn-outline-primary">Voltar!</a>
            <div class="border rounded">
                <h1>Fazer um exame</h1>
                    <hr>
                    <form action="" method="POST">
                        @csrf

            <div class="control-goup">
                <button id="btn-submit" class="btn btn-primary">Acabar o exame!</button>
                    </form>

@endsection
