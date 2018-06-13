@extends('app')


@section('content')

<div class="container">
    <section id="main">
        <div class="row responsive">

        @foreach($latest_posts as $latest_post)
                <div class="col-md-4">
                    <div class="item">
                        <a href="/videos/{{ $latest_post->slug }}" class="item-image">
                            <img src="/{{ $latest_post->image }}"  class="img-fluid">
                            <div class="item-info">
                                <div class="view">
                                    <div class="view-count">
                                        <i class="fa fa-eye"></i>
                                        <span>{{ $latest_post->views }}</span>
                                    </div>

                                    <h2>{{$latest_post->title}}</h2>
                                    <div class="category-info">

                                        <div class="row bottom">
                                            <div class="category-name col-md-6" style="border-left: 5px solid {{ $latest_post->category->color }}">
                                                {{ucfirst($latest_post->category->name)}}
                                            </div>

                                            <div class="time col-md-6 ml-auto">
                                                <i class="far fa-clock"></i>


                                                <span>{{ Carbon\Carbon::parse($latest_post->created_at)->format('d M Y G:i:s') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

            @endforeach

        </div>
</section>
</div>

<section id="content">
    <div class="container page ">
        <div class="row site-content">
            <div class="col-md-8">

                @foreach($categories as $category)

                 @if($loop->iteration == 6)
                     @break
                     @endif
                <div class="post-all">
                    <div class="row border-bottom" >

                        <div class="category-name mx-auto">
                            <h3><a href="/{{ $category->slug }}"><span class="category-icon">
                                        <i class="{{ $category->icon }}"></i>
                                    </span> {{ ucfirst( $category->name ) }}</a>
                            </h3>
                        </div>

                        {{--<div class="category-more ml-auto"><a href="/{{ $category->slug }}">Bütün videolara bax <span class="category-more-icon"><i class="fa fa-angle-double-right"></i></span></a></div>--}}

                    </div>

                    <div class="row videos border-light ">
                    @foreach($posts[$category->name] as $post)
                        <div class="col-md-12 col-lg-4 mt-3">
                            <a href="/videos/{{ $post->slug }}">
                                <div class="card content-card">

                                    <div class="card-img-top" style="background-image: url('/{{ $post->image }}'); ">
                            <div class="playButton"><i class="fas fa-play-circle"></i></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div><i class="fa fa-eye"></i> &nbsp;<span
                                                        class="post-view-count">{{ $post->views }}</span></div>
                                            <div class="ml-auto post-time">
                                                <i class="fa fa-clock"></i>
                                                <span>{{ Carbon\Carbon::parse($post->created_at)->format('d M Y G:i:s') }}</span>
                                            </div>
                                        </div>

                                        <div class="row post-title">
                                            <h2>{{ str_limit($post->title, 30) }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                @endforeach

                    </div>

                    <div class="row mt-4">
                        <div class="category-more mx-auto border border-dark p-2 pr-3 pl-3 " style="border-radius: 30px;border-width: 2px !important;"><a href="/{{ $category->slug }}">Bütün videolara bax</a></div>
                    </div>
                </div>


                @endforeach


                <!-- End first -->


            </div> <!-- end of col-md-8-->

            @include('includes.sidebar')
        </div>
    </div>
</section>

@endsection
