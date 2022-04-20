@extends('backend.admin.app')
@section('title','Manage logo')
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
              <div class="card-body">

                <!-- modal  -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add logo</button>


<!-- Button trigger modal -->


<!-- Modal -->


                <!-- modal -->
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="10%">Sr. No.</th>
                    <th>Logo Image</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
   
                    @foreach($get_logo as $key => $value)
                   
                  <tr>
               
                      <td>{{$key+1}}</td>
                      <td><img src="{{asset($value->logo_img)}}"></td>
                      <td> {{Carbon\Carbon::parse($value->created_at)->diffForHumans()}} </td>
                      <td> {{Carbon\Carbon::parse($value->updated)->diffForHumans()}}  </td>
                      <td> 

                        <a href="{{route('frontend.edit.logo',$value->id)}}">
                        <button class="btn btn-light" style="margin-left: 5px;" type="submit">
                          <i class="fa fa-edit" style="font-size: 15px; color:green;"></i>
                        </button>
                      </a>
                          <!-- delete -->
                          <a href="{{route('frontend.delete.logo' ,$value->id)}}" id="delete" >
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('frontend.store.logo')}}" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="recipient-name" class="col-form-label"  > Select Logo:</label>
            <input type="file" class="form-control"  name="logo_img" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
          </div>
            <div class="form-group">
            <img id="output" src="{{asset('assets/images/no_image.jpg')}}" width="100" height="100">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Upload logo</button>
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