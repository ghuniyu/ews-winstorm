@extends('layouts.adminmaster')

    <script type="text/javascript" src="{{url('assets/plugins/lib/modernizr.js')}}"></script>
    <link rel="icon" href="{{url('assets/images/favicon.png')}}" type="image/gif">
    
@section('title','File Data')


@section('content')
            <div class="page-header">
                <h1>File Data <small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">File Data</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 style="text-align: center;" class="panel-title">File Data</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>                                    
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Arah</th>
                                            <th>Kecepatan</th>
                                            <th>Lokasi</th>
                                            <th>Kategori</th>
                                            <th>Waktu</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td  style="text-align: center;">{{$data->arah_angin}}</td>
                                            <td  style="text-align: center;">{{$data->kecepatan}}</td>
                                            <td>{{$data->lokasi}}</td>
                                            <td>{{$data->kategori_angin}}</td>
                                            <td>{{$data->waktu}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
