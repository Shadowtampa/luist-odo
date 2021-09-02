@extends('layout')

@section('title', 'Faças as tarefas do quadro "' . $board->title . '"')

@section('content')
<form action='{{action('TodoListController@create', $board->id)}}' method='get'>
  @if(count($errors)>0)
  <ul>
    @foreach($errors->all() as $erro)
    <li class="alert alert-warning mb-2 mt-2">{{$erro}}</li>
    @endforeach
  </ul>
  @endif

  <div class="form-group">
    <label class="col-form-label" for="inputDefault">Dê um título á sua lista</label>
    <input name='title' type="text" class="form-control" placeholder="Default input" id="inputDefault">
  </div>
  <button type='submit' class="btn btn-primary">Crie listas</button>
</form>

@if(count($board_lists) > 0)
<h3> Aqui estão suas listas:</h3>
@foreach($board_lists as $board_list)
<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">{{$board_list->title}}</div>
  <div class="card-body">
    <form action='{{action('TodoController@create', $board_list->id)}}' method='get'>
      @if(count($errors)>0)
      <ul>
        @foreach($errors->all() as $erro)
        <li class="alert alert-warning mb-2 mt-2">{{$erro}}</li>
        @endforeach
      </ul>
      @endif

      <div class="form-group">
        <label class="col-form-label" for="inputDefault">Dê um título ao seu todo</label>
        <input name='title' type="text" class="form-control" placeholder="Default input" id="inputDefault">
      </div>
      <button type='submit' class="btn btn-secondary">Criar Todo</button>
    </form>

    @if(count($todos))
    @foreach($todos as $todo)
    <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
      @if($todo->list_id == $board_list->id)
      <div class="card-header">{{$todo->title}}</div>
      @endif
    </div>
    @endforeach
    @endif

    <form action='{{action('TodoListController@destroy', $board_list->id)}}' method='post'>
      @csrf
      {{method_field('delete')}}
      <button type='submit' class="btn btn-danger">delete esta lista</button>
    </form>
    @if(count($todos) > 0)

    @else
    <p>Create a few todos!</p>
    @endif


  </div>
</div>
@endforeach
@else
<h3> Crie algumas listas para começarmos!</h3>

@endif
@endsection