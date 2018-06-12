@extends('app')


@section('content')

    <section id="player">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 bg-light">

                    <div class="player-header">{{$post->title}}
                    </div>

                    <video id="playerr" controls crossorigin="" playsinline="" poster="/{{ $post->image }}" src="/{{$post->source}}">
                        <!-- Video files -->
                        <source src="/{{ $post->source }}" type="video/mp4" size="576">
                    </video>

                    <div class="container">
                        <div class="player-info">
                            <div class="row"><h5  class="category-name pl-1" style="border-left: 5px solid {{ $post->category->color}};">{{ ucfirst($post->category->name)}}</h5>

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
                                <h3 class="post-name">{!! $post->description !!}</h3>
                            </div>

                            <div class="row d-flex mt-4 mb-4">
                                @if($prev_post)
                                <a href="/videos/{{ $prev_post->slug }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Evvelki xeber</a>
                                @endif

                                @if($next_post)
                                <a href="/videos/{{ $next_post->slug }}" class="btn btn-primary ml-auto">Sonraki xeber <i class="fas fa-arrow-right"></i></a>
                                    @endif
                            </div>
                        </div>
                    </div>

                    <div class="post-all mt-4">
                        <div class="row border-bottom">

                            <div class="category-name" >
                                <h3><a href="/{{ $post->category->slug }}"><span class="category-icon"><i class="{{ $post->category->icon }}"></i></span> {{ ucfirst($post->category->name) }}</a>
                                </h3>
                            </div>

                            <div class="category-more ml-auto"><a href="/{{ $post->category->slug }}">Bütün videolara bax <span
                                            class="category-more-icon"><i class="fa fa-angle-double-right"></i></span></a></div>

                        </div>

                        <div class="row videos">
                    @foreach($category_posts as $post)
                            <div class="col-md-4">
                                <a href="/videos/{{ $post->slug }}">
                                    <div class="card">
                                        <img class="card-img-top" src="/{{ $post->image }}" alt="">
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
                        <img src="/images/adr.png" class="img-fluid" alt="">
                    </div>

                </div>



                @include('includes.sidebar')
            </div>
        </div>
    </section>

@endsection
