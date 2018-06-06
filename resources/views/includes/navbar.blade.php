<div class="container">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="/"><img src="/images/logo.png" class="logo" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbarsExample05">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">

                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="/category/{{ $category->id }}">{{ucfirst($category->title)}}</a>
                    </li>
                    @endforeach

            </ul>

            <div class="ml-auto">
                <ul class="navbar-nav flex-row navbar-social">
                    <li class="nav-item mx-auto mx-lg-auto">
                            <form class="d-flex">
                                <input class="form-control" type="search" placeholder="Axtar" aria-label="Search">
                                <button class="btn btn-outline-success ml-2 fa fa-search" type="submit"></button>
                            </form>
                    </li>
                    {{--<li class="nav-item ml-auto "><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>--}}
                    {{--<li class="nav-item"><a href=""><i class="fab fa-twitter"></i></a></li>--}}
                    {{--<li class="nav-item"><a href=""><i class="fab fa-instagram"></i></a></li>--}}
                </ul>


            </div>


        </div>
    </nav>

</div>