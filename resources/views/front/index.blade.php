@extends('layouts.front')
@section('content')
    <div class="slider-container rev_slider_wrapper" style="height: 670px;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider
             data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
            <ul>
                <li class="slide-overlay slide-overlay-primary" data-transition="fade">
                    <img src="{{asset('assets/front/img/slides/slide-1.jpg')}}"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['-145','-145','-145','-320']"
                         data-y="center" data-voffset="['-80','-80','-80','-130']"
                         data-start="1000"
                         data-transform_in="x:[-300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;">
                        <img src="{{asset('assets/front/img/slides/slide-title-border.png')}}" alt="">
                    </div>

                    <div class="tp-caption text-color-light font-weight-normal"
                         data-x="center"
                         data-y="center" data-voffset="['-80','-80','-80','-130']"
                         data-start="700"
                         data-fontsize="['16','16','16','40']"
                         data-lineheight="['25','25','25','45']"
                         data-transform_in="y:[-50%];opacity:0;s:500;">
                        WE Make technology, WE ARE
                    </div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['145','145','145','320']"
                         data-y="center" data-voffset="['-80','-80','-80','-130']"
                         data-start="1000"
                         data-transform_in="x:[300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;">
                        <img src="{{asset('assets/front/img/slides/slide-title-border.png')}}" alt="">
                    </div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-hoffset="['-105','-105','-105','-225']"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">I
                    </div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-hoffset="['-20','-20','-20','-140']"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">M
                    </div>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-hoffset="['90','90','90','-100']"
                         data-y="center"
                         data-fontsize="['145','145','145','250']"
                         data-lineheight="['150','150','150','260']">T
                    </div>


                    <div class="tp-caption font-weight-light text-color-light"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-x="center"
                         data-hoffset="['-10','-10','-10','-80']"
                         data-y="center" data-voffset="['85','85','85','140']"
                         data-fontsize="['18','18','18','40']"
                         data-lineheight="['26','26','26','45']">School
                    </div>

                </li>
                {{--                <li data-transition="fade">--}}
                {{--                    <img src="{{asset('assets/front/img/slides/slide-bg.jpg')}}"--}}
                {{--                         alt=""--}}
                {{--                         data-bgposition="center center"--}}
                {{--                         data-bgfit="cover"--}}
                {{--                         data-bgrepeat="no-repeat"--}}
                {{--                         class="rev-slidebg">--}}

                {{--                    <div class="tp-caption tp-resizeme"--}}
                {{--                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
                {{--                         data-type="image"--}}
                {{--                         data-x="right"--}}
                {{--                         data-y="top"--}}
                {{--                         data-width="['auto']"--}}
                {{--                         data-height="['auto']"--}}
                {{--                         data-basealign="slide"><img src="{{asset('assets/front/img/slides/slide-devices.jpg')}}" alt=""></div>--}}

                {{--                    <div class="tp-caption tp-resizeme"--}}
                {{--                         data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
                {{--                         data-type="image"--}}
                {{--                         data-x="left"--}}
                {{--                         data-y="center"--}}
                {{--                         data-width="['auto']"--}}
                {{--                         data-height="['auto']"--}}
                {{--                         data-basealign="slide"><img src="{{asset('assets/front/img/slides/slide-laptop.jpg')}}" alt=""></div>--}}

                {{--                    <div class="tp-caption tp-resizeme rs-parallaxlevel-7"--}}
                {{--                         data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
                {{--                         data-type="image"--}}
                {{--                         data-x="-500"--}}
                {{--                         data-y="-700"--}}
                {{--                         data-width="['auto']"--}}
                {{--                         data-height="['auto']"--}}
                {{--                         data-basealign="slide"><img src="{{asset('assets/front/img/slides/slide-parallax-porto-symbol.png')}}" alt=""></div>--}}

                {{--                    <div class="tp-caption"--}}
                {{--                         data-x="center" data-hoffset="['-150','-150','-150','-240']"--}}
                {{--                         data-y="center" data-voffset="['-50','-50','-50','-75']"--}}
                {{--                         data-start="1000"--}}
                {{--                         data-transform_in="x:[-300%];opacity:0;s:500;"--}}
                {{--                         data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt="">--}}
                {{--                    </div>--}}

                {{--                    <div class="tp-caption text-color-light font-weight-normal"--}}
                {{--                         data-x="center"--}}
                {{--                         data-y="center" data-voffset="['-50','-50','-50','-75']"--}}
                {{--                         data-start="700"--}}
                {{--                         data-fontsize="['22','22','22','40']"--}}
                {{--                         data-lineheight="['25','25','25','45']"--}}
                {{--                         data-transform_in="y:[-50%];opacity:0;s:500;">DO YOU NEED A NEW--}}
                {{--                    </div>--}}

                {{--                    <div class="tp-caption d-none d-md-block"--}}
                {{--                         data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
                {{--                         data-x="center" data-hoffset="['80','80','80','135']"--}}
                {{--                         data-y="center" data-voffset="['-33','-33','-33','-55']"><img--}}
                {{--                            src="img/slides/slide-blue-line.png" alt=""></div>--}}

                {{--                    <div class="tp-caption"--}}
                {{--                         data-x="center" data-hoffset="['150','150','150','240']"--}}
                {{--                         data-y="center" data-voffset="['-50','-50','-50','-75']"--}}
                {{--                         data-start="1000"--}}
                {{--                         data-transform_in="x:[300%];opacity:0;s:500;"--}}
                {{--                         data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt="">--}}
                {{--                    </div>--}}

                {{--                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"--}}
                {{--                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
                {{--                         data-x="center"--}}
                {{--                         data-y="center"--}}
                {{--                         data-fontsize="['50','50','50','90']"--}}
                {{--                         data-lineheight="['55','55','55','95']">WEB DESIGN?--}}
                {{--                    </div>--}}

                {{--                    <div class="tp-caption font-weight-light"--}}
                {{--                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'--}}
                {{--                         data-x="center"--}}
                {{--                         data-y="center" data-voffset="['40','40','40','80']"--}}
                {{--                         data-fontsize="['18','18','18','50']"--}}
                {{--                         data-lineheight="['20','20','20','55']"--}}
                {{--                         style="color: #b5b5b5;">Check out our options and features--}}
                {{--                    </div>--}}

                {{--                </li>--}}
                <li class="slide-overlay" data-transition="fade">
                    <img src="{{asset('assets/front/img/slides/slide-2.jpg')}}"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['-170','-170','-170','-350']"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="1000"
                         data-transform_in="x:[-300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;"><img
                            src="{{asset('assets/front/img/slides/slide-title-border.png')}}" alt="">
                    </div>

                    <div class="tp-caption text-color-light font-weight-normal"
                         data-x="center"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="700"
                         data-fontsize="['16','16','16','40']"
                         data-lineheight="['25','25','25','45']"
                         data-transform_in="y:[-50%];opacity:0;s:500;">WE WORK HARD AND IMT HAS
                    </div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="['170','170','170','350']"
                         data-y="center" data-voffset="['-50','-50','-50','-75']"
                         data-start="1000"
                         data-transform_in="x:[300%];opacity:0;s:500;"
                         data-transform_idle="opacity:0.2;s:500;"><img
                            src="{{asset('assets/front/img/slides/slide-title-border.png')}}" alt="">
                    </div>

                    <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-x="center"
                         data-y="center"
                         data-fontsize="['50','50','50','90']"
                         data-lineheight="['55','55','55','95']">New Book
                    </div>

                    <div class="tp-caption font-weight-light ws-normal text-center"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-x="center"
                         data-y="center" data-voffset="['60','60','60','105']"
                         data-width="['530','530','530','1100']"
                         data-fontsize="['18','18','18','40']"
                         data-lineheight="['26','26','26','45']"
                         style="color: #b5b5b5;">Call <strong class="text-color-light">Customer Service </strong>
                        And book it now
                    </div>

                </li>

            </ul>
        </div>
    </div>
    {{--Start H2 Heading--}}
    <div class="container text-center mt-5">
        {{--Start Welcome To Heading--}}
        <div class="row align-items-center">
            <div class="col-sm-12">
                <h1 class="word-rotator letters rotate-2 mb-2">
                    <span>Welcome  To</span>
                    <span class="word-rotator-words bg-primary" style="width: 153.641px;">
											<b class="is-visible" style="opacity: 1;"><i class="in"><em>I</em></i><i
                                                    class="in"><em>M</em></i><i class="in"><em>T</em></i></b>
											<b style="opacity: 1;"><i class="out"><em>S</em></i><i
                                                    class="out"><em>c</em></i><i class="out"><em>h</em></i><i
                                                    class="out"><em>o</em></i><i class="out"><em>o</em></i><i
                                                    class="out"><em>l</em></i></b>
										</span>
                </h1>
            </div>
        </div>
        {{--End Welcome To Heading--}}
        {{--Start Sub  Heading--}}
        <div class="row align-items-center">
            <div class="col-sm-12">
                <h2 class="word-rotator letters rotate-2 mb-2">
                    <span>The best Training center  in Egypt for</span>
                    <span class="word-rotator-words bg-primary" style="width: 153.641px;">
											<b class="is-visible" style="opacity: 1;"><i class="in"><em>E</em></i><i
                                                    class="in"><em>m</em></i><i class="in"><em>b</em></i><i
                                                    class="in"><em>e</em></i><i class="in"><em>d</em></i><i
                                                    class="in"><em>d</em></i><i class="in"><em>e</em></i><i
                                                    class="in"><em>d</em></i></b>
											<b style="opacity: 1;"><i class="out"><em>S</em></i><i
                                                    class="out"><em>y</em></i><i class="out"><em>s</em></i><i
                                                    class="out"><em>t</em></i><i class="out"><em>e</em></i><i
                                                    class="out"><em>m</em></i></b>
										</span>
                </h2>
            </div>
        </div>
        {{--End Sub Heading--}}
    </div>
    {{--End H2 Heading--}}
    {{--Start About US--}}
    @include('front.includes.about_us')
    {{--End About US--}}
    <section class="section section-custom-map appear-animation" data-appear-animation="fadeInUpShorter">
        <section class="section section-default section-footer">
            <div class="container">
                <div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="col-lg-6">
                        <div class="recent-posts mb-5">
                            <h2 class="font-weight-normal text-6 mb-4"><strong
                                    class="font-weight-extra-bold">Latest</strong> Posts</h2>
                            <div class="owl-carousel owl-theme dots-title mb-0"
                                 data-plugin-options="{'items': 1, 'autoHeight': true, 'autoplay': true, 'autoplayTimeout': 8000}">
                                <div class="row">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <article>
                                            <div class="row">
                                                <div class="col-auto pr-0">
                                                    <div class="date">
                                                        <span class="day font-weight-extra-bold">15</span>
                                                        <span class="month text-1">JAN</span>
                                                    </div>
                                                </div>
                                                <div class="col pl-1">
                                                    <h4 class="text-primary text-4"><a class="d-block"
                                                                                       href="blog-post.html">Lorem ipsum
                                                            dolor sit amet, consectetur</a></h4>
                                                    <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit.</p>
                                                    <a href="/"
                                                       class="read-more text-color-dark font-weight-semibold text-2">read
                                                        more <i
                                                            class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-6">
                                        <article>
                                            <div class="row">
                                                <div class="col-auto pr-0">
                                                    <div class="date">
                                                        <span class="day font-weight-extra-bold">14</span>
                                                        <span class="month text-1">JAN</span>
                                                    </div>
                                                </div>
                                                <div class="col pl-1">
                                                    <h4 class="text-primary text-4"><a class="d-block"
                                                                                       href="blog-post.html">Lorem ipsum
                                                            dolor sit amet, consectetur</a></h4>
                                                    <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit.</p>
                                                    <a href="/"
                                                       class="read-more text-color-dark font-weight-semibold text-2">read
                                                        more <i
                                                            class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <article>
                                            <div class="row">
                                                <div class="col-auto pr-0">
                                                    <div class="date">
                                                        <span class="day font-weight-extra-bold">13</span>
                                                        <span class="month text-1">JAN</span>
                                                    </div>
                                                </div>
                                                <div class="col pl-1">
                                                    <h4 class="text-primary text-4"><a class="d-block"
                                                                                       href="blog-post.html">Lorem ipsum
                                                            dolor sit amet, consectetur</a></h4>
                                                    <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit.</p>
                                                    <a href="/"
                                                       class="read-more text-color-dark font-weight-semibold text-2">read
                                                        more <i
                                                            class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-6">
                                        <article>
                                            <div class="row">
                                                <div class="col-auto pr-0">
                                                    <div class="date">
                                                        <span class="day font-weight-extra-bold">12</span>
                                                        <span class="month text-1">JAN</span>
                                                    </div>
                                                </div>
                                                <div class="col pl-1">
                                                    <h4 class="text-primary text-4"><a class="d-block"
                                                                                       href="blog-post.html">Lorem ipsum
                                                            dolor sit amet, consectetur</a></h4>
                                                    <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit.</p>
                                                    <a href="/"
                                                       class="read-more text-color-dark font-weight-semibold text-2">read
                                                        more <i
                                                            class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <article>
                                            <div class="row">
                                                <div class="col-auto pr-0">
                                                    <div class="date">
                                                        <span class="day font-weight-extra-bold">11</span>
                                                        <span class="month text-1">JAN</span>
                                                    </div>
                                                </div>
                                                <div class="col pl-1">
                                                    <h4 class="text-primary text-4"><a href="blog-post.html">Lorem ipsum
                                                            dolor sit amet, consectetur</a></h4>
                                                    <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit.</p>
                                                    <a href="/"
                                                       class="read-more text-color-dark font-weight-semibold text-2">read
                                                        more <i
                                                            class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-6">
                                        <article>
                                            <div class="row">
                                                <div class="col-auto pr-0">
                                                    <div class="date">
                                                        <span class="day font-weight-extra-bold">10</span>
                                                        <span class="month text-1">JAN</span>
                                                    </div>
                                                </div>
                                                <div class="col pl-1">
                                                    <h4 class="text-primary text-4"><a href="blog-post.html">Lorem ipsum
                                                            dolor sit amet, consectetur</a></h4>
                                                    <p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit.</p>
                                                    <a href="/"
                                                       class="read-more text-color-dark font-weight-semibold text-2">read
                                                        more <i
                                                            class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">What</strong>
                            Client’s Say</h2>
                        <div class="row">
                            <div class="owl-carousel owl-theme dots-title dots-title-pos-2 mb-0"
                                 data-plugin-options="{'items': 1, 'autoHeight': true}">
                                <div>
                                    <div class="col">
                                        <div class="testimonial testimonial-primary">
                                            <blockquote>
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Donec hendrerit vehicula est, in consequat.</p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down"></div>
                                            <div class="testimonial-author">
                                                <div class="testimonial-author-thumbnail">
                                                    <img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
                                                </div>
                                                <p><strong>John Doe</strong><span>Okler</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="col">
                                        <div class="testimonial testimonial-primary">
                                            <blockquote>
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in
                                                    consequat.</p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down"></div>
                                            <div class="testimonial-author">
                                                <div class="testimonial-author-thumbnail">
                                                    <img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
                                                </div>
                                                <p><strong>John Doe</strong><span>Okler</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    {{-- Start Contact-us --}}
    @include('front.includes.contact_us')
    {{-- End Contact-us --}}
@endsection
