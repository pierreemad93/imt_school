@extends('layouts.admin')
@php
    $moduleName='Users';
    $pageTitle = $moduleName .' Pending';
    $explode= explode(" " , $pageTitle);
    $pageDes= "Here you can Pending  ". $moduleName;
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
                </div>
                <table class="table table-striped table-hover" id="sample-table-2">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th class="">Email</th>
                        <th class="">Phone</th>
                        <th class="">Course name</th>
                        <th>Controll</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td class="">
                                <a href="#" rel="nofollow" target="_blank">
                                    {{$row->email}}
                                </a></td>
                            <td class="">{{$row->phone}}</td>
                            <td>{{$row->coursename}}</td>
                            <td>
                                <a class="btn btn-primary">Approve</a>
                                <a class="btn btn-danger">Reject</a>
                            </td>
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
