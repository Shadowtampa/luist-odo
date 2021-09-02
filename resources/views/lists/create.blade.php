@extends('layout')

@section('title', 'Crie sua lista!')

@section('content')


<form action='{{action('TodoListController@store')}}' method="post">
  @if(count($errors) > 0)
  {{dd($errors)}}
  @endif
  <div class="form-group" >
  @csrf  
  <label class="col-form-label" for="inputDefault">Dê um título á sua lista</label>
    <input name='title' type="text" class="form-control" placeholder="Default input" id="inputDefault">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection