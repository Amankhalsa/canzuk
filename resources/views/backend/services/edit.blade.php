@extends('backend.admin.app')
@section('title','Manage Home services')
@section('home_services','active')
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
                <a href="{{route('view.home_services')}}">

                  <button type="button" class="btn btn-info"> Back</button>
                </a>


<div class="col-lg-8 border p-5">
                <!-- modal -->
       <form method="post" action="{{route('update.home.services', $get_services->id)}}" 
        enctype="multipart/form-data">
          @csrf
             {{-- title  --}}
             <div class="form-group">
              <label for="title" class="col-form-label">   Edit Top Name:</label>

                <input type="text" class="form-control"  disabled value="{{$get_services->name}}">
                @error('name')
                <span class="text-danger"> {{$message}}</span>
                @enderror  
                </div>
                {{-- title  --}}
           
                {{-- heading  --}}
                <div class="form-group">
              <label for="heading" class="col-form-label">   Edit Main Heading:</label>

                  <input type="text" class="form-control"  disabled value="{{$get_services->heading}}">
                  @error('heading')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror  
                  </div>
                {{-- heading  --}}
                    {{-- icon  --}}
                    <div class="form-group">
              <label for="icon" class="col-form-label">   Edit Icon:</label>

                        <input type="text" class="form-control"  name="icon" value="{{$get_services->icon}}">
                        @error('icon')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror  <span>Click here:
                        <a href="https://www.w3schools.com/icons/fontawesome5_icons_images.asp" target="_blank"> for More icons</a></span>
                        </div>
                      {{-- icon  --}}
        
                          {{-- title  --}}
                <div class="form-group">
              <label for="title" class="col-form-label">   Edit card Title:</label>

                    <input type="text" class="form-control"  name="title" value="{{$get_services->title}}">
                    @error('title')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror  
                    </div>
                  {{-- title  --}}
                      {{-- description  --}}
                <div class="form-group">
              <label for="description" class="col-form-label">   Edit card Description:</label>

                    <textarea class="form-control" name="description" rows="3" >{!!$get_services->description!!}</textarea>
                      @error('description')
                      <span class="text-danger"> {{$message}}</span>
                      @enderror  
                    </div>
                    {{-- description  --}}


          <div class="form-group">
          <button type="submit" class="btn btn-primary">Upload logo</button>
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