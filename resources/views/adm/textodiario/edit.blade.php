@extends('adm.layout')

@section('content')
@if(count($errors) > 0)
<ul class="validator">
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form method="POST" action="{{url('textodiario')}}">
  @csrf
  @method('PUT')
  <div class="row">
    <label class="col-2" for="user">Usuário</label>
    <select class="col-3" name="user_id" id="user">
      <option></option>
      @foreach($users as $user)
      <option value="{{$user->id}}" @if($user->id==$textodiario->user_id') selected @endif>{{$user->name}}</option>
      @endforeach
    </select>
    <label class="col-2" for="doc">Nome do Jogo: </label>
    <input type="text" name="texto" id="tex" class="col-5" value="{{ old('texto') }}" />
  </div>
  <button type="submit" class="button">Salvar</button>
</form>
@endsection