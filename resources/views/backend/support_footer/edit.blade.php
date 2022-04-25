@extends('backend.admin.app')
@section('title','Manage Countries section')
@section('below_footer','active')
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
                <a href="{{route('view.support_text')}}">

                  <button type="button" class="btn btn-info"> Back</button>
                </a>


<div class="col-lg-10 border p-5">
                <!-- modal -->
       <form method="post" action="{{route('update.support_text', $support_data_edit->id)}}" 
        enctype="multipart/form-data">
          @csrf
                   {{-- country_title  --}}
        <div class="form-group">
            <label for="title" class="col-form-label">   Edit heading 1 :</label>

            <input type="text" class="form-control"  name="country_title" value="{{$support_data_edit->country_title}}">
                @error('country_title')
                <span class="text-danger"> {{$message}}</span>
                @enderror  
            </div>
            {{-- country_title  --}}
       
            {{-- country_title_2  --}}
            <div class="form-group">
            <label for="title" class="col-form-label">   Edit heading 2 :</label>

              <input type="text" class="form-control"  name="country_title_2" value="{{$support_data_edit->country_title_2}}">
              @error('country_title_2')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
              </div>
            {{-- country_title_2  --}}
     
    
          
                  {{-- description  --}}
            <div class="form-group">
            <label for="title" class="col-form-label">   Edit heading 2 Description :</label>

                <textarea class="form-control" name="description" rows="3" >{!!$support_data_edit->description!!}</textarea>
                  @error('description')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror  
                </div>
                {{-- description  --}}
    
    
                       {{-- get_in_touch  --}}
            <div class="form-group">
            <label for="title" class="col-form-label">   Edit  get in touch :</label>
            <input type="text" class="form-control"  name="get_in_touch" value="{{$support_data_edit->get_in_touch}}">

                  @error('get_in_touch')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror  
                </div>
                {{-- get_in_touch  --}}
    
                       {{-- side_description  --}}
            <div class="form-group">
            <label for="title" class="col-form-label">Edit  get in touch side_description :</label>

                <textarea class="form-control" name="side_description" rows="3" >{!!$support_data_edit->side_description!!}</textarea>
                  @error('side_description')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror  
                </div>
                {{-- side_description  --}}


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