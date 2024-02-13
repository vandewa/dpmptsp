<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('meta-description')
    <meta
        content="dpmptsp, wonosobo, dieng, soul of java, berita terkini, viral, update, berita wonosobo, wonosobo hebat, berita viral, konoha "
        name="keywords" />
    <meta content="DPMPTSP Wonosobo" name="author" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon_io/favicon.ico') }}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/fontawesome/css/all.min.css') }}" async>
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}" async>
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/aos/dist/aos.css') }}" async>

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/theme.min.css') }}" async>
    <link rel="stylesheet" href="{{ asset('front/assets/style.css') }}" async>
    <link rel="stylesheet" href="{{ asset('css/hover-master/css/hover.css') }}" async>
    <link rel="stylesheet" href="{{ asset('css/entox.css') }}" async>
    <link rel="stylesheet" href="{{ asset('css/entox-responsive.css') }}" async>
    <link rel="stylesheet" href="{{ asset('css/zilom.css') }}" async>
    <link rel="stylesheet" href="{{ asset('css/zilom-responsive.css') }}" async>
    <script src="https://kit.fontawesome.com/bb9305debb.js" crossorigin="anonymous"></script>
    @vite([])

    @stack('css')

    <style>
        :root {
            --peach: #ffad69;
            --white: #ffffff;
            --black: #000;
            --grey: #D3D3D3;
            --facebook: #3b5999;
            --twitter: #55acee;
            --instagram: #e4405f;
            --apple: #131418;
        }

        .sosmed ul {
            position: absolute;
            /* top: 50%; */
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            padding: 0;
            display: flex;
        }

        .sosmed ul li {
            list-style: none;
            margin: 0 40px;
        }

        .sosmed ul li a .fab {
            font-size: 40px;
            color: black;
            line-height: 80px;
            transition: .5s;
        }

        .sosmed ul li a {
            position: relative;
            display: block;
            width: 80px;
            height: 80px;
            background: #808080;
            text-align: center;
            transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(0, 0);
            transition: .5s;
            box-shadow: -30px 30px 10px rgba(0, 0, 0, .5);
        }

        .sosmed ul li a:before {
            content: '';
            position: absolute;
            top: 10px;
            left: -20px;
            height: 100%;
            width: 20px;
            background: #93a092;
            transition: .5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        .sosmed ul li a:after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: -10px;
            height: 20px;
            width: 100%;
            background: var(--grey);
            transition: .5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        .sosmed ul li a:hover {
            transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(20px, -20px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, .5);
        }

        .sosmed ul li:hover .fab {
            color: white;
        }


        .sosmed ul li:hover:nth-child(1) a {
            background: var(--facebook);
        }

        .sosmed ul li:hover:nth-child(1) a:before {
            background: #5E77AB;
        }

        .sosmed ul li:hover:nth-child(1) a:after {
            background: #4C68A2;
        }

        .sosmed ul li:hover:nth-child(3) a {
            background: var(--twitter);
        }

        .sosmed ul li:hover:nth-child(3) a:before {
            background: #64B2EE;
        }

        .sosmed ul li:hover:nth-child(3) a:after {
            background: #73BAF0;
        }

        .sosmed ul li:hover:nth-child(2) a {
            background: var(--instagram);
        }

        .sosmed ul li:hover:nth-child(2) a:before {
            background: #E4506B;
        }

        .sosmed ul li:hover:nth-child(2) a:after {
            background: #E7617A;
        }

        .sosmed ul li:hover:nth-child(4) a {
            background: var(--apple);
        }

        .sosmed ul li:hover:nth-child(4) a:before {
            background: #171717;
        }

        .sosmed ul li:hover:nth-child(4) a:after {
            background: #2E2E2E;
        }
    </style>


</head>

<body>
    <!-- ========== HEADER ========== -->

    @if (Request::segment(1) != '')
        <header id="header"
            class="header center-aligned-navbar header-bg-transparent 
        @if (Request::segment(1) == '') header-white-nav-links-lg  
        @else
        header-black-nav-links-lg @endif 
        header-abs-top"
            data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
            <div class="header-section">
                <div id="logoAndNav" class="container">
                    <!-- Nav -->
                    <nav class="js-mega-menu navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{ route('news.list') }}">
                            <img src="{{ asset('logo.png') }}" alt="Logo">
                        </a>
                        <!-- End Logo -->

                        <!-- Responsive Toggle Button -->
                        <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
                            aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                            data-toggle="collapse" data-target="#navBar">
                            <span class="navbar-toggler-default">
                                <svg width="14" height="14" viewBox="0 0 18 18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor"
                                        d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                                </svg>
                            </span>
                            <span class="navbar-toggler-toggled">
                                <svg width="14" height="14" viewBox="0 0 18 18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor"
                                        d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                                </svg>
                            </span>
                        </button>
                        <!-- End Responsive Toggle Button -->

                        <!-- Navigation -->
                        <div id="navBar" class="collapse navbar-collapse navbar-nav-wrap-collapse">
                            <div class="navbar-body header-abs-top-inner">
                                <ul class="navbar-nav">
                                    <!-- Profil -->
                                    <li class="hs-has-sub-menu navbar-nav-item">

                                        <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link"
                                            href="{{ route('news.list') }}" aria-haspopup="true" aria-expanded="false"
                                            aria-labelledby="pagesSubMenu">Beranda</a>
                                        <!-- Pages - Submenu -->
                                        <div class="hs-sub-menu ">
                                        </div>
                                        <!-- End Pages - Submenu -->
                                    </li>
                                    <!-- End Profil -->

                                    @foreach ($menus as $menu)
                                        @if (count($menu->childs))
                                            <li class="hs-has-sub-menu navbar-nav-item">
                                                <a id="blogMegaMenu"
                                                    class="hs-mega-menu-invoker nav-link nav-link-toggle "
                                                    href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                    aria-labelledby="blogSubMenu">{{ $menu->nama ?? '' }}</a>

                                                <!-- Blog - Submenu -->
                                                <div id="blogSubMenu" class="hs-sub-menu dropdown-menu"
                                                    aria-labelledby="blogMegaMenu" style="min-width: 230px;">

                                                    @foreach ($menu->childs as $child1)
                                                        @if (count($child1->childs))
                                                            <div class="hs-has-sub-menu">
                                                                <a id="navLinkPagesAccount"
                                                                    class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle "
                                                                    href="javascript:;" aria-haspopup="true"
                                                                    aria-expanded="false"
                                                                    aria-controls="navSubmenuPagesAccount">{{ $child1->nama ?? '' }}
                                                                </a>

                                                                <div id="navSubmenuPagesAccount"
                                                                    class="hs-sub-menu dropdown-menu"
                                                                    aria-labelledby="navLinkPagesAccount"
                                                                    style="min-width: 230px;">

                                                                    @foreach ($child1->childs as $child2)
                                                                        <div class="hs-has-sub-menu">
                                                                            @if ($child2->jenis_st == 'JENIS_MENU_ST_01')
                                                                                <a id="navLinkPagesAccount"
                                                                                    class="hs-mega-menu-invoker dropdown-item
                                                                                @if (count($child2->childs)) dropdown-item-toggle @endif"
                                                                                    href="{{ route('helper.show-picture', ['path' => $child2->path]) }}"
                                                                                    target="_blank">{{ $child2->nama }}
                                                                                </a>
                                                                            @else
                                                                                @if (count($child2->childs))
                                                                                    <a id="navLinkPagesAccount"
                                                                                        class="hs-mega-menu-invoker dropdown-item
                                                                                            @if (count($child2->childs)) dropdown-item-toggle @endif"
                                                                                        href="javascript:;"
                                                                                        aria-expanded="false"
                                                                                        aria-haspopup="true">{{ $child2->nama }}
                                                                                    </a>
                                                                                @else
                                                                                    <a id="navLinkPagesAccount"
                                                                                        class="hs-mega-menu-invoker dropdown-item
                                                                                            @if (count($child2->childs)) dropdown-item-toggle @endif"
                                                                                        href="{{ url('page/' . $child2->slug) }}">{{ $child2->nama }}
                                                                                    </a>
                                                                                @endif
                                                                            @endif

                                                                            <div id="navSubmenuPagesAccount"
                                                                                class="hs-sub-menu  @if (count($child2->childs)) dropdown-menu @endif"
                                                                                aria-labelledby="navLinkPagesAccount">

                                                                                @foreach ($child2->childs as $child3)
                                                                                    @if ($child3->jenis_st == 'JENIS_MENU_ST_01')
                                                                                        <a id="navLinkPagesAccounts"
                                                                                            class="hs-mega-menu-invoker dropdown-item
                                                                                        @if (count($child3->childs)) dropdown-item-toggle @endif"
                                                                                            href="{{ route('helper.show-picture', ['path' => $child3->path]) }}"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            aria-controls="navSubmenuPagesAccount"
                                                                                            target="_blank">{{ $child3->nama ?? '' }}
                                                                                        </a>
                                                                                    @else
                                                                                        <a id="navLinkPagesAccounts"
                                                                                            class="hs-mega-menu-invoker dropdown-item
                                                                                        @if (count($child3->childs)) dropdown-item-toggle @endif"
                                                                                            href="{{ url('page/' . $child3->slug) }}">{{ $child3->nama ?? '' }}
                                                                                        </a>
                                                                                    @endif
                                                                                @endforeach

                                                                            </div>
                                                                        </div>
                                                                        {{-- @if ($child2->jenis_st == 'JENIS_MENU_ST_01')
                                                                            <a class="dropdown-item "
                                                                                href="{{ route('helper.show-picture', ['path' => $child2->path]) }}"
                                                                                target="_blank">{{ $child2->nama ?? '' }}</a>
                                                                        @else
                                                                            <a class="dropdown-item "
                                                                                href="{{ url('page/' . $child2->slug) }}">{{ $child2->nama ?? '' }}</a>
                                                                        @endif --}}
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @else
                                                            @if ($child1->jenis_st == 'JENIS_MENU_ST_01')
                                                                <a class="dropdown-item "
                                                                    href="{{ route('helper.show-picture', ['path' => $child1->path]) }}"
                                                                    target="_blank">{{ $child1->nama ?? '' }}</a>
                                                            @else
                                                                <a class="dropdown-item "
                                                                    href="{{ url('page/' . $child1->slug) }}">{{ $child1->nama ?? '' }}</a>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <!-- End Submenu -->
                                            </li>
                                        @else
                                            <li class="navbar-nav-item">

                                                @if ($menu->jenis_st == 'JENIS_MENU_ST_01')
                                                    <a id="{{ $menu->slug }}MegaMenu"
                                                        class="hs-mega-menu-invoker nav-link"
                                                        href="{{ route('helper.show-picture', ['path' => $menu->path]) }}"
                                                        target="_blank" aria-haspopup="true" aria-expanded="false"
                                                        aria-labelledby="{{ $menu->slug }}SubMenu">{{ $menu->nama ?? '' }}</a>
                                                @else
                                                    <a id="{{ $menu->slug }}MegaMenu"
                                                        class="hs-mega-menu-invoker nav-link"
                                                        href="{{ url('page/' . $menu->slug) }}" target="_blank"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        aria-labelledby="{{ $menu->slug }}SubMenu">{{ $menu->nama ?? '' }}</a>
                                                @endif

                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!-- End Navigation -->
                    </nav>
                    <!-- End Nav -->
                </div>
            </div>
        </header>
    @endif
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN ========== -->
    @yield('content')
    <!-- ========== END MAIN ========== -->

    <!-- ========== FOOTER ========== -->
    @include('layouts.footer')
    <!-- ========== END FOOTER ========== -->

    <!-- Go to Top -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
        data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory  -->
    <script src="{{ asset('front/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('front/assets/vendor/hs-header/dist/hs-header.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/hs-go-to/dist/hs-go-to.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/hs-unfold/dist/hs-unfold.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/hs-toggle-switch/dist/hs-toggle-switch.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/aos/dist/aos.js') }}"></script>

    <!-- JS Front -->
    <script src="{{ asset('front/assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('front/custombox/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('front/custombox/custombox.min.js') }}"></script>
    <script src="{{ asset('front/custombox/custombox.legacy.min.js') }}"></script>
    <script src="{{ asset('front/custombox/hs.modal-window.js') }}"></script>
    <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
    <script>
        $(document).ready(function() {
            responsiveVoice.speak(
                "Selamat datang di website Resmi DPMPTSP Kabupaten Wonosobo",
                "Indonesian Female", {
                    pitch: 1,
                    rate: 1,
                    volume: 1
                }
            );

            // Tag a dan h3 saat di hover
            $("a, h1, h2, h3, h4, h5").mouseover(function(e) {
                $text = e.target.innerText;
                suara($text);
            });

            $("img").mouseover(function(e) {
                $text = e.target.alt;
                suara($text);
            });

            // saat blok text pada tag p
            $('body').mouseup(function() {
                $text = getSelectedText();
                suara($text);
            });

            function getSelectedText() {
                if (window.getSelection) {
                    return window.getSelection().toString();
                } else if (document.selection) {
                    return document.selection.createRange().text;
                }
                return '';
            }

            function suara($text) {
                responsiveVoice.speak(
                    $text,
                    "Indonesian Female", {
                        pitch: 1,
                        rate: 1,
                        volume: 1
                    }
                );
            }

            responsiveVoice.enableWindowClickHook();
        });
    </script>
    <!-- accessibility widget -->
    <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>


    @stack('js')

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF HEADER
            // =======================================================
            var header = new HSHeader($('#header')).init();


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                desktop: {
                    position: 'left'
                }
            }).init();


            // INITIALIZATION OF UNFOLD
            // =======================================================
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


            // INITIALIZATION OF TOGGLE SWITCH
            // =======================================================
            $('.js-toggle-switch').each(function() {
                var toggleSwitch = new HSToggleSwitch($(this)).init();
            });


            // INITIALIZATION OF AOS
            // =======================================================
            AOS.init({
                duration: 650,
                once: true
            });


            // INITIALIZATION OF GO TO
            // =======================================================
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="{{ asset('front/assets/vendor/babel-polyfill/dist/polyfill.js') }}"><\/script>');
    </script>
</body>

</html>
