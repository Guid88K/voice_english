<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link id="CSSsource" rel="stylesheet" href="{{asset('css/main.css')}}">

    <title>Title</title>
</head>

<body class=" container-fluid m-0 p-0">
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="Main.html">BlEnglish</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse  navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item ">
                <a class="nav-link mx-5" lang="uk" href="{{asset('english/speak')}}">Говоріння</a>
            </li>
            <li class="nav-item mx-5">
                <a class="nav-link" lang="uk" href="{{asset('english/grammar')}}">Граматика</a>
            </li>
            <li class="nav-item mx-5">
                <a class="nav-link" lang="uk" href="{{asset('english/phonetics')}}">Фонетика</a>
            </li>
            <li class="nav-item mx-5">
                <a class="nav-link" lang="uk" href="{{asset('english/dictionary')}}">Слова</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Типи дальтонізму
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" onclick="document.getElementById('CSSsource').href='{{asset('css/main.css')}}'" href="#">Звичайний
                        режим</a>
                    <a class="dropdown-item" onclick="document.getElementById('CSSsource').href='{{asset('css/pro.css')}}'" href="#">Пронатоп</a>
                    <a class="dropdown-item" onclick="document.getElementById('CSSsource').href='{{asset('css/deta.css')}}'" href="#">Дейтараноп</a>
                    <a class="dropdown-item" onclick="document.getElementById('CSSsource').href='{{asset('css/trina.css')}}'" href="#">Тринатоп</a>
                    <a class="dropdown-item" onclick="document.getElementById('CSSsource').href='{{asset('css/achro.css')}}'" href="#">Ахроматопсія</a>
                </div>
            </li>
        </ul>
    </div>

</nav>
@foreach($grammar as $g)
<div class="row m-0">
    <div class="col-md-10 mx-auto my-3   border shadow ">
        <img src="{{ asset('upload/'.$g->image)}}" class="img-fluid" alt="">
        <p lang="en" class="my-5 ml-5 text-left font-weight-bold"
           style="display: inline-block; font-size: 20px; letter-spacing: 2px;">{{$g->title}}</p>
        <button lang="uk" type="button" class="btn my-5 mr-5 "  onClick='location.href="{{route('grammar.show',$g->id)}}"' style="float: right;">Перейти до вивчення
        </button>
    </div>
</div>
@endforeach

<script rel="script" src="{{asset('js/sr.js')}}"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
</script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
