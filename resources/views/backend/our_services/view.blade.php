@extends('backend.admin.app')
@section('title','Manage Our Services')
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
                    <th>Para1</th>
                    <th>Para2 </th>
                    <th>para3</th>
                    <th>para4</th>
                    <th>para5</th>
                    <th>Homepara1</th>
                    <th>Homepara2</th>
                    <th>Profile para1</th>
                    <th>Profile para2</th>
                    <th>Contact para1</th>
                    <th>Contact para2</th>
                    <th> Images </th>



           


                  

                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
   
          
                   
                  <tr>
                      @foreach($fetch_services as $keys => $value)
                      <td> {{  $keys+1}}</td>
               <td>   {{Str::limit(	$value->para1,30,$end='....')}}</td>
               <td>  {{Str::limit(	$value->para2,30,$end='....')}}</td>
               <td>  {{Str::limit(	$value->para3,30,$end='....')}}</td>
               <td>  {{Str::limit(	$value->para4,30,$end='....')}}</td>
               <td>  {{Str::limit(	$value->para5,30,$end='....')}}</td>
               <td>  {{Str::limit(	$value->homepara1,30,$end='....')}}</td>
               <td>  {{Str::limit(	$value->homepara2,30,$end='....')}}</td>
               <td>  {{Str::limit(	$value->profilepara1,30,$end='....')}}</td>
               <td>  {{Str::limit(	$value->profilepara2,30,$end='....')}}</td>
               <td>  {{Str::limit(	$value->contactpara1,30,$end='....')}}</td>
               <td>  {{Str::limit(	$value->contactpara2,30,$end='....')}}</td>


             <td> <img src="{{  asset($value->img1)}}" alt=".." width="100"> || <img src="{{  asset($value->img2)}}" alt=".." width="100"></td>

    
                      <td> 
                              @if($value->status ==1 )
                        <button class="btn btn-light" style="margin-left: 5px;" type="submit" title="Active/Approved">
                            <a href="{{route('inactive_our_services',$value->id)}}">`
                            <i class=" fa fa-eye" style='font-size:20px;color:rgb(3, 99, 24)'> </i>
                            </a>
                        </button>
                     @else
                        <button class="btn btn-light" style="margin-left: 5px;" type="submit"  title="Inactive/Unapproved">
                            <a href="{{route('active_our_services',$value->id)}}">
                               <i class=" fa fa-eye-slash" style='font-size:20px;color:red'> </i>
                            </a>
                            </button>
                            @endif

                        <a href="{{route('edit.our_services',$value->id)}}">
                        <button class="btn btn-light" style="margin-left: 5px;" type="submit">
                          <i class="fa fa-edit" style="font-size: 15px; color:green;"></i>
                        </button>
                      </a>
                          <!-- delete -->
                          <a href="{{route('delete.our_services',$value->id)}}" id="delete" >
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
    <div class="modal-content  ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Our services page Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('store.our_services')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" name="para1" rows="1" placeholder="Paragraph 1..."></textarea>
                      @error('para1')
                      <span class="text-danger"> {{$message}}</span>
                      @enderror  
                    </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" name="para2" rows="1" placeholder="Paragraph 2..."></textarea>
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
                  <textarea class="form-control" name="para3" rows="1" placeholder="Paragraph 3..."></textarea>
                    @error('para3')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror  
                  </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <textarea class="form-control" name="para4" rows="1" placeholder="Paragraph 4..."></textarea>
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
                  <textarea class="form-control" name="para5" rows="1" placeholder="Paragraph 5..."></textarea>
                    @error('para5')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror  
                  </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <textarea class="form-control" name="homepara1" rows="1" placeholder="Home Paragraph 1..."></textarea>
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
                  <textarea class="form-control" name="homepara2" rows="1" placeholder="Home Paragraph 2..."></textarea>
                    @error('homepara2')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror  
                  </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <textarea class="form-control" name="profilepara1" rows="1" placeholder="Profile Paragraph 1..."></textarea>
                    @error('profilepara1')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror  
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <textarea class="form-control" name="contactpara1" rows="1" placeholder="Home Paragraph 1..."></textarea>
                    @error('contactpara1')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror  
                  </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <textarea class="form-control" name="contactpara2" rows="1" placeholder="Contact Paragraph 2..."></textarea>
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
                  <textarea class="form-control" name="profilepara2" rows="1" placeholder="Profile Paragraph 2..."></textarea>
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
                    <img id="output" src="{{asset('assets/images/no_image.jpg')}}" width="100" height="100" >
                  </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"  > Select Images 2:</label>
                    <input type="file" class="form-control"  name="img2" accept="image/*" onchange="document.getElementById('output2').src = window.URL.createObjectURL(this.files[0])">
                  
                  
                </div>
                <div class="form-group">
                    <img id="output2" src="{{asset('assets/images/no_image.jpg')}}" width="100" height="100">
                  </div>
            </div>
        </div>
        {{-- 5th row end  --}}
           
          
              
       
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