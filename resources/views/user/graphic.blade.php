@extends('layouts.master')

    <script type="text/javascript" src="{{url('assets/plugins/lib/modernizr.js')}}"></script>
        
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/datatable/dataTables.bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style-default.css')}}">
    <style>.chart{ height: 350px; }</style>
@section('title','Graphic')

@section('content')
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Real Time Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div class="chart" id="realTimeChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="text-align: Center">Data Kecepatan Angin</h3>
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
                                            <td>{{$data->arah_angin}}</td>
                                            <td>{{$data->kecepatan}}</td>
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
                    

@endsection

    <script type="text/javascript" src="{{url('assets/plugins/lib/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/lib/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/lib/plugins.js')}}"></script>
    <!--take js for chart-->
    <script type="text/javascript" src="{{url('assets/plugins/flot/excanvas.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/flot/jquery.flot.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/flot/jquery.flot.tooltip.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/flot/jquery.flot.crosshair.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/flot/curvedLines.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/flot/jquery.flot.orderBars.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/flot/jquery.flot.pie.min.js')}}"></script>

    <script type="text/javascript" src="{{url('assets/js/app.base.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/chart-plot.js')}}"></script>
    <!--take js for table-->
        <script type="text/javascript" src="{{url('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/datatable/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/page-table.js')}}"></script>
    <!--script table-->
    <script>
        jQuery(document).ready(function () {
            DataTableBasic.init();
        });
    </script>
    <!--script chart-->
    <script>
        jQuery(document).ready(function () {
            FlotChart.init();
        });
    </script>
    