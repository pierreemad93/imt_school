@extends('layouts.front')
@section('content')
    {{-- Start header --}}
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-2 mb-5"
        style="background-image: url('{{asset('assets/front/img/course.jpg')}}');background-size:cover;background-attachment:fixed">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1>Standard Embedded Systems Diploma</h1>
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
                            <p>The diploma is supervised by Eng. Ahmed Ashmawy (Embedded Systems department manager in
                                ITI).</p>
                            <p>80% of the diploma is about making your own embedded system (Set your HW environment and
                                start developing your projects) and the rest 20% is embedded systems concepts that you
                                must know.</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabsNavigation2">
                            <h4>Price</h4>
                            <p>3000 L.E. (Development KIT Included).</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabsNavigation3">
                            <h4>Duration</h4>
                            <p>Total of 160 hours.</p>
                            <p>2 days/week with total of 8 hours: 4 hours each day --> Friday & Saturday.</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabsNavigation4">
                            <h4>Development KIT</h4>
                            <p>AVR Atmega32 Microcontroller and AVR Programmer.</p>
                            <p>Motors (DC, Servo and stepper motor).</p>
                            <p>Character LCD and Seven Segment Displays.</p>
                            <p>Sensors (Temperature and Light).</p>
                            <p>Basic elements (Relay, Buzzer, Tactile switches, LEDs, Transistors, Darlington pair,
                                Optocouplers, Op Amp, Etc).</p>
                            <p>EEPROM</p>
                            <p>Other elements (USB to TTL converter, Keypad ...).</p>
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tabsNavigation5">
                            <h4>Course Outline</h4>
                            <p>C Programming and Data Structures Algorithms.</p>
                            <p>Embedded Systems Concepts.</p>
                            <p>Embedded C for Micro-controllers.</p>
                            <p>Embedded Systems Software Design Using UML.</p>
                            <p>HW/SW Co-Design.</p>
                            <p>Real Time Operating Systems and Scheduling.</p>
                            <p>Software Engineering for Embedded Systems.</p>
                            <p>Verification and Testing of Embedded Systems.</p>
                            <p>Embedded System Development Tools.</p>
                            <p>Graduation project.</p>
                        </div>
                        @if(Auth::check())
                            <form method="post" action="{{route('courses.store')}}">
                                @csrf
                                <input type="hidden" value="{{Auth::user()->name}}" name="name">
                                <input type="hidden" value="{{Auth::user()->phone}}" name="phone">
                                <input type="hidden" value="{{Auth::user()->email}}" name="email">
                                <input type="hidden" value="full-diploma-embeddsystems" name="coursename">
                                <input type="hidden" value="0" name="pending">
                               <input type="submit" value="Enroll" class="btn btn-primary btn-lg">
                            </form>
                            @else
                         <a href="{{route('login')}}" class="btn btn-info btn-lg">sing in to Enroll</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--End Course Details --}}
@endsection
