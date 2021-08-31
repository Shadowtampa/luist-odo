@extends('layout')

@section('title', 'Dashboard do Usuário')

@section('content')
<h3>Bem vindo {{Auth::user()->name}}, você está logado!</h3>

<!-- <a href="" class="btn btn-primary">Gostaria de Criar um quadro novo?</a> -->
<a href="/boards" class="btn btn-primary">Ver seus quadros</a>

</div>
@endsection