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
                    <th width="8%">Sr. No. </th>
                    <th>Title</th>
                    <th> Para1 </th>
                    <th>para2</th>
                  
                
                    <th>brochure </th>

                
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
   
                    @foreach($get_about as $key => $value)
                   
                  <tr>
               
                      <td>{{$key+1}} <img src="{{asset($value->image)}}" width="150" alt=""></td>
                     
                      <td>
                        {{	$value->title}}
                       </td>
                      <td>
                        {{Str::limit(	$value->para1,60,$end='....')}}
                       </td>
                      <td>
                        {{Str::limit($value->para2,60,$end='....')}}
                      </td>
                 
                      <td><a href="{{asset($value->brochure)}}" download> Download</a> </td>
                
                      <td> 

                        <a href="{{route('edit.about_data', $value->id)}}">
                        <button class="btn btn-light" style="margin-left: 5px;" type="submit">
                          <i class="fa fa-edit" style="font-size: 15px; color:green;"></i>
                        </button>
                      </a>
                          <!-- delete -->
                          <a href="#" id="delete" >
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
        <form method="POST" action="{{route('store.about_data')}}" enctype="multipart/form-data">
          @csrf
        {{-- title  --}}
        <div class="form-group">
        <input type="text" class="form-control"  name="title" placeholder="Add title  ">
            @error('title')
            <span class="text-danger"> {{$message}}</span>
            @enderror  
        </div>
        {{-- title  --}}
   
   
      
              {{-- para1  --}}
        <div class="form-group">
            <textarea class="form-control" name="para1" rows="3" placeholder="para1..."></textarea>
              @error('para1')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
            {{-- para1  --}}
       {{-- para2  --}}
       <div class="form-group">
        <textarea class="form-control" name="para2" rows="3" placeholder="para2..."></textarea>
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
            <img id="output" src="{{asset('assets/images/no_image.jpg')}}" width="100" height="100">
          </div>

          <div class="form-group">
            <label for="brochure" class="col-form-label"> Select brochure:</label>
            <input type="file" class="form-control"  name="brochure" >
          </div>

         

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
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