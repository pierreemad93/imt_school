@extends('layouts.admin')
@php
    $moduleName='User';
    $pageTitle = 'Create ' .$moduleName ;
    $explode= explode(" " , $pageTitle);
    $pageDes= "Here you can  Create  ". $moduleName;

@endphp
@section('content')
    {{--Start Form--}}
    <div class="container-fluid container-fullw bg-white">
        <div class="row">
            <div class="col-md-12">
                <h2 class="over-title margin-bottom-15"><i class="fa fa-user-plus"></i> {{$explode[0]}} <span
                        class="text-bold">{{$explode[1]}}</span></h2>
                <p>
                    {{$pageDes}}
                </p>
                <div class="row margin-top-30">
                    <div>
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <form role="form" method="POST" action="{{route('users.store')}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">
                                                    First Name
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Enter First Name" name="firstname">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">
                                                    Last Name
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Enter Last Name" name="lastname">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">
                                                    Username
                                                </label>
                                                <input type="text"
                                                       class="form-control @error('name') has-error @enderror"
                                                       id="exampleInputEmail1"
                                                       placeholder="Enter username" name="name">
                                                @error('name')
                                                <div class="has-error">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">
                                                    Email address
                                                </label>
                                                <input type="email"
                                                       class="form-control @error('email') has-error @enderror"
                                                       id="exampleInputEmail1"
                                                       placeholder="Enter email" name="email">
                                                @error('email')
                                                <div class="has-error">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">
                                                    Password
                                                </label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                       placeholder="Password" value="12345678" name="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">
                                                    Phone
                                                </label>
                                                <input type="tel"
                                                       class="form-control @error('phone') has-error @enderror"
                                                       id="exampleInputPassword1"
                                                       placeholder="Enter you phone" name="phone">
                                                @error('phone')
                                                <div class="has-error">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="center">
                                                <h4>Upload Your image</h4>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="user-image">
                                                        {{--Display defualt image here--}}
                                                        <div class="fileinput-new thumbnail">
                                                            <img src="{{asset('assets/admin/assets/images/default-user.png')}}" alt="">
                                                        </div>
                                                        {{--/Display defualt --}}
                                                            <div class="user-image-buttons">
										                    <span class="btn btn-azure btn-file btn-sm">
                                                                <span class="fileinput-exists">
                                                                    <i class="fa fa-pencil"></i>
                                                                </span>
                                                                <input type="hidden"><input type="file" name="photo">
                                                            </span>
                                                                <a href="#" class="btn fileinput-exists btn-red btn-sm"
                                                                   data-dismiss="fileinput">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="social-icons block">
                                                    <ul>
                                                        <li data-placement="top" data-original-title="Twitter"
                                                            class="social-twitter tooltips">
                                                            <a href="http://www.twitter.com" target="_blank">
                                                                Twitter
                                                            </a>
                                                        </li>
                                                        <li data-placement="top" data-original-title="Facebook"
                                                            class="social-facebook tooltips">
                                                            <a href="http://facebook.com" target="_blank">
                                                                Facebook
                                                            </a>
                                                        </li>
                                                        <li data-placement="top" data-original-title="Google"
                                                            class="social-google tooltips">
                                                            <a href="http://google.com" target="_blank">
                                                                Google+
                                                            </a>
                                                        </li>
                                                        <li data-placement="top" data-original-title="LinkedIn"
                                                            class="social-linkedin tooltips">
                                                            <a href="http://linkedin.com" target="_blank">
                                                                LinkedIn
                                                            </a>
                                                        </li>
                                                        <li data-placement="top" data-original-title="Github"
                                                            class="social-github tooltips">
                                                            <a href="#" target="_blank">
                                                                Github
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <button id="save_user" class="btn btn-o btn-primary">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--End Form--}}
@endsection

