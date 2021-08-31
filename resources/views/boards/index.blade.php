@extends('layout')

@section('title', 'Aqui estão os seus quadros')

@section('content')
@foreach($boards->all() as $board)
<div class="card border-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">{{$board->title}}</div>
  <div class="card-body">
    <p class="card-text">Criado em: {{$board->created_at}}</p>
    <a class="btn btn-primary" href='#'>Gerenciar</a>
  </div>
</div>
@endforeach


@endsection