@extends('app')


@section('content')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <div class="post-all">
                        <div class="row border-bottom">

                            <div class="category-name">
                                <h3><a href=""><span class="category-icon"><i class="fa fa-users"></i></span> Ən çox izlənilənlər</a>
                                </h3>
                            </div>

                        </div>

                        <div class="row videos border-light mt-3">

                            <div class="col-md-12 col-lg-4">
                                <a href="">
                                    <div class="card">
                                        <img class="card-img-top" src="images/car.jpg" alt="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div><i class="fa fa-eye"></i> &nbsp;<span
                                                            class="post-view-count">100</span></div>
                                                <div class="ml-auto post-time">
                                                    <i class="fa fa-clock"></i>
                                                    <span>30 May 2018, 16:24</span>
                                                </div>
                                            </div>

                                            <div class="row post-title">
                                                <h2>Buraxılış imtahanlarının vaxtı məlum olub</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>


                </div> <!-- end of col-md-8-->


            </div>
        </div>
    </section>

@endsection
