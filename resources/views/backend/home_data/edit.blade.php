@extends('backend.admin.app')
@section('title','Manage edit content')
@section('home_content_select','active')
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


<div class="col-lg-8 border p-5">
                <!-- modal -->
       <form method="post" action="{{route('update.home.content', $edit_data->id)}}"   enctype="multipart/form-data">
          @csrf
     {{-- title  --}}
     <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control"  name="title" value="{{$edit_data->title}}">
        @error('title')
        <span class="text-danger"> {{$message}}</span>
        @enderror  
        </div>
        {{-- title  --}}
        {{-- description  --}}
        <div class="form-group">
        <label for="description">Description</label>

        <textarea class="form-control" name="description" rows="3" >{{$edit_data->description}}</textarea>
          @error('description')
          <span class="text-danger"> {{$message}}</span>
          @enderror  
        </div>
        {{-- description  --}}
        {{-- profile  --}}
        <div class="form-group">
        <label for="profile">Profile</label>

          <input type="text" class="form-control"  name="profile"value="{{$edit_data->profile}}">
          @error('profile')
          <span class="text-danger"> {{$message}}</span>
          @enderror  
          </div>
        {{-- address  --}}
          {{-- consultants  --}}
          <div class="form-group">
        <label for="consultants">Consultants</label>

            <input type="text" class="form-control"  name="consultants" value="{{$edit_data->consultants}}" >
            @error('consultants')
            <span class="text-danger"> {{$message}}</span>
            @enderror  
            </div>
        {{-- address  --}}
        {{-- mission  --}}
        <div class="form-group">
        <label for="mission">Mission</label>

        <textarea class="form-control" name="mission" rows="3" placeholder="Footer Mission text...">{{$edit_data->mission}}</textarea>
            @error('mission')
            <span class="text-danger"> {{$message}}</span>
            @enderror  
        </div>
        {{-- address  --}}
           {{-- whoweare  --}}
           <div class="form-group">
        <label for="whoweare">Whoweare</label>

            <textarea class="form-control" name="whoweare" rows="3" placeholder="Footer whoweare text...">{{$edit_data->whoweare}}</textarea>
                @error('whoweare')
                <span class="text-danger"> {{$message}}</span>
                @enderror  
            </div>
            {{-- whoweare  --}}
            <div class="form-group">
              <label for="recipient-name" class="col-form-label"> Select  image:</label>
              <input type="file" class="form-control"  name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
            
            </div>
            @error('image')
            <span class="text-danger"> {{$message}}</span>
            @enderror 

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