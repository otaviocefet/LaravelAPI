<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiarioOnline</title>
    <link rel="stylesheet" href="{{asset('css/initial/inicio.css')}}" />
</head>

<body>
    <header>
        <section>
            <picture>
                <img src="{{asset('img/logo/logo.png')}}" alt="Logo" />
            </picture>
        </section>

        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/textodiario') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Area teste</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registre-se</a>
            @endif
            @endauth
        </div>
        @endif

    </header>
    <main>
        <section>
            <ol>
                @foreach($imagens as $imagem)
                <li>
                    <img src="{{asset($imagem['url'])}}" alt="{{$imagem['nome']}}" />
                </li>
                @endforeach
            </ol>
        </section>
    </main>
</body>

</html>