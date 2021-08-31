@extends('layout')

@section('title', 'Crie seu quadro!')

@section('content')

<form action='{{action('BoardController@store')}}' method="post">
  @if(count($errors) > 0)
  {{dd($errors)}}
  @endif
  <div class="form-group" >
  @csrf  
  <label class="col-form-label" for="inputDefault">Dê um título ao seu quadro</label>
    <input name='title' type="text" class="form-control" placeholder="Default input" id="inputDefault">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection