@extends('layout')

@section('title', 'Crie seu quadro!')

@section('content')

<form>
<div class="form-group" method="post" action='0'> 
  <label class="col-form-label" for="inputDefault">Dê um título ao seu quadro</label>
  <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection