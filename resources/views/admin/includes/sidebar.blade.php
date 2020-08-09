<div class="sidebar app-aside" id="sidebar">
    <div class="sidebar-container perfect-scrollbar">
        <nav>
            <!-- start: MAIN NAVIGATION MENU -->
            <div class="navbar-title">
                <span>Main Navigation</span>
            </div>
            <ul class="main-navigation-menu">
                <li class="active open">
                    <a href="{{route('admin.dashboard')}}">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-home"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Dashboard </span>
                            </div>
                        </div>
                    </a>
                </li>
                {{-- start users--}}
                <li>
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title">Users</span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('users.index')}}">
                                <span class="title">All Users </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('courses.index')}}">
                                <span class="title">Pending User</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- end users--}}
                {{-- start Course--}}
{{--                <li>--}}
{{--                    <a href="javascript:void(0)">--}}
{{--                        <div class="item-content">--}}
{{--                            <div class="item-media">--}}
{{--                                <i class="fa fa-users"></i>--}}
{{--                            </div>--}}
{{--                            <div class="item-inner">--}}
{{--                                <span class="title">Courses</span><i class="icon-arrow"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="title">All Courses</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                {{-- end Course--}}
            </ul>
            <!-- end: MAIN NAVIGATION MENU -->
            <!-- start: CORE FEATURES -->
            <div class="navbar-title">
                <span>Core Features</span>
            </div>
            <ul class="folders">
                <li>
                    <a href="{{url('/')}}">
                        <div class="item-content">
                            <div class="item-media">
                                <span class="fa-stack"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa-stack-1x ti-world fa-inverse"></i> </span>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Visit Site </span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- end: CORE FEATURES -->
        </nav>
    </div>
</div>
