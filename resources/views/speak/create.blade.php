<!doctype html>
<html lang="en" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description"
          content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
          content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Page JS Plugins CSS -->

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/simplemde/simplemde.min.css')}}">

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>

<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-inverse'                           Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header

HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-modern'                        Modern Header style
    'page-header-inverse'                       Dark themed Header (works only with classic Header style)
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container"
     class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed">

    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow bg-primary-dark">
            <div class="content-header-section align-parent">
                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout"
                        data-action="side_overlay_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Side Overlay -->

                <!-- User Info -->
                <div class="content-header-item">
                    <a class="img-link mr-5" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="{{asset('assets/media/avatars/avatar12.jpg')}}"
                             alt="">
                    </a>
                    <a class="align-middle link-effect text-white-op font-w600" href="javascript:void(0)">Admin</a>
                </div>
                <!-- END User Info -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Mini Stats -->
            <div class="block pull-t pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-primary">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Sales</div>
                            <div class="font-size-h4 text-white">985</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Tickets</div>
                            <div class="font-size-h4 text-white">251</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Projects</div>
                            <div class="font-size-h4 text-white">39</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Mini Stats -->

            <!-- Search -->
            <div class="block pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search"
                                   placeholder="Search..">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary px-10">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Search -->

            <!-- Notifications -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">Notifications</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <ul class="list list-activity">
                        <li>
                            <i class="si si-wallet text-success"></i>
                            <div class="font-w600">+$29 New sale</div>
                            <div>
                                <a href="javascript:void(0)">Admin Template</a>
                            </div>
                            <div class="font-size-xs text-muted">5 min ago</div>
                        </li>
                        <li>
                            <i class="si si-close text-danger"></i>
                            <div class="font-w600">Project removed</div>
                            <div>
                                <a href="javascript:void(0)">Best Icon Set</a>
                            </div>
                            <div class="font-size-xs text-muted">26 min ago</div>
                        </li>
                        <li>
                            <i class="si si-pencil text-info"></i>
                            <div class="font-w600">You edited the file</div>
                            <div>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-file-text-o"></i> Docs.doc
                                </a>
                            </div>
                            <div class="font-size-xs text-muted">3 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-plus text-success"></i>
                            <div class="font-w600">New user</div>
                            <div>
                                <a href="javascript:void(0)">StudioWeb - View Profile</a>
                            </div>
                            <div class="font-size-xs text-muted">5 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-wrench text-warning"></i>
                            <div class="font-w600">Core v3.9 is available</div>
                            <div>
                                <a href="javascript:void(0)">Update now</a>
                            </div>
                            <div class="font-size-xs text-muted">8 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-user-follow text-pulse"></i>
                            <div class="font-w600">+1 Friend Request</div>
                            <div>
                                <a href="javascript:void(0)">Accept</a>
                            </div>
                            <div class="font-size-xs text-muted">1 day ago</div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Notifications -->
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                            data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="index.html">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">code</span><span
                                class="font-size-xl text-primary">base</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- New Account -->
            <div class="content-side content-side-full bg-black-op-10">
                <button type="button" class="btn btn-sm btn-block btn-hero btn-alt-success" data-toggle="modal"
                        data-target="#exampleModalCenter">
                    <i class="fa fa-briefcase mr-5"></i> New lesson
                </button>


            </div>
            <!-- END New Account -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                        <a class="active" href="{{asset('/english')}}"><i class="si si-home"></i><span
                                class="sidebar-mini-hide">Main <span
                                    class="badge badge-pill badge-primary ml-5">3</span></span></a>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">PR</span><span
                            class="sidebar-mini-hidden">Pages</span></li>

                    <li>
                        <a href="{{asset('english/speak')}}"><i class="si si-docs"></i><span class="sidebar-mini-hide">Speak</span></a>
                    </li>
                    <li>
                        <a href="{{asset('english/grammar')}}"><i class="si si-users"></i><span
                                class="sidebar-mini-hide">Grammar</span></a>
                    </li>
                    <li>
                        <a href="{{asset('english/dictionary')}}"><i class="si si-wallet"></i><span
                                class="sidebar-mini-hide">Dictionary</span></a>
                    </li>
                    <li>
                        <a href="{{asset('english/phonetics')}}"><i class="si si-energy"></i><span
                                class="sidebar-mini-hide">Phonetics</span></a>
                    </li>

                    <li class="nav-main-heading"><span class="sidebar-mini-visible">ST</span><span
                            class="sidebar-mini-hidden">Settings</span></li>
                    <li>
                        <a href=""><i class="si si-fire"></i><span class="sidebar-mini-hide">Security</span></a>
                    </li>
                    <li>
                        <a href=""><i class="si si-pencil"></i><span class="sidebar-mini-hide">Profile</span></a>
                    </li>
                    <li>
                        <a href=""><i class="si si-flag"></i><span class="sidebar-mini-hide">Notifications</span></a>
                    </li>
                    <li>
                        <a href=""><i class="si si-lock"></i><span class="sidebar-mini-hide">Password Update</span></a>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">HP</span><span
                            class="sidebar-mini-hidden">Help</span></li>
                    <li>
                        <a href=""><i class="si si-notebook"></i><span
                                class="sidebar-mini-hide">Knowledge Base</span></a>
                    </li>
                    <li>
                        <a href=""><i class="si si-envelope"></i><span class="sidebar-mini-hide">Contact Us</span></a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </nav>
    <!-- END Sidebar -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-auto">
                    <a href="{{asset('english/speak/create')}}">
                        <button type="button" class="btn btn-dark">Speak</button>
                    </a>
                    <a href="{{asset('english/grammar/create')}}">
                        <button type="button" class="btn btn-dark">Grammar</button>
                    </a>
                    <a href="{{asset('english/dictionary/create')}}">
                        <button type="button" class="btn btn-dark">Dictionary</button>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="sidebar_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="header_search_on">
                    <i class="fa fa-search"></i>
                </button>
                <!-- END Open Search Section -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="content-header-section">
                <!-- User Dropdown -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        <i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-150"
                         aria-labelledby="page-header-user-dropdown">
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="si si-user mr-5"></i> Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                           href="javascript:void(0)">
                            <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                            <span class="badge badge-primary">3</span>
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="si si-note mr-5"></i> Invoices
                        </a>
                        <div class="dropdown-divider"></div>

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout"
                           data-action="side_overlay_toggle">
                            <i class="si si-wrench mr-5"></i> Settings
                        </a>
                        <!-- END Side Overlay -->

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="si si-logout mr-5"></i> Sign Out
                        </a>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-rounded btn-dual-secondary" data-toggle="layout"
                        data-action="side_overlay_toggle">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
                <!-- END Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header">
            <div class="content-header content-header-fullrow">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- Close Search Section -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-secondary px-15" data-toggle="layout"
                                    data-action="header_search_off">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- END Close Search Section -->
                        </div>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.."
                               id="page-header-search-input" name="page-header-search-input">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary px-15">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header content-header-fullrow text-center">
                <div class="content-header-item">
                    <i class="fa fa-sun-o fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">


        <div class="content">

            <h2 class="content-heading">Add speak lesson</h2>
            <form method="post" action="{{ route('speak.store') }}" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="form-group">
                        @csrf
                        <label for="name">Заголовок</label>
                        <input type="text" autocomplete="off" class="form-control" name="title"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Головна картинка</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Пронатоп картинка</label>
                    <input type="file" name="p_image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Дейтараноп картинка</label>
                    <input type="file" name="d_image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Тринатоп картинка</label>
                    <input type="file" name="t_image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Ахроматопсія картинка</label>
                    <input type="file" name="a_image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="text">Текст</label>
                                <textarea class="form-control summernote" name="detail"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark">Сохранить</button>
                </div>
            </form>
        </div>
    </main>

    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600"
                                                                          href="https://1.envato.market/ydb"
                                                                          target="_blank">pixelcave</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.1</a> &copy; <span
                    class="js-year-copy"></span>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
    Codebase JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/jquery.countTo.min.js
    assets/js/core/js.cookie.min.js
-->
<script src="{{asset('assets/js/codebase.core.min.js')}}"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{asset('assets/js/codebase.app.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>


<!-- Page JS Helpers (Summernote + CKEditor + SimpleMDE plugins) -->
<script type="text/javascript">
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 600,
            dialogsInBody: true,
            callbacks: {
                onInit: function () {
                    $('body > .note-popover').hide();
                }
            },
        });
    });
</script>
</body>
</html>
