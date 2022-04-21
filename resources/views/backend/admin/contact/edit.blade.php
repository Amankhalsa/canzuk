@extends('backend.admin.app')
@section('title','Manage Contact')
@section('contact_select','active')
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
              <div class="card-body ">

                <!-- modal  -->
                <a href="{{route('view.contact_address')}}">

                  <button type="button" class="btn btn-info"> Back</button>
                </a>


<div class="col-lg-6 border p-5">
                <!-- modal -->
       <form method="post" action="{{route('update.contact', $edit_address->id)}}"   enctype="multipart/form-data">
          @csrf


            {{-- email  --}}
            <div class="form-group">
              <input type="email" class="form-control"  name="email"  value="{{$edit_address->email}}">
                      @error('email')
                      <span class="text-danger"> {{$message}}</span>
                      @enderror  
              </div>
              {{-- email  --}}
                  {{-- phone  --}}
                  <div class="form-group">
                  <input type="text" class="form-control"  name="phone"   value="{{$edit_address->phone}}">
                          @error('phone')
                          <span class="text-danger"> {{$message}}</span>
                          @enderror  
                  </div>
                  {{-- phone  --}}

                  {{-- time  --}}
                  <div class="form-group">
                  <input type="text" class="form-control"  name="time"   value="{{$edit_address->time}}">
                      @error('time')
                      <span class="text-danger"> {{$message}}</span>
                      @enderror  
                  </div>
                  {{-- time  --}}

                  {{-- address  --}}
                  <div class="form-group">

                  <textarea class="form-control" name="address" rows="3" >{{$edit_address->address}}</textarea>
                      @error('address')
                      <span class="text-danger"> {{$message}}</span>
                      @enderror  
                  </div>
                  {{-- address  --}}


          <div class="form-group">
          <button type="submit" class="btn btn-primary">Upload Contact</button>
          </div>
          </form>

        </div>
  
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