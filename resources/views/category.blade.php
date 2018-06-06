@extends('app')


@section('content')


<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="post-all">
                    <div class="row border-bottom">

                        <div class="category-name">
                            <h3><a href="/category/{{$category->id}}"><span class="category-icon"><i class="{{$category->icon}}"></i></span> {{ucfirst($category->title)}}</a>
                            </h3>
                        </div>

                        <div class="category-more ml-auto"><a href="">Bütün videolara bax <span
                                        class="category-more-icon"><i class="fa fa-angle-double-right"></i></span></a></div>

                    </div>

                    <div class="row videos border-light mt-3">

                        @foreach($posts as $post)
                        <div class="col-md-12 col-lg-4 mt-2">
                            <a href="/videos/{{ $post->id }}">
                                <div class="card">
                                    <img class="card-img-top" src="/images/{{ $post->image }}" alt="{{$post->description}}">
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
                                            <h2>{{$post->title}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach


                    </div>
                    <div class="text-center mt-4">
                        {{$posts->render()}}
                    </div>
                </div>


            </div> <!-- end of col-md-8-->

            @include('includes.sidebar')
        </div>
    </div>
</section>

@endsection
