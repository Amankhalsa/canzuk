@extends('backend.admin.app')
@section('title','Manage About page')
@section('about_content','active')
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


<div class="col-lg-10 border p-5">
                <!-- modal -->
       <form method="post" action="{{route('update.about_data', $edit_about->id)}}" 
        enctype="multipart/form-data">
          @csrf
                     {{-- title  --}}
        <div class="form-group">
            <input type="text" class="form-control"  name="title"  value="{{$edit_about->title}}">
                @error('title')
                <span class="text-danger"> {{$message}}</span>
                @enderror  
            </div>
            {{-- title  --}}
       
       
          
                  {{-- para1  --}}
            <div class="form-group">
                <textarea class="form-control" name="para1" rows="3">{!!$edit_about->para1!!}</textarea>
                  @error('para1')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror  
                </div>
                {{-- para1  --}}
           {{-- para2  --}}
           <div class="form-group">
            <textarea class="form-control" name="para2" rows="3" >{!!$edit_about->para2!!}</textarea>
              @error('para2')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
            {{-- para2  --}}
    
            <div class="form-group">
                <label for="recipient-name" class="col-form-label"  > Select image:</label>
                <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                @error('image')
                <span class="text-danger"> {{$message}}</span>
                @enderror  
            </div>
                <div class="form-group">
                <img id="output" src="{{asset($edit_about->image)}}" width="100" height="100">
              </div>
    
              <div class="form-group">
                <label for="brochure" class="col-form-label"> Select brochure:</label>
                <input type="file" class="form-control"  name="brochure" >
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