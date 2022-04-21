@extends('backend.admin.app')
@section('title','Admin Dashboard')
@section('dashboard_select','active')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    @php 
    $get_inq = DB::table('inquiries')->get();
    $com_inq = DB::table('inquiries')->where('status','=' ,'1')->get();
    $rej_inq = DB::table('inquiries')->where('status','=' ,'2')->get();

    @endphp
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
@php 
$completed = DB::table('inquiries')->where('status','=' ,'1')->count();
$total =DB::table('inquiries')->get()->count();
$percent = $completed / $total * 100;
@endphp
                <span></span>

                <h3>{{floor($percent )}}<sup style="font-size: 20px">%</sup></h3>
                <p>Completed Inquries</p>
              </div>
              <div class="icon">
              <i class="fas fa-clipboard-list"></i>
              </div>
              <a href="{{url('admin/completed')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{count( $get_inq)}}</h3>
                <p>Total Inquries</p>
              </div>
              <div class="icon">
                <i class="fas fa-ballot-check"></i>
              </div>
              <a href="{{url('admin/Inquries')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{count($rej_inq)}}</h3>
                <p>Rejected Inquries</p>
              </div>
              <div class="icon">
                <i class="fas fa-times-circle"></i>
              </div>
              <a href="{{url('admin/rejected')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
     
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection