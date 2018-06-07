@extends('app')


@section('content')

<div class="container">
    <section id="main">
        <div class="row responsive">

        @foreach($latest_posts as $latest_post)
                <div class="col-md-4">
                    <div class="item">
                        <a href="/videos/{{ $latest_post->slug }}" class="item-image">
                            <img src="images/{{ $latest_post->image }}"  class="img-fluid">
                            <div class="item-info">
                                <div class="view">
                                    <div class="view-count">
                                        <i class="fa fa-eye"></i>
                                        <span>{{ $latest_post->views }}</span>
                                    </div>

                                    <h2>{{$latest_post->title}}</h2>
                                    <div class="category-info">

                                        <div class="row bottom">
                                            <div class="category-name col-md-6" style="border-left: 5px solid #{{ $latest_post->category->color }}">
                                                {{ucfirst($latest_post->category->title)}}
                                            </div>

                                            <div class="time col-md-6 ml-auto">
                                                <i class="far fa-clock"></i>


                                                <span>{{ Carbon\Carbon::parse($latest_post->created_at)->format('d M Y G:i:s') }}
                                                    <br> {{$latest_post->created_at->diffForHumans()}}</span>
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
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                @foreach($categories as $category)

                <div class="post-all">
                    <div class="row border-bottom">

                        <div class="category-name">
                            <h3><a href="/category/{{ $category->slug }}"><span class="category-icon">
                                        <i class="{{ $category->icon }}"></i>
                                    </span> {{ ucfirst( $category->title ) }}</a>
                            </h3>
                        </div>

                        <div class="category-more ml-auto"><a href="/category/{{ $category->slug }}">Bütün videolara bax <span
                                        class="category-more-icon"><i class="fa fa-angle-double-right"></i></span></a></div>

                    </div>

                    <div class="row videos border-light mt-3">
                    @foreach($posts[$category->title] as $post)
                        <div class="col-md-12 col-lg-4">
                            <a href="/videos/{{ $post->slug }}">
                                <div class="card">
                                    <img class="card-img-top" src="images/{{ $post->image }}" alt="">
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
                                            <h2>{{ $post->title }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                @endforeach

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
