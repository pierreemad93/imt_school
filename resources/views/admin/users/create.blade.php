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
                <h5 class="over-title margin-bottom-15"><i class="fa fa-user-plus"></i> {{$explode[0]}} <span class="text-bold">{{$explode[1]}}</span></h5>
                <p>
                    {{$pageDes}}
                </p>
                <div class="row margin-top-30">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <form role="form" method="POST" action="{{route('users.store')}}" >
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">
                                            Email address
                                        </label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">
                                            Password
                                        </label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-o btn-primary">
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
