<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link id="CSSsource" rel="stylesheet" href="{{asset('css/main.css')}}">

    <title>Title</title>
</head>
<body class="container-fluid m-0 p-0">
<nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="Main.html">BlEnglish</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse  navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item ">
                <a class="nav-link mx-5" lang="uk" href="Speak.html">Говоріння</a>
            </li>
            <li class="nav-item mx-5">
                <a class="nav-link" lang="uk" href="Grammar.html">Граматика</a>
            </li>
            <li class="nav-item mx-5">
                <a class="nav-link" lang="uk" href="Phonetics.html">Фонетика</a>
            </li>
            <li class="nav-item mx-5">
                <a class="nav-link" lang="uk" href="Dictionary.html">Слова</a>
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
<div class="row m-0 p-0">

    <div class="col-md-12 my-4">
        <h2 class="text-center mb-3">Функції дієслова to be</h2>
        <p class="px-5 mb-4">Дієслово to be вживається для вираження присутності, наявності, місцезнаходження, опису якостей та властивостей предметів, а також для утворення граматичних конструкцій на позначення часу та пасивного стану з іншими дієсловами.

            В українській мові дієслово to be часто оминається на відміну від англійської мови, в якій to be ніколи не опускається, адже в цьому випадку речення стане граматично неправильним та може загубити своє значення.</p>
        <p>В реченні дієслово to be може вживатися в якості смислового дієслова, дієслова-зв'язки, допоміжного дієслова або ж у модальній конструкції to be to.</p>

    </div>
</div>
<div class="row m-0 p-0">
    <div class="col-md-12">
        <h2 lang="uk" class="text-center mb-3">Фрази</h2>

        <p>В якості допоміжного дієслова to be не має свого власного лексичного значення, тому він не перекладається українською мовою. Форми дієслова to be (а також його третя форма been) використовуються для утворення певних граматичних конструкцій та форм: утворення пасивного стану та тривалих часів (Present Continuous, Present Perfect Continuous, Past Continuous, Past Perfect Continuous, Future Continuous, Future Perfect Continuous).</p>
        <p>I’m working now. – Я зараз працюю.</p>
        <p>I was working when Jack came. – Я працювала, коли прийшов Джек.</p>
        <p>I have been working here for 6 months. – Я працюю тут 6 місяців.</p>
        <p>I will be working at 8 tomorrow. – Завтра о 8-й я буду працювати.</p>


    </div>

</div>
<div class="row m-0 p-0">
    <div class="col-md-11 ">
        <p></p>
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
