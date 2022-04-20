@extends('backend.admin.app')
@section('title','Change logo')
@section('logo_select','active')
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
                <a href="{{route('manage.front.logo')}}">

                  <button type="button" class="btn btn-info"> Back</button>
                </a>


<div class="col-lg-6 border p-5">
                <!-- modal -->
       <form method="post" action="{{route('frontend.update.logo', $edit_logo->id)}}" 
        enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="old_logo" value="{{$edit_logo->logo_img}}">
               <div class="form-group">
            <label for="recipient-name" class="col-form-label"> Change Logo:</label>
            <input type="file" class="form-control"  name="logo_img" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
          </div>
            <div class="form-group">
            <img id="output" src="{{asset($edit_logo->logo_img)}}" width="100" height="100">
          </div>


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