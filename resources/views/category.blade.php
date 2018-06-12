@extends('app')


@section('content')


    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="post-all">
                        <div class="row border-bottom ">

                            <div class="category-name mx-auto">
                                <h3 class="pl-4"><span class="category-icon"><i
                                                class="{{$category->icon}}"></i></span> {{ucfirst($category->name)}}
                                </h3>
                            </div>


                        </div>

                        <div class="row videos border-light mt-3">

                            @foreach($posts as $post)
                                <div class="col-md-12 col-lg-4 mt-2">
                                    <a href="/videos/{{ $post->slug }}">
                                        <div class="card content-card">
                                            <div class="card-img-top"
                                                 style="background-image: url('/{{ $post->image }}'); ">
                                                <div class="playButton"><i class="fas fa-play-circle"></i></div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div><i class="fa fa-eye"></i> &nbsp;<span
                                                                class="post-view-count">{{$post->views}}</span></div>
                                                    <div class="ml-auto post-time">
                                                        <i class="fa fa-clock"></i>
                                                        <span>{{ Carbon\Carbon::parse($post->created_at)->format('d M Y G:i:s') }}</span>
                                                    </div>
                                                </div>

                                                <div class="row post-title">
                                                    <h2>{{ str_limit($post->title, 30)}}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach


                        </div>
                        <div class="row justify-content-center mt-4">
                            {{$posts->render()}}
                        </div>
                    </div>


                </div> <!-- end of col-md-8-->

                @include('includes.sidebar')
            </div>
        </div>
    </section>

@endsection
