@extends('layout')

@section('title', 'Edite seu quadro!')

@section('content')

<form action='{{action('BoardController@update', $board->id)}}' method='post'>
  @csrf
  <div class="form-group">
    <label class="col-form-label" for="inputDefault">Dê um título ao seu quadro</label>
    <input name='title' type="text" value="{{$board->title}}" class="form-control" placeholder="Default input" id="inputDefault">
  </div>
  {{method_field('put')}}
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection