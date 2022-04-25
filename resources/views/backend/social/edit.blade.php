@extends('backend.admin.app')
@section('title','Manage edit links')
@section('Social_links','active')
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
                <a href="{{route('view.social_links')}}">

                  <button type="button" class="btn btn-info"> Back</button>
                </a>


<div class="col-lg-8 border p-5">
                <!-- modal -->
       <form method="post" action="{{route('update.social_links', $edit_s_links->id)}}" 
        enctype="multipart/form-data">
          @csrf
     {{-- name  --}}
        <div class="form-group">
      <label for="name" class="col-form-label"> Name</label>
        <input type="text" class="form-control"  name="name" value="{{$edit_s_links->name}}">
        @error('name')
        <span class="text-danger"> {{$message}}</span>
        @enderror  
        </div>
        {{-- title  --}}
        {{-- icon  --}}
      <div class="form-group">
           <label for="name" class="col-form-label">fa fa Icon</label>
        <input type="text" class="form-control" name="icon"  value="{{$edit_s_links->icon}}">
        <span > Click here :<a href="https://www.w3schools.com/icons/fontawesome5_icons_brands.asp" target="_blank">Social icons</a></span>
        @error('icon')
        <span class="text-danger"> {{$message}}</span>
        @enderror  
        </div> 
        {{-- icon  --}}
        {{-- url  --}}
        <div class="form-group">
             <label for="name" class="col-form-label"> Link</label>
        <input type="url" class="form-control"  name="link"  value="{{$edit_s_links->link}}">
        @error('link')
        <span class="text-danger"> {{$message}}</span>
        @enderror  
        </div>
        {{-- url  --}}
              <div class="form-group">
          <label for="recipient-name" class="col-form-label"> Select  image:</label>
          <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
        
        </div>
        @error('image')
        <span class="text-danger"> {{$message}}</span>
        @enderror 
          <div class="form-group">
          <img id="output" src="{{asset($edit_s_links->image)}}" height="30">
        </div>
          <div class="form-group">
          <button type="submit" class="btn btn-primary">Update</button>
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