<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if (session('Success'))
        <div id="flash" class= "p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('Success') }}
        </div>
    @endif

    <header>
        <nav>
            <h1> Ninja Network</h1>
            <a href="{{ route('ninjas.index')}}"> All Ninjas</a>

            @guest
                <a href="{{ route('show.login')}}"> login </a>
                <a href="{{ route('show.register')}}"> Register </a>
            @endguest

            @auth
                <span class = "border-r-2 pr-2">

                    Hi there, {{Auth::user()->name }}
                </span>
                <a href="{{ route('ninjas.create')}}"> Create new Ninjas </a>
                <form action="{{route('logout')}}" method="POST" class="m-0">
                    @csrf
                    <button class="btn">Logout</button>
                </form>
            @endauth
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>
