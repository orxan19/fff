<div class="col-lg-4 col-md-4">
    <div class="row">
        <div class="col-md-11">
            <div class="most-viewed-header border-bottom">
                <h2><a href="/popular"><span class="most-viewed-icon"><i class="fas fa-bolt"></i></span> Ən çox izlənilənlər</a>
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="container">
                @foreach($most_viewed_posts as $post)
                <div class="col-md-12 most-viewed-post">
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
                                    <h2>{{$post->title}}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

                <!-- Add here-->

                <div class="col-md-12 most-viewed-post mt-4">
                    <a href="">
                        <img src="images/adr2.png" class="img-fluid" alt="">
                    </a>
                </div>

                <!-- end of Add-->
                <div class="col-md-12">
                    <div class="most-viewed-header border-bottom mt-4">
                        <h2><a href="/featured"><span class="most-viewed-icon"><i class="fas fa-thumbs-up"></i> </span>
                        Redaktorun seçimi</a></h2>
                    </div>
                </div>

                    @foreach($is_featured as $post)
                <div class="col-md-12 most-viewed-post mt-4">
                    <a href="/videos/{{$post->id}}">
                        <div class="card">
                            <img class="card-img-top" src="/images/{{$post->image}}" alt="">
                            <div class="card-body">
                                <div class="row">
                                    <div><i class="fa fa-eye"></i> &nbsp;<span
                                                class="post-view-count">{{$post->views}}</span></div>
                                    <div class="ml-auto post-time">
                                        <i class="fa fa-clock"></i>
                                        <span>{{Carbon\Carbon::parse($post->created_at)->format('d M Y G:i:s') }}</span>
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

                <div class="col-md-12">
                    <div class="most-viewed-header border-bottom mt-4">
                        <h2><span class="most-viewed-icon"><i class="fas fa-share-alt"></i> </span> Sosial
                            şəbəkələrdə biz</h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="container social">
                        <div class="row mt-4 ">
                            <div class="col-3 offset"><a href=""><i class="fab fa-facebook-square"></i>

                                </a></div>
                            <div class="col-3 "><a href=""><i class="fab fa-twitter"></i></a></div>
                            <div class="col-3 "><a href=""><i class="fab fa-instagram"></i></a></div>
                            <div class="col-3 "><a href=""><i class="fab fa-youtube"></i></a></div>
                        </div>
                    </div>


                </div>


            </div> <!-- end of col-md-3-->
        </div> <!-- end of row-->
    </div>
</div>