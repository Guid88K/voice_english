<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link id="CSSsource" rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <title >Title</title>
</head>
<body class=" allbg m-0 p-0"  >
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
                <a class="nav-link">
                    <i class=" fa fa-user-circle" style="font-size: 25px;"></i>
                </a>

            </li>
        </ul>
    </div>

</nav>
<div class="row m-0 allbg ">
    <div class="col-md-10 mx-auto  text-right my-2">
        <button type="button"     class="btn  text-center  mx-xl-1  " style="display: inline-block" onclick="plusSize()" ><b>Збільшитити</b></button>
        <button type="button"     class="btn  text-center " style="display: inline-block"  onclick="minusSize()" ><b>Зменшити</b></button>
    </div>
</div>
<div class="container">
<div class="row mb-5 m-0  allbg">


            <div class="col-md-4 py-2">
                <img class=" mx-auto" style="height: 350px;  width: 350px"
                     src="{{ asset('image/user.svg')}}">
            </div>
            <div class="col-md-8">
<h2 class="my-5">Kate Levoniuk</h2>
                <p lang="uk" class="p">Мій прогрес</p>
                <p lang="uk" class="p">Рівень володіння : Середній</p>




    </div>
</div>





<div class="row pb-5  m-0 p-0 ">
    <div class="col-md-2 pb-1 mx-auto border shadow  my-2 text-left">
        <h4 class="text-center" > <b style="font-size: 40px;">2 </b>Рівень</h4>
        <img class="img-fluid" style=""
             src="{{ asset('image/statistics.svg')}}">
    </div>

    <div class="col-md-4 pb-3 mx-auto border shadow  my-2 text-left">
        <p class="p mt-5 text-center">Зароблено сьогодні</p>
        <h4 class="text-center" > <b style="font-size: 40px;">100  </b>Балів</h4>

    </div>

    <div class="col-md-4 pb-3 mx-auto border shadow  my-2 text-left">
        <p class="p mt-5 text-center">Вивчено слів</p>
        <h4 class="text-center" > <b style="font-size: 40px;">50  </b>Слів</h4>

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
