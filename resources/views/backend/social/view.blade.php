@extends('backend.admin.app')
@section('title','Manage Socail links')
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
              <div class="card-body">

                <!-- modal  -->
                <button type="button" class="btn btn-primary" data-toggle="modal" 
                data-target="#exampleModal" data-whatever="@mdo">Add Data</button>


<!-- Button trigger modal -->


<!-- Modal -->


                <!-- modal -->
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="10%">Sr. No. </th>
                    <th>Name</th>
                    <th>Image </th>
                    <th>Link</th>
                  
                <th> Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
   
                    @foreach($social_links as $key => $value)
                   
                  <tr>
               
                      <td>{{$key+1}}    </td>
                      <td>{{$value->name}}</td>
                 
                      <td>
<img src="{{asset($value->	image)}}" width="30">
                     
                       </td>
                      <td>
                        {{$value->link}}
<i class="{{$value->link}}"></i>
                      </td>
              
                   
                     <td>
                        @if($value->status == 1)

                        <span class="badge badge-pill badge-success">Active</span>
                    @else
                        <span class="badge badge-pill badge-danger">Inactive</span>

                    @endif
                      </td>
                      <td> 
                              @if($value->status ==1 )
                        <button class="btn btn-light" style="margin-left: 5px;" type="submit" title="Active/Approved">
                            <a href="{{route('inactive_aocial_status',$value->id)}}">
                            <i class=" fa fa-eye" style='font-size:20px;color:rgb(3, 99, 24)'> </i>
                            </a>
                        </button>
                     @else
                        <button class="btn btn-light" style="margin-left: 5px;" type="submit"  title="Inactive/Unapproved">
                            <a href="{{route('active_aocial_status',$value->id)}}">
                               <i class=" fa fa-eye-slash" style='font-size:20px;color:red'> </i>
                            </a>
                            </button>
                            @endif

                        <a href="{{route('edit.social_links',$value->id)}}">
                        <button class="btn btn-light" style="margin-left: 5px;" type="submit">
                          <i class="fa fa-edit" style="font-size: 15px; color:green;"></i>
                        </button>
                      </a>
                          <!-- delete -->
                          <a href="{{route('delete.socail_links',$value->id)}}" id="delete" >
                          <button class="btn btn-light" style="margin-left: 5px;" type="submit">
                            <i class="fa fa-trash-alt" style="font-size: 15px; color:rgb(198, 0, 0);"></i>
                          </button></a>
                     <!-- modal  -->
                      
                    </td>

                 
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

    <!-- Add logo modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('store.social_links')}}" enctype="multipart/form-data">
          @csrf
        {{-- name  --}}
        <div class="form-group">
        <input type="text" class="form-control"  name="name" placeholder="Social site name ">
        @error('name')
        <span class="text-danger"> {{$message}}</span>
        @enderror  
        </div>
        {{-- title  --}}
        {{-- icon  --}}
         <div class="form-group">
        <input type="text" class="form-control"  name="icon" placeholder="fa fa Icon ">
        <span > Click here :<a href="https://www.w3schools.com/icons/fontawesome5_icons_brands.asp" target="_blank">Social icons</a></span>
        @error('icon')
        <span class="text-danger"> {{$message}}</span>
        @enderror  
        </div>  
        {{-- icon  --}}
        {{-- url  --}}
        <div class="form-group">
        <input type="url" class="form-control"  name="link" placeholder="Add link ">
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
            <img id="output" src="{{asset('assets/images/no_image.jpg')}}" height="100">
          </div>
   
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Upload Data</button>
      </div>
       </form>
    </div>
  </div>
</div>
    <!-- add logo modal  -->



    <!-- edit modal  -->
<!-- Button trigger modal -->


<!-- Modal -->

@endsection