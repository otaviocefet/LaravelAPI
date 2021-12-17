
@extends ('adm.layout')

@section('content')
<a href="{{url('listadejogos/create')}}" class="button">Adicionar</a>
<table>
  <thead>
    <tr>
      <th>Doador</th>
      <th>Jogo doado</th>
    </tr>
  </thead>
  <tbody>
    @foreach($textodiarios as $textodiario)
    <tr>
      <td>{{$textodiario->user->name}}</td>
      <td>{{$textodiario->texto}}</td>
      
      <td>
        <a href="{{route('listadejogos.edit',$textodiario->id)}}" class="button">
          Editar
        </a>
      </td>
      <td>
        <form method="POST" action="{{route('listadejogos.destroy',$textodiario->id)}}" onsubmit="return confirm('tem certeza?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="button">
            Remover
          </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection