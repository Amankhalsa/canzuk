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
                    <th>1st heading</th>
                    <th>2nd Heading</th>
                    <th>Description</th>
                    <th>Get in Touch</th>
                    <th>Right text</th>
                
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
   
                    @foreach($support_data as $key => $value)
                   
                  <tr>
               
                      <td>{{$key+1}}</td>
                     
                      <td>
                        {{Str::limit(	$value->country_title	,60,$end='....')}}
                       </td>
                      <td>
                        {{Str::limit(	$value->country_title_2,60,$end='....')}}
                       </td>
                      <td>
                        {{Str::limit($value->description,60,$end='....')}}
                      </td>
                      <td>
                        {{Str::limit($value->get_in_touch,60,$end='....')}}
                      </td> 
                      <td> {{Str::limit($value->side_description ,60,$end='....')}}</td>
                
                      <td> 

                        <a href="{{route('edit.support_text', $value->id)}}">
                        <button class="btn btn-light" style="margin-left: 5px;" type="submit">
                          <i class="fa fa-edit" style="font-size: 15px; color:green;"></i>
                        </button>
                      </a>
                          <!-- delete -->
                          <a href="{{route('delete.support_text' ,$value->id)}}" id="delete" >
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
        <form method="POST" action="{{route('store.support_text')}}" enctype="multipart/form-data">
          @csrf
        {{-- country_title  --}}
        <div class="form-group">
        <input type="text" class="form-control"  name="country_title" placeholder="Add heading 1  ">
            @error('country_title')
            <span class="text-danger"> {{$message}}</span>
            @enderror  
        </div>
        {{-- country_title  --}}
   
        {{-- country_title_2  --}}
        <div class="form-group">
          <input type="text" class="form-control"  name="country_title_2" placeholder="Add heading 2 ">
          @error('country_title_2')
          <span class="text-danger"> {{$message}}</span>
          @enderror  
          </div>
        {{-- country_title_2  --}}
 

      
              {{-- description  --}}
        <div class="form-group">
            <textarea class="form-control" name="description" rows="3" placeholder="Description..."></textarea>
              @error('description')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
            {{-- description  --}}


                   {{-- get_in_touch  --}}
        <div class="form-group">
            <textarea class="form-control" name="get_in_touch" rows="3" placeholder="Get in touch text..."></textarea>
              @error('get_in_touch')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
            {{-- get_in_touch  --}}

                   {{-- side_description  --}}
        <div class="form-group">
            <textarea class="form-control" name="side_description" rows="3" placeholder="Side description..."></textarea>
              @error('side_description')
              <span class="text-danger"> {{$message}}</span>
              @enderror  
            </div>
            {{-- side_description  --}}
       
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