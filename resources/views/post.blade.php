@extends('app')


@section('content')

    <section id="player">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 bg-light">

                    <div class="player-header">{{$post->title}}
                    </div>

                    <video id="my-video" class="video-js" controls preload="auto"
                           poster="/images/{{$post->image}}" data-setup="{}">
                        <source src="/{{ $post->source }}" type='video/mp4'>
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>

                    <div class="container">
                        <div class="player-info">
                            <div class="row">
                                <h5  class="category-name pl-1" style="border-left: 5px solid #{{$post->category->color}};">{{ $post->category->title }}</h5>

                                <div class="ml-auto">
                                    <div class="row">
                                        <div class="view-info mr-5"><i class="fas fa-eye"></i> <span
                                                    class="view-count">{{ $post->views }}</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <h4 class="share-header">VİDEONU PAYLAŞ</h4>
                                </div>
                                <div class="col-md-9"></div>
                            </div>

                            <div class="row mt-4">
                                <h3 class="post-name">{{ $post->description }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="post-all mt-4">
                        <div class="row border-bottom">

                            <div class="category-name" >
                                <h3><a href="/category/{{ $post->category->id }}"><span class="category-icon"><i class="{{ $post->category->icon }}"></i></span> {{ ucfirst($post->category->title) }}</a>
                                </h3>
                            </div>

                            <div class="category-more ml-auto"><a href="/category/{{ $post->category->id }}">Bütün videolara bax <span
                                            class="category-more-icon"><i class="fa fa-angle-double-right"></i></span></a></div>

                        </div>

                        <div class="row videos">
                    @foreach($category_posts as $post)
                            <div class="col-md-4">
                                <a href="/videos/{{ $post->id }}">
                                    <div class="card">
                                        <img class="card-img-top" src="/images/{{ $post->image }}" alt="">
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
                                                <h2>{{ $post->title }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    @endforeach
                        </div>
                    </div>

                    <div class="row">
                        <img src="images/adr.png" class="img-fluid" alt="">
                    </div>

                </div>



                @include('includes.sidebar')
            </div>
        </div>
    </section>

@endsection
