

@extends('backend.admin.app')
@section('title','Inquries')
@section('pending_select','active')
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
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th >Sr. No.</th>
                    <th > Name</th>
                    <th >Emai</th>
                    <th >Phone</th>
                    <th >Message</th>
                    <th >Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($inquries as $key => $values)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$values->name}}</td>
                    <td>{{$values->email}}</td>
                    <td>{{$values->phone}}</td>
                     <td>{{$values->message}}</td>
                    <td> {{Carbon\Carbon::parse($values->created_at)->diffForHumans()}}</td>
                  
                 
                    <td><a href="{{route('del.inquries', $values->id)}}"><i class="fa fa-trash-alt" style='font-size:20px;color:red'></i></a></td>
                  </tr>
                  @endforeach
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