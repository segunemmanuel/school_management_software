@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
<section class="content">
<div class="row">
  <div class="col-12">

  <div class="box bb-3 border-warning">
    <div class="box-header">
    <h4 class="box-title">Student <strong>search</strong></h4>
    </div>

    <div class="box-body">
  <form action="{{ route('student.year.class.wise') }}" method="GET">

<div class="row">
  <div class="col-md-4">

    <div class="form-group">
        <h5>Year <span class="text-danger"></span></h5>
        <div class="controls">
         <select name="year_id" class="form-control">
                <option value=""   selected="" disabled="">Select year</option>
                @foreach ($years as $year)
           <option value="{{$year->id}}" {{ (@year_id==$year->id )? "selected" :"" }}>{{$year->name}}</option>
     @endforeach

            </select>
         </div>
              </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <h5>Class <span class="text-danger"></span></h5>
        <div class="controls">
         <select name="class_id"  class="form-control">
                <option value="" selected="" disabled="">Select class</option>
                @foreach ($classes as $class)
                    
                <option value="{{$class->id}}"   {{ (@class_id==$class->id )? "selected" :"" }} >{{$class->name}}</option>
                @endforeach
                 
            </select>
         </div>
              </div>
            </div>

      <div class="pt-25 col-md-4">
       <input type="submit" name="search" class="mb-5 btn btn-rounded btn-dark" value="Search">
      </div>

</div>
</form>
    </div>
  </div>
</div>
<div class="col-12">
        <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Students list</h3>
             <a href="{{ route('student.registration.add') }}" style="float:right" class="mb-5 btn btn-rounded btn-success">Add student</a>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
               <div class="table-responsive">
                @if(!@$search )
                   
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                       <tr>
                        <th width="5%">SL</th>  
                        <th>Name</th>
                        <th width="10%">ID No</th>
                        <th>Roll</th>
                        <th>Year</th>
                        <th>Class</th>
                        <th>Image</th>
                        {{-- @if(Auth::user()->role == "admin") --}}
                        <th>Code</th>
                         {{-- @endif --}}
                        <th width="25%">Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($allData as  $key=>$value )
                       <tr>
                           <td>{{ $key+1 }}</td>
                           <td>{{ $value['student']['name'] }}</td>
                           <td>{{$value['student']['id_no'] }}</td>
                           <td>{{$value->roll }}</td>
                           <td>{{$value['student_year']['name']}}</td>
                           <td>{{$value['student_class']['name']}}</td>
                           <td>
                            <img src="{{ (!empty($value['student']['image']))? url('upload/student_images/'.$value['student']['image']):url('upload/no_image.jpg') }}" style="width: 60px; width: 60px;"> 
                                 </td>
                           <td>{{ $value->class_id }}</td>

                           <td>
<a href="{{route('student.registration.edit',$value->student_id) }} " class="btn btn-info">Edit</a>
<a href="" id="delete" class="btn btn-danger">Delete</a>
                           </td>

                       </tr>
                       @endforeach
                       
                       </tbody>
               
                 </table>
                
                 @else

                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                       <th width="5%">SL</th>  
                       <th>Name</th>
                       <th width="10%">ID No</th>
                       <th>Roll</th>
                       <th>Year</th>
                       <th>Class</th>
                       <th>Image</th>
                       {{-- @if(Auth::user()->role == "admin") --}}
                       <th>Code</th>
                        {{-- @endif --}}
                       <th width="25%">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($allData as  $key=>$value )
                      <tr>
                          <td>{{ $key+1 }}</td>
                          <td>{{ $value['student']['name'] }}</td>
                          <td>{{$value['student']['id_no'] }}</td>
                          <td>{{$value->roll }}</td>
                          <td>{{$value['student_year']['name']}}</td>
                          <td>{{$value['student_class']['name']}}</td>
                          <td>
                           <img src="{{ (!empty($value['student']['image']))? url('upload/student_images/'.$value['student']['image']):url('upload/no_image.jpg') }}" style="width: 60px; width: 60px;"> 
                                </td>
                          <td>{{ $value->class_id }}</td>

                          <td>
                            <a href="{{route('student.registration.edit', $value->student_id) }}" class="btn btn-info">Edit</a>
                            <a href="" id="delete" class="btn btn-danger">Delete</a>
                          </td>

                      </tr>
                      @endforeach
                      
                      </tbody>
                </table>
                 @endif

               </div>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->

  
         <!-- /.box -->          
       </div>
</div>
</section>

      
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection