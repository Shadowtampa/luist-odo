@extends('layout')

@section('title', 'Edite seu quadro!')

@section('content')

<form method='put' action='{{action('App\http\Controllers\BoardController@update', $board->id)}}'>
<div class="form-group" method="post" action='0'> 
  <label class="col-form-label" for="inputDefault">Dê um título ao seu quadro</label>
  <input name='title' type="text" value="{{$board->title}}" class="form-control" placeholder="Default input" id="inputDefault">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection