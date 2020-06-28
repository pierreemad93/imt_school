@extends('layouts.admin')
@php
    $moduleName='Users';
    $pageTitle = $moduleName .' Control';
    $explode= explode(" " , $pageTitle);
    $pageDes= "Here you can add | edit | delete  ". $moduleName;
@endphp

@section('content')
    <div class="container-fluid container-fullw">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    {{--Start  col-heading--}}
                    <div class="col-sm-8">
                        <h2 class="over-title margin-bottom-15">{{$explode[0]}} <span class="text-bold">{{$explode[1]}}</span></h2>
                        <p>
                            {{$pageDes}}
                        </p>
                    </div>
                    {{--End  col-heading--}}
                    {{--Start  col-pdfButton--}}
                    <div class="col-sm-2">
                        <a type="button" href="{{route('imtPdf')}}" target="_blank" class="btn btn-wide btn-danger">
                            <i class="fa fa-file-pdf-o"></i> Convert {{$moduleName}} to PDF
                        </a>
                    </div>
                    {{--End  col-pdfButton--}}
                    {{--Start  col-addButton--}}
                    <div class="col-sm-2">
                        <a type="button" href="{{route('users.create')}}" class="btn btn-wide btn-primary">
                            <i class="fa fa-user-plus"></i> Add {{$moduleName}}
                        </a>
                    </div>
                    {{--End  col-addButton--}}
                </div>
                <table class="table table-striped table-hover" id="sample-table-2">
                    <thead>
                    <tr>
                        <th class="center">Photo</th>
                        <th>Username</th>
                        <th class="hidden-xs">Role</th>
                        <th class="hidden-xs">Email</th>
                        <th class="hidden-xs">Phone</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                    <tr>
                        <td class="center"><img src="{{asset('assets/common/images/users')}}/{{$row->photo}}" class="img-rounded" alt="image" style="height:10vh"></td>
                        <td>{{$row->name}}</td>
                        <td class="hidden-xs">
                            @if($row->permission == 0)
                                User
                            @elseif($row->permission == 1)
                                Admin
                            @elseif($row->permission == 2)
                                Student
                            @endif
                        </td>
                        <td class="hidden-xs">
                            <a href="#" rel="nofollow" target="_blank">
                                {{$row->email}}
                            </a></td>
                        <td class="hidden-xs">{{$row->phone}}</td>
                        <td class="center">
                            <div class="visible-md visible-lg hidden-sm hidden-xs">
                                <a href="#" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Share"><i class="fa fa-share"></i></a>
                                <a href="#" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
                            </div>
                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                <div class="btn-group" dropdown="">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" dropdown-toggle="">
                                        <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right dropdown-light" role="menu">
                                        <li>
                                            <a href="#">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Share
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Remove
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="center">
                {{$rows->links()}}

            </div>
        </div>
    </div>
@endsection
