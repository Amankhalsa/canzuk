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
                    <th>Heading</th>
                    <th>icon</th>
                    <th>title</th>
                    <th>description</th>
                
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
   
                    @foreach($services as $key => $value)
                   
                  <tr>
               
                      <td>{{$key+1}}</td>
                      <td>{{$value->name}}</td>
                      <td>
                        {{Str::limit(	$value->heading	,60,$end='....')}}
                       </td>
                      <td>
                        {{Str::limit(	$value->icon,60,$end='....')}}
                       </td>
                      <td>
                        {{Str::limit($value->title,60,$end='....')}}
                      </td>
                      <td>
                        {{Str::limit($value->description,60,$end='....')}}
                      </td> 
                   
                
                      <td> 

                        <a href="{{route('edit.home.content',$value->id)}}">
                        <button class="btn btn-light" style="margin-left: 5px;" type="submit">
                          <i class="fa fa-edit" style="font-size: 15px; color:green;"></i>
                        </button>
                      </a>
                          <!-- delete -->
                          <a href="{{route('delete.homedata' ,$value->id)}}" id="delete" >
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
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('store.home.services')}}" enctype="multipart/form-data">
          @csrf
        {{-- title  --}}
        <div class="form-group">
        <input type="text" class="form-control"  name="name" placeholder="Add name ">
        @error('name')
        <span class="text-danger"> {{$message}}</span>
        @enderror  
        </div>
        {{-- title  --}}
   
        {{-- heading  --}}
        <div class="form-group">
          <input type="text" class="form-control"  name="heading" placeholder="Add heading text ">
          @error('heading')
          <span class="text-danger"> {{$message}}</span>
          @enderror  
          </div>
        {{-- heading  --}}
            {{-- icon  --}}
            <div class="form-group">
                <input type="text" class="form-control"  name="icon" placeholder="Add icon text ">
                @error('icon')
                <span class="text-danger"> {{$message}}</span>
                @enderror  
                </div>
              {{-- icon  --}}

                  {{-- title  --}}
        <div class="form-group">
            <input type="text" class="form-control"  name="title" placeholder="Add title text ">
            @error('title')
            <span class="text-danger"> {{$message}}</span>
            @enderror  
            </div>
          {{-- title  --}}
              {{-- description  --}}
        <div class="form-group">
            <textarea class="form-control" name="description" rows="3" placeholder="Description..."></textarea>
              @error('description')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
            {{-- description  --}}
       
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