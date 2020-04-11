<!DOCTYPE html>
<html lang="en" class="allbg" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link id="CSSsource" rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <title>Title</title>
</head>

<body class="  allbg  ">

<nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="{{url('/english')}}">BlEnglish</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse  navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-xl-5 mx-lg-2 ">
                <a class="nav-link  " lang="uk" href="{{url('/english/speak')}}">Говоріння</a>
            </li>
            <li class="nav-item mx-xl-5 mx-lg-2">
                <a class="nav-link " lang="uk" href="{{url('/english/grammar')}}">Граматика</a>
            </li>
            <li class="nav-item mx-xl-5 mx-lg-2 ">
                <a class="nav-link " lang="uk" href="{{url('english/phonetics')}}">Фонетика</a>
            </li>
            <li class="nav-item mx-xl-5  mx-lg-2" >
                <a class="nav-link " lang="uk" href="{{url('/english/dictionary')}}">Слова</a>
            </li>
            <li class="nav-item dropdown  mx-xl-5  mx-lg-2 ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Типи дальтонізму
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item p" onclick="document.getElementById('CSSsource').href='{{asset('css/main.css')}}'" href="#">Звичайний
                        режим</a>
                    <a class="dropdown-item p" onclick="document.getElementById('CSSsource').href='{{asset('css/pro.css')}}'" href="#">Пронатоп</a>
                    <a class="dropdown-item p" onclick="document.getElementById('CSSsource').href='{{asset('css/deta.css')}}'" href="#">Дейтараноп</a>
                    <a class="dropdown-item p" onclick="document.getElementById('CSSsource').href='{{asset('css/trina.css')}}'" href="#">Тринатоп</a>
                    <a class="dropdown-item p" onclick="document.getElementById('CSSsource').href='{{asset('css/achro.css')}}'" href="#">Ахроматопсія</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/account')}}" >
                    <i class=" fa fa-user-circle" href="{{url('/english/account')}}" style="font-size: 25px;"></i>
                </a>

            </li>
        </ul>
    </div>

</nav>
<div class="row m-0">
        <div class="col-md-10 mx-auto  text-right my-2">
        <button type="button"     class="btn  text-center  mx-xl-1  " style="display: inline-block" onclick="plusSize()" ><b>Збільшитити</b></button>
        <button type="button"     class="btn  text-center " style="display: inline-block"  onclick="minusSize()" ><b>Зменшити</b></button>
    </div>
</div>
<div class="row m-0 p-0">
    <div class="col-md-10 mx-auto  border shadow pb-3 " >
        <form  class="form-inline mt-3" action="{{url('/find')}}" method="get">
            <input aria-hidden="true"  class="form-control mr-sm-2 " name="word" type="search" placeholder="Пошук..." aria-label="Search">
            <button aria-hidden="true" lang="uk" class="btn p my-2 my-sm-0 "    type="submit">Пошук</button>
        </form>
    </div>
</div>
@if(isset($dictionary))
@foreach($dictionary as $d)
<div class="row m-0">
    <div class="col-md-10 mx-auto border shadow py-2  ">
        <p lang="en" class="mt-2 p ml-5 text-left font-weight-bold"
           style="display: inline-block;  letter-spacing: 2px;">{{$d->word}} - {{$d->translate_word}} </p>
        <button lang="uk" type="button" class="btn p my-1 mr-5 " style="float: right;">Видалити
        </button>
    </div>
</div>
@endforeach
@endif




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
