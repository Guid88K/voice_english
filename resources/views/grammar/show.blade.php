<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link id="CSSsource" rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <title>Title</title>
</head>
<body class="container-fluid m-0 p-0 allbg">
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

<div class="row allbg m-0">
    <div class="col-md-10 mx-auto  text-right my-2">
        <button type="button"     class="btn  text-center  mx-xl-1  " style="display: inline-block" onclick="plusSize()" ><b>Збільшитити</b></button>
        <button type="button"     class="btn  text-center " style="display: inline-block"  onclick="minusSize()" ><b>Зменшити</b></button>
    </div>
</div>
<div class="row m-0 p-0 allbg">

    <div class="col-md-10 mx-auto my-3">
        <h2 class="text-center mb-3 " style="font-size: 42px">{{$grammar->title}}</h2>
    </div>
</div>
        <div class="row m-0 p-0 allbg">
            <div class="col-md-10 mx-auto box4 ">
                <h2 class="text-left mb-3 p " style="font-size: 16px!important;">{!! $grammar->content !!}</h2>
            </div>
        </div>

<div class="row m-0 p-0">
    <div class="col-md-10 mx-auto text-center ">
        <!-- Button trigger modal -->
        <button type="button" class="btn my-3 mb-5 p" data-toggle="modal" data-target="#exampleModal">
           Зрозуміло
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title mx-auto" id="exampleModalLabel">Вітаємо ви отримали 10 балів</h5>

                    </div>
                    <div>
                        <img src="{{ asset('image/work.svg')}}" class="img-fluid my-3  p-0" id="myImg" style="width: 200px; height: 200px;" alt="">
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('image/star.svg')}}" class="img-fluid  p-0" id="myImg" style="width: 40px; height: 40px;" alt="">
                        <img src="{{ asset('image/star.svg')}}" class="img-fluid  p-0" id="myImg" style="width: 40px; height: 40px;" alt="">
                        <img src="{{ asset('image/star.svg')}}" class="img-fluid  p-0" id="myImg" style="width: 40px; height: 40px;" alt="">
                        <img src="{{ asset('image/star.svg')}}" class="img-fluid  p-0" id="myImg" style="width: 40px; height: 40px;" alt="">
                        <img src="{{ asset('image/star.svg')}}" class="img-fluid  p-0" id="myImg" style="width: 40px; height: 40px;" alt="">
                        <img src="{{ asset('image/star.svg')}}" class="img-fluid  p-0" id="myImg" style="width: 40px; height: 40px;" alt="">
                        <img src="{{ asset('image/star.svg')}}" class="img-fluid  p-0" id="myImg" style="width: 40px; height: 40px;" alt="">
                        <img src="{{ asset('image/star.svg')}}" class="img-fluid  p-0" id="myImg" style="width: 40px; height: 40px;" alt="">
                        <img src="{{ asset('image/star.svg')}}" class="img-fluid  p-0" id="myImg" style="width: 40px; height: 40px;" alt="">
                        <img src="{{ asset('image/star.svg')}}" class="img-fluid  p-0" id="myImg" style="width: 40px; height: 40px;" alt="">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<script>$('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })</script>

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
