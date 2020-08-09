@extends('layouts.front')
@section('content')
    <section class="page-header page-header-classic">
        <div class="container">
            <div class="row">
                <div class="col p-static">
                    <h1 data-title-border>User Profile</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">
        <div class="row">
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="d-flex justify-content-center mb-4">
                    <div class="profile-image-outer-container">
                        <div class="profile-image-inner-container bg-color-primary">
                            <img src="{{asset('assets/common/images/users')}}/{{$userProfile->photo}}">
                            <span class="profile-image-button bg-color-dark"><i
                                    class="fas fa-camera text-light"></i></span>
                        </div>
                        <input type="file" id="file" class="profile-image-input">
                    </div>
                </div>
                <aside class="sidebar mt-2" id="sidebar">
                    <div class="tabs tabs-vertical tabs-left tabs-navigation">
                        <ul class="nav nav-list flex-column mb-5">
                            <li class="nav-item"><a class="nav-link text-dark active" href="#tabsNavigation1"
                                                    data-toggle="tab">My Profile</a></li>
                            @if($userProfile->permission == 2)
                                <li class="nav-item"><a class="nav-link" href="#tabsNavigation2" data-toggle="tab">Content
                                        of Course</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tabsNavigation3" data-toggle="tab">Schedules</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#tabsNavigation4"
                                                        data-toggle="tab">Exams</a></li>
                            @endif
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9">
                {{--Profile tab--}}
                <div class="tab-pane tab-pane-navigation active" id="tabsNavigation1">
                    <div class="overflow-hidden mb-1">
                        <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">My</strong>
                            Profile</h2>
                    </div>
                    <div class="overflow-hidden mb-4 pb-3">
                        <p class="mb-0">Edit your Profile</p>
                    </div>
                    <form role="form" class="needs-validation">
                        <div class="form-group row">
                            <label
                                class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">First
                                name</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Last
                                name</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="email" value="{{$userProfile->email}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Street">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" value="" placeholder="City">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="State">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="text" value="{{$userProfile->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Confirm
                                password</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-lg-9">

                            </div>
                            <div class="form-group col-lg-3">
                                <input type="submit" value="Save" class="btn btn-primary btn-modern float-right"
                                       data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div>
                {{--/Profile tab--}}
                @if($userProfile->permission == 2)
                    {{-- Content Course --}}
                    <div class="tab-pane tab-pane-navigation" id="tabsNavigation2">
                        <div class="overflow-hidden mb-1">
                            <h2 class="font-weight-normal text-7 mb-0"><strong
                                    class="font-weight-extra-bold">Course</strong>of Content</h2>
                        </div>
                        <div class="col-sm-12 mb-4 mb-lg-0">
                            <div class="accordion accordion-secondary" id="accordion2Secondary">
                                {{--Start Embebedd systems--}}
                                @foreach($Displaies as $display)
                                    @php
                                        $test =$display->id;
                                    @endphp
                                    @if($display->course_name == "embedded" && $display->user_id == Auth::user()->id)
                                        <div class="card card-default">
                                            <div class="card-header">
                                                <h4 class="card-title m-0">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                                       data-parent="#accordion2Secondary" href="#collapse2SecondaryOne"
                                                       aria-expanded="false">
                                                        Full diploma Embedded Systems
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse2SecondaryOne" class="collapse" style="">
                                                <div class="card-body">
                                                    <p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <h3>Lesson 1</h3>
                                                            <iframe src="https://player.vimeo.com/video/446235473" width="250" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h3>Lesson 2</h3>
                                                            <iframe src="https://player.vimeo.com/video/446235473" width="250" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h3>Lesson 3</h3>
                                                            <iframe src="https://player.vimeo.com/video/446235473" width="250" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            @endif
                            {{--/Embebedd systems--}}
                            {{--Start ARM--}}
                            @if($display->course_name == "ARM" && $display->user_id == Auth::user()->id)
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                                               data-parent="#accordion2Secondary" href="#collapse2SecondaryTwo"
                                               aria-expanded="false">
                                                ARM Diploma
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse2SecondaryTwo" class="collapse" style="">
                                        <div class="card-body">
                                            <p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            {{--/ARM--}}
                            @endforeach
                        </div>
                    </div>
                    {{--/Content Course --}}
                    {{--Schudules --}}
                    <div class="tab-pane tab-pane-navigation" id="tabsNavigation3">
                        <div class="overflow-hidden mb-1">
                            <h2 class="font-weight-normal text-7 mb-0"><strong
                                    class="font-weight-extra-bold">Course</strong>Schudules</h2>
                        </div>
                        <div class="overflow-hidden mb-4 pb-3">
                            <p class="mb-0">Check your course time</p>
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Fri</th>
                                <th>Sat</th>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wen</th>
                                <th>Thu</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coursesTime as $time)
                                @if($time->course_id == $test )
                                    <tr>
                                        @if($time->course_id == '1')
                                            <td>ARM</td>
                                        @elseif($time->course_id == '2')
                                            <td>Embedded systems FullDiploma</td>
                                        @endif
                                        <td>
                                            @if($time->friday == 1)
                                                <i class="fa fa-check-square"></i>
                                            @else
                                                <i class="fa fa-minus"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($time->saturday == 1)
                                                <i class="fa fa-check-square"></i>
                                            @else
                                                <i class="fa fa-minus"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($time->sunday == 1)
                                                <i class="fa fa-check-square"></i>
                                            @else
                                                <i class="fa fa-minus"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($time->monday == 1)
                                                <i class="fa fa-check-square"></i>
                                            @else
                                                <i class="fa fa-minus"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($time->tuesday == 1)
                                                <i class="fa fa-check-square"></i>
                                            @else
                                                <i class="fa fa-minus"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($time->wednesday == 1)
                                                <i class="fa fa-check-square"></i>
                                            @else
                                                <i class="fa fa-minus"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if($time->thursday == 1)
                                                <i class="fa fa-check-square"></i>
                                            @else
                                                <i class="fa fa-minus"></i>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{--/Schudules --}}
                    {{--Exam --}}
                    <div class="tab-pane tab-pane-navigation" id="tabsNavigation4">
                        <div class="overflow-hidden mb-1">
                            <h2 class="font-weight-normal text-7 mb-0"><strong
                                    class="font-weight-extra-bold">Exams</strong></h2>
                        </div>
                        <div class="overflow-hidden mb-4 pb-3">
                            <p class="mb-0">Coming Soon</p>
                        </div>
                    </div>
                    {{--/Exam --}}
                @endif
            </div>
        </div>

    </div>
@endsection
