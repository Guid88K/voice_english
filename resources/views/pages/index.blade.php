<!DOCTYPE html>
<html lang="uk">
<head>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=YOUR_UNIQUE_KEY"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link id="CSSsource" rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <title >Title</title>
</head>
<body class="container-fluid m-0 p-0"  >
<audio autoplay muted id="my_audio"   src="('{{asset('music/Eng.ogg')}}') "></audio>
{{--<audio autoplay loop  id="playAudio">--}}
{{--    <source src="{{asset('music/audio_2020-02-19_22-12-09.ogg')}}">--}}
{{--</audio>--}}
{{--onclick=" new Audio('music/audio_2020-02-19_22-12-09.ogg').play(1)"--}}
{{--<audio id="player" autoplay controls><source src="{{asset('music/a-car.mp3')}}" type="audio/mp3"></audio>--}}
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
<div class="row btnplusminus  m-0">
    <div class="col-md-12  text-right my-2">
        <button type="button"     class="btn  text-center  mx-xl-1"  style="display: inline-block" onclick="plusSize()" ><b>Збільшитити</b></button>
        <button type="button"     class="btn  text-center " style="display: inline-block"  onclick="minusSize()" ><b>Зменшити</b></button>
    </div>
</div>
<div class="row  m-0" id="box3" >
    <div class="col-md-10 mx-auto">

         <img class=" img-fluid mx-auto d-block " src="{{asset('image/london-animation-small.gif')}}">
{{--         style="background-image: url('{{asset('image/london-animation-small.gif')}}'); height: 610px;background-size: cover; background-position: center;  width: 100%;">--}}
        <div>
        </div>
    </div>
</div>

<div class="row m-0 p-0  " >
    <div class="col-md-12 " id="box4" >
        <h1 class="text-center mt-5   txt " >Welcome</h1>
        <div class="row">
            <div class="col-md-6 mx-auto"  >
                <p lang="uk" type="paragraph" class="p my-2 text-center mx-5 " >
                    Ласкаво просимо на сайт для вивчення аглійської мови тут ви можете розвити навички говоріння, вивчити базові поняття,освоїти граматику та поринути у світ іноземної мови.</p>
                <div class="mx-auto text-center my-4">
                    <button type="button" class="btn p text-center mx-auto" >Перейти до вивчення</button>


                </div>

            </div>
        </div>

    </div>
</div>



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
