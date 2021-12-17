
@extends ('adm.layout')

@section('content')
<a href="{{url('textodiario/create')}}" class="button">Adicionar</a>
<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Texto</th>
    </tr>
  </thead>
  <tbody>
    @foreach($textodiarios as $textodiario)
    <tr>
      <td>{{$textodiario->user->name}}</td>
      <td>{{$textodiario->texto}}</td>
      
      <td>
        <a href="{{route('textodiario.edit',$textodiario->id)}}" class="button">
          Editar
        </a>
      </td>
      <td>
        <form method="POST" action="{{route('textodiario.destroy',$textodiario->id)}}" onsubmit="return confirm('tem certeza?');">
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