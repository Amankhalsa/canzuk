@extends('backend.admin.app')
@section('title','Rejected')
@section('reject_select','active')
@section('content')
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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">@yield('page_title')</h3>
                <h3 class=" py-2 px-2 ">Total Inquries : <b> {{count($rejected_inquries)}}</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created Date</th>

                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach($rejected_inquries as $key => $reject_value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td> {{$reject_value->name}}</td>
                    <td> {{$reject_value->email}}</td>
                    <td> {{$reject_value->phone}}</td>
                    <td> {{Carbon\Carbon::parse($reject_value->created_at)->diffForHumans()}}</td>
                   

                    <td>       
                        @if($reject_value->status == 2)
                        <span class="badge badge-pill badge-danger">Rejected</span>
                        @endif
                </td>

                 
                    {{-- <td><a href=""><i class="fa fa-edit"></i>&nbsp;&nbsp;</a><a href=""><i class="fa fa-trash-alt"></i></a></td> --}}
                    @endforeach
                  </tr>
                  </tbody>
           
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>                
    <!-- /.content-header -->
    </div>
    <!-- Main content -->
@endsection