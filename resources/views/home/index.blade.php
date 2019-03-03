@extends('layout.layout')
@section('content')
    <!--Home Sections-->
    @include('home._slider')


    <!--About Section-->
    @include('home._about')


    <!--Portfolio Section-->
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
                                        <a href="{{asset('images/portfolio-1.jpg')}}" class="popup-img"><img
                                                    src="{{asset('images/portfolio-1.jpg')}}" alt=""/></a>
                                        <h5 class="m-top-30">Photography</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="portf_item_text branding xs-m-top-40">
                                        <a href="{{asset('images/portfolio-1.jpg')}}" class="popup-img"><img
                                                    src="{{asset('images/portfolio-2.jpg')}}" alt=""/></a>
                                        <h5 class="m-top-30">Branding</h5>
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
                                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.
                                    Por scientie,
                                    musica, sport etc, litot Europa usa li sam vocabular.
                                    Li lingues differe solmen in li grammatica, li pronunciation e li plu commun
                                    vocabules.</p>
                                <p>Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar
                                    payar custosi traductores.</p>
                            </div>
                        </div>

                        <div class="may_client m-top-50">
                            <div class="head_title text-right">
                                <h5><span class="divider"></span> my clients</h5>
                            </div>
                            <div class="client_brand m-top-60 text-right">
                                <ul class="list-inline">
                                    <li><img src="{{asset('images/clogo1.png')}}" alt=""/></li>
                                    <li><img src="{{asset('images/clogo2.png')}}" alt=""/></li>
                                    <li><img src="{{asset('images/clogo3.png')}}" alt=""/></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End off col-md-6  -->

                    <div class="portfolio_btn text-center fix m-top-100">
                        <a href="" class="btn btn-primary">View All</a>
                    </div>
                </div>
            </div><!-- End off row -->
        </div><!-- End off container -->
    </section><!-- End off portfolio Section -->


    <!--Choose Section-->
    <section id="choose" class="choose bg-light roomy-150">
        <div class="container">
            <div class="row">
                <div class="main_choose">
                    <div class="col-md-5">
                        <div class="choose_item">
                            <div class="head_right">
                                <h2>what I do</h2>
                            </div>
                            <div class="choose_item_text">
                                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.
                                    Por scientie,
                                    musica, sport etc, litot Europa usa li sam vocabular.
                                    Li lingues differe solmen in li grammatica, li pronunciation e li plu commun
                                    vocabules.</p>
                                <p>Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar
                                    payar custosi traductores.</p>
                            </div>
                            <div class="choose_btn text-center m-top-100">
                                <a href="" class="btn btn-primary">hire me</a>
                            </div>
                        </div>
                    </div> <!-- End off col-md-6 -->

                    <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                        <div class="choose_list fix">
                            <div class="choose_list_item fix">
                                <div class="choose_icon">
                                    <i class="fa fa-diamond"></i>
                                </div>
                                <div class="list_item_text">
                                    <h5>Branding Identity</h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque </p>
                                </div>
                            </div>
                            <div class="choose_list_item fix m-top-40">
                                <div class="choose_icon">
                                    <i class="fa fa-tablet"></i>
                                </div>
                                <div class="list_item_text">
                                    <h5>UI/UX Design</h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque </p>
                                </div>
                            </div>
                            <div class="choose_list_item fix m-top-40">
                                <div class="choose_icon">
                                    <i class="fa fa-send-o"></i>
                                </div>
                                <div class="list_item_text">
                                    <h5>Logo Design</h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque </p>
                                </div>
                            </div>
                            <div class="choose_list_item fix m-top-40">
                                <div class="choose_icon">
                                    <i class="fa  fa-pencil"></i>
                                </div>
                                <div class="list_item_text">
                                    <h5>Illustration</h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End off row -->
        </div> <!-- End off container -->
    </section> <!-- End off Choose Section-->


    <!--Contact Section-->
    <section id="contact" class="contact bg-white roomy-150">
        <div class="container">
            <div class="row">
                <div class="main_contact">
                    <div class="head_title">
                        <h5><span class="divider"></span> Get enquiries now</h5>
                    </div>
                    <div class="col-md-5">
                        <form class="m-top-50">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your e-mail">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your budget">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>type of proroject</option>
                                    <option>type</option>
                                    <option>proroject</option>
                                    <option>of</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="you message"></textarea>
                            </div>
                            <div class="form_btn text-right m-top-50">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                        <div class="contact_content">
                            <div class="head_right">
                                <h2>contact me</h2>
                            </div>

                            <div class="contact_content_text">
                                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.
                                    Por scientie, musica, sport etc, litot Europa usa li sam vocabular.</p>

                                <ul class="m-top-50">
                                    <li>Lorem ipsum street 123 <br/>
                                        London.
                                    </li>
                                    <li class="phone">+62818 0977 3430</li>
                                    <li class="info">info@email.com</li>
                                </ul>

                                <div class="author_text text-right">
                                    <h5>Regards!</h5>
                                    <h1>John Doe</h1>
                                    <h6>UI/UX & Web Designer</h6>
                                </div>
                                <div class="copyright text-right m-top-80">
                                    <p class="wow fadeInRight">Made with <i class="fa fa-heart"></i> by <a
                                                href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All
                                        Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection