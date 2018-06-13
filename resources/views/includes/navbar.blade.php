<div class="container">
    <div class="row px-2">
        <form class="searchForm" action="/query">
            <input type="search" class="searchInput" name="query" autocomplete="off" placeholder="Hansı xəbəri axtarmaq istərdiniz?" />
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
                </ul>


            </div>


        </div>
    </nav>
</div>