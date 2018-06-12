<div class="container">
    <div class="row px-2">
        <form class="searchForm" action="/query">
            <input type="search" class="searchInput" name="query" autocomplete="off" placeholder="Hansi xeberi axtarmaq isterdiniz?" />
            <button  class="closeForm"><i class="fas fa-times"></i></button>
        </form>

    </div>
    <nav class="navbar navbar-expand-lg ml-auto">
        <a class="navbar-brand" href="/"><img src="/images/metbuat-tv-logo.png" class="logo" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbarsExample05">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">


                @foreach($categories as $category)
                    @if($loop->iteration == 8)
                        @break
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/{{ $category->slug }}">{{ucfirst($category->name)}}</a>
                    </li>

                @endforeach

                @if(count($categories) > 7)
                <!-- Example single danger button -->
                    <div class="nav-item btn-group" style="display: block">
                        <button type="button" class="btn btn-dropdown" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars mr-1 large-dropdown-icon"></i> <i class="fas fa-angle-down mr-1 mobile-dropdown-icon"></i> Diger
                        </button>
                        <div class="dropdown-menu">

                            {{--<style>--}}
                                {{--.dropdown-toggle {--}}
                                    {{--padding: 10px 20px;--}}
                                    {{--background: #eee !important;--}}
                                {{--}--}}

                                {{--.dropdown-menu {--}}

                                {{--}--}}

                                {{--.dropdown-menu > li > a {--}}

                                {{--}--}}
                            {{--</style>--}}
                            @endif




                            @foreach($categories as $category)
                                @if($loop->iteration < 8)
                                    @continue
                                @endif

                            @if(!$loop->last)
                                        <li class="nav-item dropdown-item border-bottom">
                                            <a class="nav-link"
                                               href="/{{ $category->slug }}">{{ucfirst($category->name)}}</a>
                                        </li>

                                @else
                                        <li class="nav-item dropdown-item">
                                            <a class="nav-link"
                                               href="/{{ $category->slug }}">{{ucfirst($category->name)}}</a>
                                        </li>

                                @endif



                            @endforeach
                            @if(count($categories) > 9)

                        </div>
                    </div>
                @endif
            </ul>

            <div class="ml-auto">
                <ul class="navbar-nav flex-row navbar-social">
                    <li class="nav-item mx-auto mx-lg-auto">
                        <div class="top">
                            <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </li>


                    {{--<li class="nav-item ml-auto "><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>--}}
                    {{--<li class="nav-item"><a href=""><i class="fab fa-twitter"></i></a></li>--}}
                    {{--<li class="nav-item"><a href=""><i class="fab fa-instagram"></i></a></li>--}}
                </ul>


            </div>


        </div>
    </nav>
    <style>
        .searchForm{
            width: 100%;
            display:none;
            transition: background-color 0.2s ease-in;
            background:#1e1e1e;
            padding:20px 42px;
            text-align:center;
            position:relative;
            z-index: 1040;
            margin-bottom: 20px;
        }

        .searchInput{
            border:none;
            padding:10px 0;
            background:none;
            color:white;
            outline:none;
            border-bottom:1px solid white;
            width:80%;
            font-size:26px;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
        }

        .searchButton{
            background:none;
            border:none;
        }

        .closeForm {
            background: transparent;
            color: #ffffff;
            border: none;
            font-size: 30px;


        }

        .closeForm:focus{
            outline: none;
        }

        .searchButton{
            font-size:36px;
            color:white;
        }

        .searchInput::-webkit-input-placeholder {
            color: rgba(255,255,255,0.6);
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
        }

        .btn-search{
            text-decoration:none;
            background-color:transparent;
            color:white;
            cursor: pointer;
            font-size: 24px ;
            border-radius:0 0 2px 2px;
            -webkit-transition: background-color 250ms ease-out, ;
            -moz-transition: background-color 250ms ease-out;
            -o-transition: background-color 250ms ease-out;
            transition: background-color 250ms ease-out;
        }

        .btn-search:hover{

        }
    </style>
</div>