@extends('layouts.front')
@section('content')
    {{-- Start header --}}
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-2 mb-5"
        style="background-image: url('{{asset('assets/front/img/course.jpg')}}');background-size:cover;background-attachment:fixed">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1>ARM</h1>
                </div>
            </div>
        </div>
    </section>
    {{-- End header --}}
    {{--Start Course Details --}}
    <div class="container-fluid">
        <div class="row mt-5 pt-5">
            <div class="col">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tabs tabs-vertical tabs-left tabs-navigation">
                            <ul class="nav nav-tabs col-sm-3">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#tabsNavigation1" data-toggle="tab"><i
                                            class="fas fa-info"></i> Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tabsNavigation2" data-toggle="tab"><i
                                            class="fas fa-money-bill-wave"></i> Price</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tabsNavigation3" data-toggle="tab"><i
                                            class="fas fa-stopwatch"></i> Duration</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tabsNavigation4" data-toggle="tab"><i
                                            class="fas fa-adjust"></i> Development KIT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tabsNavigation5" data-toggle="tab"><i
                                            class="fas fa-film"></i> Course Outline:</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-pane tab-pane-navigation active" id="tabsNavigation1">
                            <h4>Details</h4>
                            <p>IMT is offering professional ARM Programming Full Diploma with total duration 120 hours.
                                By the end of the diploma, students shall deliver a professional graduation project utilizing all
                                the concepts learned during the course on the presence of high-level committee from the
                                industry.
                                </p>
                            <p>Our instructors are well qualified to teach and have a long experience in teaching Embedded
                                Systems. All of them with no exception are teaching in ITI. We use a unified content selected
                                carefully and ensure all technical and practical aspects.
                                Most of our diploma is about making your own embedded system (Set your HW environment
                                and start developing your projects). Each student gets a very professional kit developed by our
                                team and its components are listed below</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabsNavigation2">
                            <h4>Price</h4>
                            <p>4000 L.E. (Development KIT Included).</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabsNavigation3">
                            <h4>Duration</h4>
                            <p>Total of 120 hours.</p>
                            <p>2 days/week with total of 8 hours: 4 hours each day --> Friday & Saturday.</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabsNavigation4">
                            <h4>Development KIT</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li>STM32 Blue Pill board based on STM32F103C8T6 Microcontroller</li>
                                        <li>Color TFT Display ST7335</li>
                                        <li>WiFi Module 8266</li>
                                        <li>8 Bit R2R DAC with LM386 Audio Amplifier and AUX Socket</li>
                                        <li>8x8 788BS LED Matrix Dispay</li>
                                        <li>Digital Universal Standard IR Receiver</li>
                                        <li>Digital RGB LED</li>
                                        <li>Serial To Parallel 74HC595</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li>Buzzer, LEDs and Tactile Switches</li>
                                        <li>Breadboard 170 Points</li>
                                        <li>STD ARM Debugger supports SW and JTAG with 10 Pin Flat Cable</li>
                                        <li>NEC Compatible Remote Control</li>
                                        <li>Stereo AUX standard Speaker</li>
                                        <li>PL2303 USB to TTL Module</li>
                                        <li>
                                                40 F-F Jumper wire
                                            <br>
                                                10 M-F Jumper wire
                                            <br>
                                                10 M-M Jumper wire
                                        </li>
                                        <li>Plastic Box for keeping all components</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabsNavigation5">
                            <h4>Course Outline</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>ARM Architecture</p>
                                    <p>RCC Peripheral</p>
                                    <p>DIO Peripheral</p>
                                    <p>NVIC</p>
                                    <p>NVIC Driver</p>
                                    <p>EXTI</p>
                                    <p>SysTick</p>
                                    <p>OS Scheduler</p>
                                </div>
                                <div class="col-md-4">
                                    <p>LED Matrix</p>
                                    <p>DAC</p>
                                    <p>Audible Signals</p>
                                    <p>Serial To Parallel</p>
                                    <p>IR Communication</p>
                                    <p>UART</p>
                                    <p>SPI and TFT</p>
                                    <p>DMA</p>
                                </div>
                                <div class="col-md-4">
                                    <p>WiFi Module</p>
                                    <p>Web Development</p>
                                    <p>IOT</p>
                                    <p>Story of Flashing</p>
                                    <p>Hex Parser</p>
                                    <p>Bootloader Implementation</p>
                                    <p>Workshop</p>
                                    <p>Project Defense </p>
                                </div>
                            </div>
                        </div>
                        @if(Auth::check())
                            <form method="post" action="{{route('courses.store')}}">
                                @csrf
                                <input type="hidden" value="{{Auth::user()->name}}" name="name">
                                <input type="hidden" value="{{Auth::user()->phone}}" name="phone">
                                <input type="hidden" value="{{Auth::user()->email}}" name="email">
                                <input type="hidden" value="arm-fulldiploma" name="coursename">
                                <input type="hidden" value="0" name="pending">
                               <input type="submit" value="Enroll" class="btn btn-primary btn-lg">
                            </form>
                            @else
                         <a href="{{route('login')}}" class="btn btn-info btn-lg">Login in to Enroll</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--End Course Details --}}
@endsection
