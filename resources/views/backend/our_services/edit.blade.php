@extends('backend.admin.app')
@section('title','Edit Our Services')
@section('our_services','active')
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
                <a href="{{route('view.our.services_page')}}">

                  <button type="button" class="btn btn-info"> Back</button>
                </a>


<div class="col-lg-12 border p-5">
                <!-- modal -->
       <form method="post" action="{{route('update.our_services', $edit_services->id)}}"   enctype="multipart/form-data">
          @csrf
     {{-- title  --}}
     <div class="row">
        <div class="col-md-6">
          <div class="form-group">
              <textarea class="form-control" name="para1" rows="2" > {{$edit_services->para1}}</textarea>
                @error('para1')
                <span class="text-danger"> {{$message}}</span>
                @enderror  
              </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <textarea class="form-control" name="para2" rows="2"> {{$edit_services->para2}}</textarea>
                @error('para2')
                <span class="text-danger"> {{$message}}</span>
                @enderror  
              </div>
        </div>
    </div>
    {{-- 1st roe end  --}}
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <textarea class="form-control" name="para3" rows="1" >{{$edit_services->para3}}</textarea>
              @error('para3')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <textarea class="form-control" name="para4" rows="1" >{{$edit_services->para5}}</textarea>
              @error('para4')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
      </div>
  </div>
  {{-- 2nd row end   --}}
  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <textarea class="form-control" name="para5" rows="1" > {{$edit_services->para5}}</textarea>
              @error('para5')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <textarea class="form-control" name="homepara1" rows="2" > {{$edit_services->homepara1}} </textarea>
              @error('homepara1')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
      </div>
  </div>
  {{-- 3rd roe end  --}}
  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <textarea class="form-control" name="homepara2" rows="2" > {{$edit_services->homepara2}}

            </textarea>
              @error('homepara2')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <textarea class="form-control" name="profilepara1" rows="2" >{{$edit_services->profilepara1}}</textarea>
              @error('profilepara1')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <textarea class="form-control" name="contactpara1" rows="2" >{{$edit_services->contactpara1}}</textarea>
              @error('contactpara1')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <textarea class="form-control" name="contactpara2" rows="2" >{{$edit_services->contactpara2}}</textarea>
              @error('contactpara2')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
      </div>
  </div>
  {{-- 4 row end  --}}
  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <textarea class="form-control" name="profilepara2" rows="1">{{$edit_services->profilepara2}}</textarea>
              @error('profilepara2')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
      </div>
      <div class="col-md-3">
          <div class="form-group">
              <label for="recipient-name" class="col-form-label"  > Select Images:</label>
              <input type="file" class="form-control"  name="img1" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" >
            
            
          </div>
          <div class="form-group">
              <img id="output" src="{{asset($edit_services->img1)}}" width="100"  >
            </div>
      </div>
      <div class="col-md-3">
          <div class="form-group">
              <label for="recipient-name" class="col-form-label"  > Select Images 2:</label>
              <input type="file" class="form-control"  name="img2" accept="image/*" onchange="document.getElementById('output2').src = window.URL.createObjectURL(this.files[0])">
            
            
          </div>
          <div class="form-group">
              <img id="output2" src="{{asset($edit_services->img2)}}" width="100" >
            </div>
      </div>
  </div>

          <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Content</button>
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