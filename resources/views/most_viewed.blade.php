@extends('app')


@section('content')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="post-all">
                        <div class="row border-bottom">

                            <div class="category-name mx-auto">
                                <h3><span class="category-icon"><i class="fa fa-users"></i></span> Ən çox izlənilənlər
                                </h3>
                            </div>

                        </div>

                        <div class="row videos border-light mt-3">
                        @foreach($posts as $post)
                            <div class="col-md-6 col-lg-4 mt-4">
                                <a href="/videos/{{$post->slug}}">
                                    <div class="card">
                                        <img class="card-img-top" src="/images/{{$post->image}}" alt="{{$post->description}}">
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

                    </div>
                   <div class="row justify-content-center">
                       {{ $posts->render() }}
                   </div>

                </div> <!-- end of col-md-8-->


            </div>
        </div>
    </section>

@endsection
