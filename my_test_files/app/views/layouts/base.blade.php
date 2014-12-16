<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Adoption | @yield('title', 'Adopting? How to adopt a child or baby.')</title>
        <link rel="icon" href="{{ App\Libraries\Helper::asset('img/favicon.ico') }}" />

        @yield('meta')

        <!-- Bootstrap core CSS -->
        {{ HTML::style( App\Libraries\Helper::asset('bootstrap/css/bootstrap.min.css') ) }}
        {{ HTML::style( App\Libraries\Helper::asset('css/adoption-bootstrap-theme.css' ) ) }}
        {{ HTML::style( App\Libraries\Helper::asset('css/header.css') ) }}
        {{ HTML::style( App\Libraries\Helper::asset('css/footer.css') ) }}

        {{ HTML::style( App\Libraries\Helper::asset('css/app.css') ) }}

        {{ HTML::style( App\Libraries\Helper::asset('css/component.css') ) }}

        {{ HTML::style( App\Libraries\Helper::asset('font-awesome/css/font-awesome.css') ) }}

        @yield('styles')

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic" />

        <script>
            var baseUrl = "{{ URL::to('/') }}";
            var assetUrl = "{{ App\Libraries\Helper::asset('/') }}";
            var isTouchDevice = 'ontouchstart' in document.documentElement;
        </script>

        @yield('headscript')

    </head>
    <body>
        <div id="wrapper">
            <header>
                <nav class="navbar navbar-adoption navbar-fixed-top top-header" role="navigation">
                    <div class="nav-position">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    @include('includes.header')
                    <ul class="nav navbar-nav navbar-right navbar-user no-margin navbar-user-icon">
                        @if(Auth::check())
                        <li class="dropdown user-dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" data-delay="1000" data-hover="dropdown" title="{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}">
                                <?php
                                $user = Auth::user();
                                if ($user->photo) {
                                    $user->photo_50 = str_replace("/{$user->user_id}.", "/{$user->user_id}_50.", $user->photo);
                                }
                                ?>
                                @if(!empty($user->photo_50))
                                <span><img src="{{ $user->photo_50 }}" height="30" /></span> <b class="caret"></b>
                                @else
                                <span><i class="fa fa-user fa-2x"></i></span> <b class="caret"></b>
                                @endif
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ URL::to('/sso/users/self') }}"><i class="fa fa-gear"></i> {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ URL::to('/sso/logout') }}"><i class="fa fa-power-off"></i> Log Out</a></li>
                            </ul>
                        </li>
                        @elseif (Request::is('sso/login'))
                        <li>
                            <a href="{{ URL::to('/sso/register') }}">
                                <i class="fa fa-user fa-2x"></i>
                            </a>
                        </li>
                        @elseif (!Request::is('sso/login'))
                        <li>
                            <a href="{{ URL::to('/sso/login') }}">
                                <i class="fa fa-user fa-2x"></i>
                            </a>
                        </li>
                        @endif
                    </ul>
                    <div class="navbar-form navbar-right search_box">
                        <form onsubmit="if (q.value == '') {
                                    return false;
                                }" method="get" action="http://adoption.com/searchadoption" id="frmgooglesearch" name="searchForm">
                            <div class="input-group">
                                <input type="hidden" value="000948484903177075177:8cywqphb1ua" id="cx" name="cx">
                                <input type="hidden" value="FORID:9" name="cof">
                                <input type="hidden" value="1" name="js">
                                <input type="text" name="q" id="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="" type="submit">
                                        <i class="fa fa-search">&nbsp;</i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-ex1-collapse pull-left hidden-sm hidden-md">
                        <!-- Side Nav Start -->
                        @yield('sidebar')
                        <!-- Side Nav End -->
                        <!-- Mobile Menu Logo -->
                        <a class="mobile-menu-logo overflow-hidden hidden-sm hidden-md hidden-lg" href="javascript:void(0);" data-toggle="modal" data-target=".globalnav-modal-lg">
                            <img class="pull-left" src="{{ App\Libraries\Helper::asset('img/adoption.com_login_logo.png') }}" alt="Adoption.com" />
                            <i class="fa fa-angle-right fa-2x"></i>
                        </a>
                        <!-- End -->
                        <!-- top nav -->
                        {{ App\Libraries\Helper::globalMenu() }}
                    </div><!-- /.navbar-collapse -->
                </nav>
            </header>

            @yield('main')

            @include('includes.footer')
        </div><!-- /#wrapper -->

        {{ HTML::script( App\Libraries\Helper::asset('lib/jquery/jquery.js') ) }}
        {{ HTML::script( App\Libraries\Helper::asset('lib/jquery/jquery.ui.js') ) }}

        {{ HTML::script( App\Libraries\Helper::asset('lib/jquery/owl.carousel.min.js') ) }}

        {{ HTML::script( App\Libraries\Helper::asset('bootstrap/js/bootstrap.min.js') ) }}

        {{ HTML::script( App\Libraries\Helper::asset('js/elevati/elevati.js') ) }}

        @yield('scripts')

        <div style="display:none;"> Host: <?php echo gethostname(); ?></div>
    </body>
</html>