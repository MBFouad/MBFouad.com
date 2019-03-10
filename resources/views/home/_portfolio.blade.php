<section id="portfolio" class="portfolio bg-white roomy-150">
    <div class="container">
        <div class="row">
            <div class="main_portfolio">
                <div class="col-md-5">
                    <div class="portfolio_item">
                        <div class="head_title">
                            <h5><span class="divider"></span> my latest works</h5>
                        </div>
                        <div class="row m-top-60">
                            <div class="col-sm-6">
                                <div class="portf_item_text photography">
                                    <a href="{{asset('images/portfolio-1.png')}}" class="popup-img"><img
                                                src="{{asset('images/portfolio-1.png')}}" alt=""/></a>
                                    <h5 class="m-top-30"></h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="portf_item_text branding xs-m-top-40">
                                    <a href="{{asset('images/portfolio-2.png')}}" class="popup-img"><img
                                                src="{{asset('images/portfolio-2.png')}}" alt=""/></a>
                                    <h5 class="m-top-30"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End off col-md-6  -->

                <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                    <div class="portfolio_content">
                        <div class="head_right">
                            <h2>portfolio</h2>
                        </div>

                        <div class="portfolio_content_text">
                            <p>{{$paragraphs['portfolio-description']->value}}</p>
                        </div>
                    </div>

                    <div class="may_client m-top-50">
                        <div class="head_title text-right">
                            <h5><span class="divider"></span> my clients</h5>
                        </div>
                        <div class="client_brand m-top-60 text-right">
                            <ul class="list-inline">
                                @foreach($projects as $project )
                                    <li><img style="width: 87px;" src="{{getProjectImage($project->image)}}" alt="{{$project->name}}"/></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div><!-- End off col-md-6  -->

                <div class="portfolio_btn text-center fix m-top-100">
                    <a href="{{route('projectIndex')}}" class="btn btn-primary">View All</a>
                </div>
            </div>
        </div><!-- End off row -->
    </div><!-- End off container -->
</section><!-- End off portfolio Section -->
