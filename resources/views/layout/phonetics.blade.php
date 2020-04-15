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
                <a class="nav-link" href="{{url('/account')}}" >
                    <i class=" fa fa-user-circle" href="{{url('/english/account')}}" style="font-size: 25px;"></i>
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
<div class="row  m-0  allbg">
    <div class="col-md-6 mx-auto"><img class=" " style="height: 500px; width: 750px"
            src="{{ asset('image/pngguru.com.png')}}"
        >

    </div>
</div>
<div class="row  m-0 p-0 ">
    <div class="col-md-10 mx-auto my-2 text-left">
        <p lang="uk" class="p">
            В англійськiй мовi всього 44 звукiв, які поділяються на голосні (vowels), приголосні (consonants). Голосні й
            приголосні можуть утворювати комбінації, включаючи дифтонги (diphthongs). Голосні звуки в англійській мові
            розрізняються по довготі на короткі (short vowels) і довгі (long vowels), а приголосні можна розділити на глухі
            (voicelss consonants), дзвінкі (voiced consonants). Існують також ті приголосні, які складно віднести до глухих
            або дзвінким. Не будемо заглиблюватися в фонетику, так як на початковому етапі цієї інформації цілком достатньо.

        </p>

    </div>
</div>

<div class="row  m-0 p-0 ">
    <div class="col-md-10 mx-auto my-2 text-left">
        <p lang="uk" class="p">
            Голосні в англійській мові вимовляють з відкритим ротом, їх можна проспівати. Також голосні в англійській
            мові можуть бути довгими (long vowels) і короткими (short vowels). Всього коротких голосних звуків сьомій,
            довгих — п’ять, і ще вісім дифтонгів (dipthongs). Дифтонг — це поєднання двох голосних звуків в одному складі.
            В англійській мові дуже важливо дотримуватися стислість і довготу голосних звуків, так як від довготи звуку може
            залежати зміст слова.

        </p>

    </div>
</div>

<div class="row  m-0 p-0 ">
    <div class="col-md-10 mx-auto  text-center">
        <h2>Голосні звуки</h2>
    </div>
</div>
<div class="row  my-3 m-0 p-0">
    <div class="col-md-10  mx-auto">
        <h3>Короткий звук</h3>
    </div>
    <div class="col-md-10 mx-auto">
        <button class="shortvowel p btn" onclick="new Audio(('{{asset('music/i-fish.mp3')}}')).play(); return false;">ɪ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/a-cat.mp3')}}').play(); return false;">æ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/o-clock.mp3')}}').play(); return false;">ɒ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/a-computer.mp3')}}').play(); return false;">ɔ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/e-egg.mp3')}}').play(); return false;">e</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/u-up.mp3')}}').play(); return false;">ʌ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/u-bul.mp3')}}').play(); return false;">ʊ</button>
    </div>
</div>


<div class="row my-3 m-0 p-0">
    <div class="col-md-10 mx-auto">
        <h3>Довгий звук</h3>
    </div>
    <div class="col-md-10 mx-auto">
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/ii-tree.mp3')}}').play(); return false;">ɪ:</button>
        <button class="shortvowel  p btn" onclick="new Audio('{{asset('music/a-car.mp3')}}').play(); return false;">a:</button>
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/ur-bird.mp3')}}').play(); return false;">ɛ</button>
        <button class="shortvowel  p btn" onclick="new Audio('{{asset('music/u-boot.mp3')}}').play(); return false;">u;</button>
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/o-hourse.mp3')}}').play(); return false;">ɔ:</button>
    </div>
</div>

<div class="row my-3 m-0 p-0">
    <div class="col-md-10 mx-auto">
        <h3>Дифтонги</h3>
    </div>
    <div class="col-md-10 mx-auto mb-4">
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
    <div class="col-md-10 mx-auto my-4 text-left">
        <p lang="uk" class="p">
При вимовлянні приголосних звуків артикуляційні органи мовлення створюють на шляху повітряного струменя з легень повну або часткову перепону, або ж
помітно наближаються один до одного, утворюючи щілини. Долаючи такі перешкоди, повітряний струмінь викликає нерівномірні коливання, що сприймаються на
слух як певного роду шуми, які й називаються приголосними звуками. Приголосні звуки, що вимовляються без вібрації голосових зв’язок, позбавлені голосу (мають тільки шум) і
25 називаються глухими приголосними.

        </p>

    </div>
</div>
<div class="row  m-0 p-0">
    <div class="col-md-10 mx-auto text-center">

        <h2>Приголосні звуки</h2>
    </div>
</div>
<div class="row my-3 m-0 p-0">
    <div class="col-md-10 mx-auto">
        <h3 >Дзвінкий звук</h3>
    </div>
    <div class="col-md-10 mx-auto">
        <button class="shortvowel p btn" onclick="new Audio(('{{asset('music/b-bag.mp3')}}')).play(); return false;">b</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/g-girl.mp3')}}').play(); return false;">g</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/v-vase.mp3')}}').play(); return false;">v</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/d-dog.mp3')}}').play(); return false;">d</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/z-zebra.mp3')}}').play(); return false;">z</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/j-televition.mp3')}}').play(); return false;">ʒ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/z-mother.mp3')}}').play(); return false;">ð</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/ch-cheers.mp3')}}').play(); return false;">ʤ</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/l-leg.mp3')}}').play(); return false;">l</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/r-right.mp3')}}').play(); return false;">r</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/w-witch.mp3')}}').play(); return false;">w</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/j-jot.mp3')}}').play(); return false;">j</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/m-monkey.mp3')}}').play(); return false;">m</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/n-nose.mp3')}}').play(); return false;">n</button>
        <button class="shortvowel p btn" onclick="new Audio('{{asset('music/mm-singer.mp3')}}').play(); return false;">ŋ</button>
    </div>
</div>


<div class="row py-3 m-0 p-0">
    <div class="col-md-10 mx-auto">
        <h3>Глухий звук</h3>
    </div>
    <div class="col-md-10 mx-auto mb-5">
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/p-parrot.mp3')}}').play(); return false;">p</button>
        <button class="shortvowel  p btn" onclick="new Audio('{{asset('music/k-key.mp3')}}').play(); return false;">k</button>
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/f-flower.mp3')}}').play(); return false;">f</button>
        <button class="shortvowel  p btn" onclick="new Audio('{{asset('music/t-tie.mp3')}}').play(); return false;">t</button>
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/s-snake.mp3')}}').play(); return false;">s</button>
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/sh-shower.mp3')}}').play(); return false;">ʃ</button>
        <button class="shortvowel  p btn" onclick="new Audio('{{asset('music/th-thumb.mp3')}}').play(); return false;">ɵ</button>
        <button class="shortvowel p  btn" onclick="new Audio('{{asset('music/tsh-chess.mp3')}}').play(); return false;">ʧ</button>
        <button class="shortvowel  p btn" onclick="new Audio('{{asset('music/h-house.mp3')}}').play(); return false;">h</button>

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
