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
        <h2 class="text-center mb-3">Розповідь про мене / About myself </h2>
        <p class="px-5 mb-4">Почнемо розбір з загальних рекомендацій за змістом тексту, оскільки перші труднощі для
            будь-якого учня - це
            питання,
            що ж про мене розповісти. Насправді тут немає нічого складного, і не треба вигадувати якусь захоплюючу
            історію свого
            життя. Щоб скласти твір про себе англійською мовою досить орієнтуватися на стандартну структуру, яка так чи
            інакше
            зустрічається в будь-якому тексті даної тематики. Шаблон розповіді про себе англійською виглядає наступним
            чином:</p>
        <ul>
            <li>Вступ (вітання, уявлення);</li>
            <li>Коротка інформація про себе (ім'я та прізвище, місце проживання, вік, освіта);</li>
            <li>Розповідь про ближнього колі спілкування (сім'я, друзі, колеги);</li>
            <li>Перерахування особистих якостей і захоплень (характер, хобі, звички);</li>
            <li>Висновок (завершальна думка, плани на майбутнє, питання до співрозмовника)</li>
        </ul>

    </div>
</div>
<div class="row m-0 p-0">
    <div class="col-md-12">
        <h2 lang="uk" class="text-center mb-3">Фрази</h2>

        <p>First of all let me introduce myself - Прежде всего, позвольте я представлюсь.</p>
        <p>First of all let me introduce myself - Прежде всего, позвольте я представлюсь.</p>
        <p>First of all let me introduce myself - Прежде всего, позвольте я представлюсь.</p>
        <p>First of all let me introduce myself - Прежде всего, позвольте я представлюсь.</p>
        <p>First of all let me introduce myself - Прежде всего, позвольте я представлюсь.</p>
        <p>First of all let me introduce myself - Прежде всего, позвольте я представлюсь.</p>
        <p>First of all let me introduce myself - Прежде всего, позвольте я представлюсь.</p>
        <p>First of all let me introduce myself - Прежде всего, позвольте я представлюсь.</p>
        <p>First of all let me introduce myself - Прежде всего, позвольте я представлюсь.</p>
        <p>First of all let me introduce myself - Прежде всего, позвольте я представлюсь.</p>
    </div>

</div>
<div class="row m-0 p-0">
    <div class="col-md-11 ">
        <p>Let me introduce myself. My name is Denis Minenko. I’m 18 and I am student of the faculty Automation and Computing Machines. My major is Information Systems and Technologies. So in my future I will develop information systems for the different organizations.
            Generally, I am fond of computer technologies since my childhood. My first computer was bought by my parents more than 10 years ago. When I was a little boy, I very liked to play videogames. And I became a teenager, I was interested in programming. I wrote my first little program when I was 13. Thus, I chose my profession many years ago. And my family supported the choice.

            Now I live in university hostel, but when I went to school I lived with my parents. I come from a small family and I have neither brothers nor sisters. My father’s name is Peter and he is an engineer. My mother’s name is Regina and she is a house-wife. I love my parents because they are very clever, kind, understanding and patient.

            As of my traits of character, I am ambitious, determined, creative and friendly. And I am very industrious, because my parents always made me respect work. Thus, I’m sure about my future.</p>
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
