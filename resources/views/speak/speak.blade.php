<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link id="CSSsource" rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <title>Title</title>
</head>

<body class=" container-fluid  allbg gm-0 p-0">
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
            <li class="nav-item mx-xl-5  mx-lg-2">
                <a class="nav-link " lang="uk" href="{{url('/english/dictionary')}}">Слова</a>
            </li>
            <li class="nav-item dropdown  mx-xl-5  mx-lg-2 ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Типи дальтонізму
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item p" id="img_n"
                       onclick="document.getElementById('CSSsource').href='{{asset('css/main.css')}}';normal()"
                       href="#">Звичайний
                        режим</a>
                    <a class="dropdown-item p" id="img_p"
                       onclick="document.getElementById('CSSsource').href='{{asset('css/pro.css')}}';pronatop()"
                       href="#">Пронатоп</a>
                    <a class="dropdown-item p" id="img_d"
                       onclick="document.getElementById('CSSsource').href='{{asset('css/deta.css')}}';deutaron()"
                       href="#">Дейтараноп</a>
                    <a class="dropdown-item p" id="img_t"
                       onclick="document.getElementById('CSSsource').href='{{asset('css/trina.css')}}';trunatop()"
                       href="#">Тринатоп</a>
                    <a class="dropdown-item p" id="img_a"
                       onclick="document.getElementById('CSSsource').href='{{asset('css/achro.css')}}';axromatopsia()"
                       href="#">Ахроматопсія</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/account')}}">
                    <i class=" fa fa-user-circle" href="{{url('/english/account')}}" style="font-size: 25px;"></i>
                </a>

            </li>
        </ul>
    </div>

</nav>

<div class="row allbg m-0">
    <div class="col-md-10 mx-auto text-right my-2">
        <button type="button" class="btn  text-center  mx-xl-1  " style="display: inline-block" onclick="plusSize()"><b>Збільшитити</b>
        </button>
        <button type="button" class="btn  text-center " style="display: inline-block" onclick="minusSize()">
            <b>Зменшити</b></button>
    </div>
</div>
@foreach($speak as $s)
    <div class="row  m-0">
        <div class="col-md-10 mx-auto  mb-3   border shadow ">
            <img src="{{ asset('upload/'.$s->image)}}" class="img-fluid p-3" id="img"
                 style="width: 300px; height: 150px;"
                 alt="">
            {{--            @if (file_exists(public_path('css/pro.css')))--}}
            {{--                <img src="{{ asset('upload/'.$s->image_pronatop)}}" class="img-fluid p-3"--}}
            {{--                     style="width: 300px; height: 150px;" alt="">--}}
            {{--            @endif--}}
            <p lang="en" class="my-5 ml-5 p text-left font-weight-bold"
               style="display: inline-block;  letter-spacing: 2px;">{{$s->title}} </p>
            <button lang="uk" type="button" class="btn my-5 mr-5 p"
                    onClick='location.href="{{route('speak.show',$s->id)}}"'
                    style="float: right;">Перейти до вивчення
            </button>

        </div>
    </div>

@endforeach
<script>
    function normal() {

        $(img).attr("src", "{{ asset('upload/'.$s->image)}}");

    }

    function pronatop() {
        {{--        document.getElementById("img").src = "{{ asset('upload/'.$s->image_pronatop)}}";--}}
        $(img).attr("src", "{{ asset('upload/'.$s->image_pronatop)}}");

    }

    function deutaron() {
        {{--        document.getElementById("img").src = "{{ asset('upload/'.$s->image_deutaron)}}";--}}
        $(img).attr("src", "{{ asset('upload/'.$s->image_deutaron)}}");
    }

    function trunatop() {
        {{--document.getElementById("img").src = "{{ asset('upload/'.$s->image_trunatop)}}";--}}
        $(img).attr("src", "{{ asset('upload/'.$s->image_trunatop)}}");
    }

    function axromatopsia() {
        {{--        document.getElementById("img").src = "{{ asset('upload/'.$s->image_axromatopsia)}}";--}}
        $(img).attr("src", "{{ asset('upload/'.$s->image_axromatopsia)}}");
    }
</script>
<script rel="script" src="{{asset('js/sr.js')}}"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
</script>
{{--<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>--}}
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>

{{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
{{--<script>--}}
{{--    img_n.onclick = e => img.src = '{{ asset('upload/'.$s->image)}}';--}}
{{--    img_p.onclick = e => img.src = '{{ asset('upload/'.$s->image_pronatop)}}';--}}
{{--    // img_d.onclick = e => img.src = 'https://javascript.ru/forum/image.php?u=7416&dateline=1372796129';--}}
{{--    // img_t.onclick = e => img.src = 'https://javascript.ru/forum/image.php?u=7416&dateline=1372796129';--}}
{{--    // img_a.onclick = e => img.src = 'https://javascript.ru/forum/image.php?u=7416&dateline=1372796129';--}}
{{--</script>--}}

</body>
</html>
