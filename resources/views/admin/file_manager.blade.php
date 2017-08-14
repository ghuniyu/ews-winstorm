@extends('layouts.adminmaster')

@section('title','File Data Manager')

@section('content')
            <div class="page-header">
                <h1>File Manager<small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">File Manager</li>
                </ol>
            </div>

@endsection
<!--load js for table-->
    <script type="text/javascript" src="{{url('assets/plugins/lib/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/lib/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/lib/plugins.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/app.base.js')}}"></script>