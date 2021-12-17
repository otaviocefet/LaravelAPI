<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - CL</title>
    <link rel="stylesheet" href="{{asset('css/adm/adm.css')}}" >
</head>
<body>
  <header>
    <section>
      <picture>
        <img src="{{asset('img/logo/logo.png')}}" class="logo" alt="Logo" />
      </picture>
    </section>
  </header>
  <nav>
    <ul>
      <li>
        <a href="{{url('/listadejogos')}}">Lista de Jogos</a>
      </li>
    </ul>
  </nav>
  <main>
    @yield('content')
  </main>
</body>
</html>