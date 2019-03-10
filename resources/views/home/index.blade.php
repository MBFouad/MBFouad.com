@extends('layout.layout')
@section('content')
    <!--Home Sections-->
    @include('home._slider')


    <!--About Section-->
    @include('home._about')


    <!--Portfolio Section-->
    @include('home._portfolio')

    <!--Choose Section-->
    {{--@include('home._choose')--}}
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