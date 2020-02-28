<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link id="CSSsource" rel="stylesheet" href="{{asset('css/main.css')}}">

    <title >Title</title>
</head>
<body class="container-fluid m-0 p-0"  >
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand"  href="{{url('/english')}}">BlEnglish</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse  navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item  mx-xl-5 mx-lg-2">
                <a class="nav-link p " lang="uk" href="{{url('english/speak')}}">Говоріння</a>
            </li>
            <li class="nav-item mx-xl-5 mx-lg-2">
                <a class="nav-link p" lang="uk" href="{{url('english/grammar')}}">Граматика</a>
            </li>
            <li class="nav-item mx-xl-5 mx-lg-2 ">
                <a class="nav-link p" lang="uk" href="{{url('english/phonetics')}}">Фонетика</a>
            </li>
            <li class="nav-item mx-xl-5 mx-lg-2 ">
                <a class="nav-link p" lang="uk" href="{{url('english/dictionary')}}">Слова</a>
            </li>
            <li class="nav-item mx-xl-5 mx-lg-2 p dropdown">
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
<div class="row m-0">
    <div class="col-md-10 mx-auto  text-right my-2">
        <button type="button"     class="btn  text-center  mx-xl-1  " style="display: inline-block" onclick="plusSize()" >Збільштити</button>
        <button type="button"     class="btn  text-center " style="display: inline-block"  onclick="minusSize()" >Зменшити</button>
    </div>
</div>

<div class="row  m-0 p-0 ">
    <div class="col-md-10 mx-auto my-4 text-left">
        <p lang="uk" class="p">
            В англійськiй мовi всього 44 звукiв, які поділяються на голосні (vowels), приголосні (consonants). Голосні й
            приголосні можуть утворювати комбінації, включаючи дифтонги (diphthongs). Голосні звуки в англійській мові
            розрізняються по довготі на короткі (short vowels) і довгі (long vowels), а приголосні можна розділити на глухі
            (voicelss consonants), дзвінкі (voiced consonants). Існують також ті приголосні, які складно віднести до глухих
            або дзвінким. Не будемо заглиблюватися в фонетику, так як на початковому етапі цієї інформації цілком достатньо.
            Розглянемо таблицю звуків англійської мови:
        </p>
        <h2>Голосні звуки</h2>
    </div>
</div>

<div class="row  m-0 p-0">
    <div class="col-md-12">
        <h3 class="p">Короткий звук</h3>
    </div>
    <div class="col-md-12">
        <button class="shortvowel p btn" onclick="new Audio(('{{asset('music/i-fish.mp3')}}')).play(); return false;">ɪ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/a-cat.mp3')}}').play(); return false;">æ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/o-clock.mp3')}}').play(); return false;">ɒ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/a-computer.mp3')}}').play(); return false;">ɔ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/e-egg.mp3')}}').play(); return false;">e</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/u-up.mp3')}}').play(); return false;">ʌ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/u-bul.mp3')}}').play(); return false;">ʊ</button>
    </div>
</div>


<div class="row  m-0 p-0">
    <div class="col-md-12">
        <h3>Довгий звук</h3>
    </div>
    <div class="col-md-12">
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/ii-tree.mp3')}}').play(); return false;">ɪ:</button>
        <button class="shortvowel  p btn" onclick="new Audio('{{asset('music/a-car.mp3')}}').play(); return false;">a:</button>
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/ur-bird.mp3')}}').play(); return false;">ɛ</button>
        <button class="shortvowel  p btn" onclick="new Audio('{{asset('music/u-boot.mp3')}}').play(); return false;">u;</button>
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/o-hourse.mp3')}}').play(); return false;">ɔ:</button>
    </div>
</div>

<div class="row  m-0 p-0">
    <div class="col-md-12">
        <h3>Дивтонги</h3>
    </div>
    <div class="col-md-12">
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/ai-train.mp3')}}').play(); return false;">ei</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/o-phone.mp3')}}').play(); return false;">əʊ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/i-bike.mp3')}}').play(); return false;">ai</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/ou-ou.mp3')}}').play(); return false;">aʊ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/oy-boy.mp3')}}').play(); return false;">ɔɪ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/ea-ear.mp3')}}').play(); return false;">əɪ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/ai-chair.mp3')}}').play(); return false;">eə</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/ou-tourist.mp3')}}').play(); return false;">ʊə</button>
    </div>
</div>

<div class="row m-0 p-0">
    <div class="col-md-12 my-4 text-center">
        <p lang="uk" class="p">
            В англійськiй мовi всього 44 звукiв, які поділяються на голосні (vowels), приголосні (consonants). Голосні й
            приголосні можуть утворювати комбінації, включаючи дифтонги (diphthongs). Голосні звуки в англійській мові
            розрізняються по довготі на короткі (short vowels) і довгі (long vowels), а приголосні можна розділити на глухі
            (voicelss consonants), дзвінкі (voiced consonants). Існують також ті приголосні, які складно віднести до глухих
            або дзвінким. Не будемо заглиблюватися в фонетику, так як на початковому етапі цієї інформації цілком достатньо.
            Розглянемо таблицю звуків англійської мови:
        </p>
        <h2 class="p">Приголосні звуки</h2>
    </div>
</div>


<div class="row  m-0 p-0">
    <div class="col-md-12">
        <h3 class="p">Короткий звук</h3>
    </div>
    <div class="col-md-12">
        <button class="shortvowel p btn" onclick="new Audio(('{{asset('music/i-fish.mp3')}}')).play(); return false;">ɪ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/a-cat.mp3')}}').play(); return false;">æ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/o-clock.mp3')}}').play(); return false;">ɒ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/a-computer.mp3')}}').play(); return false;">ɔ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/e-egg.mp3')}}').play(); return false;">e</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/u-up.mp3')}}').play(); return false;">ʌ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/u-bul.mp3')}}').play(); return false;">ʊ</button>
    </div>
</div>


<div class="row  m-0 p-0">
    <div class="col-md-12">
        <h3>Довгий звук</h3>
    </div>
    <div class="col-md-12">
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/ii-tree.mp3')}}').play(); return false;">ɪ:</button>
        <button class="shortvowel  p btn" onclick="new Audio('{{asset('music/a-car.mp3')}}').play(); return false;">a:</button>
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/ur-bird.mp3')}}').play(); return false;">ɛ</button>
        <button class="shortvowel  p btn" onclick="new Audio('{{asset('music/u-boot.mp3')}}').play(); return false;">u;</button>
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/o-hourse.mp3')}}').play(); return false;">ɔ:</button>
    </div>
</div>

<div class="row  m-0 p-0">
    <div class="col-md-12">
        <h3>Дивтонги</h3>
    </div>
    <div class="col-md-12">
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/ai-train.mp3')}}').play(); return false;">ei</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/o-phone.mp3')}}').play(); return false;">əʊ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/i-bike.mp3')}}').play(); return false;">ai</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/ou-ou.mp3')}}').play(); return false;">aʊ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/oy-boy.mp3')}}').play(); return false;">ɔɪ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/ea-ear.mp3')}}').play(); return false;">əɪ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/ai-chair.mp3')}}').play(); return false;">eə</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/ou-tourist.mp3')}}').play(); return false;">ʊə</button>
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
