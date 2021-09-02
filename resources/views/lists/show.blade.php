@extends('layout')

@section('title', 'Faças as tarefas do quadro "' . $board->title . '"')

@section('content')
@if(count($board_lists) > 0)
@foreach($board_lists as $board_list)

<a href='#' class="card-title">Crie listas</a>

<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">{{$board_list->title}}</div>
  <div class="card-body">
    <a href='#' class="card-title">Crie tarefas</a>
    </div>
</div>
@endforeach
@endif
@endsection