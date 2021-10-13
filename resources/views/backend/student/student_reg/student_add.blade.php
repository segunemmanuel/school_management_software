@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper">
<div class="container-full">
<section class="content">
<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border">
<h4 class="box-title">Add Student </h4>
</div>




<!-- /.box-header -->
<div class="box-body">
<div class="row">
<div class="col">
    <form method="post" action="{{route('student.registration.store')}}" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-12">
<div class="row">

<div class="col-md-4">

<div class="form-group">
<h5>Student name <span class="text-danger">*</span></h5>
<div class="controls">
<input type="text" name="name"  class="form-control" required="">

</div>

</div>
</div>

{{-- end of first row --}}


<div class="col-md-4">

<div class="form-group">
<h5>Father name <span class="text-danger">*</span></h5>
<div class="controls">
<input type="text" name="fname"  class="form-control" required="">

</div>

</div>
</div>

<div class="col-md-4">

<div class="form-group">
<h5>Mother  name <span class="text-danger">*</span></h5>
<div class="controls">
<input type="text" name="mname"  class="form-control" required="">

</div>

</div>
</div>



</div>

</div>


{{-- end of row --}}
</div>




{{-- 2nd row --}}
<div class="row">
<div class="col-12">
<div class="row">

<div class="col-md-4">

<div class="form-group">
<h5>Mobile number <span class="text-danger">*</span></h5>
<div class="controls">
<input type="number" name="mobile"  class="form-control" required="">

</div>

</div>
</div>

{{-- end of first row --}}


<div class="col-md-4">

<div class="form-group">
<h5>Address <span class="text-danger">*</span></h5>
<div class="controls">
<input type="text" name="address"  class="form-control" required="">

</div>

</div>
</div>

<div class="col-md-4">

    <div class="form-group">
        <h5>User Gender <span class="text-danger">*</span></h5>
        <div class="controls">
         <select name="gender" id="gender" class="form-control">
                <option value="" selected="" disabled="">Select Gender</option>
     <option value="Male">Male</option>
     <option value="Female">Female</option>
                 
            </select>
         </div>
              </div>
</div>



</div>

</div>


{{-- end of 2nd row --}}
</div>





{{-- 3rd row --}}
<div class="row">
    <div class="col-12">
    <div class="row">
    <div class="col-md-4">


        <div class="form-group">
            <h5>Religion <span class="text-danger">*</span></h5>
            <div class="controls">
             <select name="religion"  class="form-control">
                    <option value="" selected="" disabled="">Select religion</option>
         <option value="muslim">Muslim</option>
         <option value="christian">Christian</option>
         <option value="traditional">Traditional</option>

                     
                </select>
             </div>
                  </div>
    </div>
    
 
    
    
    <div class="col-md-4">
    
    <div class="form-group">
    <h5>Date of Birth<span class="text-danger">*</span></h5>
    <div class="controls">
    <input type="date" name="dob"  class="form-control" required="">
    
    </div>
    
    </div>
    </div>
    
    <div class="col-md-4">
    
        <div class="form-group">
            <h5>Discount <span class="text-danger">*</span></h5>
            <div class="controls">
                <div class="controls">
    <input type="text" name="discount"  class="form-control" required="">
    
    </div>
             </div>
                  </div>
    </div>
    
    
    
    </div>
    
    </div>
    
    
    {{-- end of 3rd row --}}
    </div>





{{-- 4th row --}}
<div class="row">
    <div class="col-12">
    <div class="row">
    <div class="col-md-4">


        <div class="form-group">
            <h5>Year <span class="text-danger">*</span></h5>
            <div class="controls">
             <select name="year_id" class="form-control">
                    <option value=""   selected="" disabled="">Select year</option>
                    @foreach ($years as $year)
                        
         <option value="{{$year->id}}">{{$year->name}}</option>
         @endforeach

                </select>
             </div>
                  </div>
    </div>
 
    <div class="col-md-4">
        <div class="form-group">
            <h5>Class <span class="text-danger">*</span></h5>
            <div class="controls">
             <select name="class_id"  class="form-control">
                    <option value="" selected="" disabled="">Select class</option>
                    @foreach ($classes as $class)
                        
                    <option value="{{$class->id}}">{{$class->name}}</option>
                    @endforeach
                     
                </select>
             </div>
                  </div>
                </div>
    
                <div class="col-md-4">


                    <div class="form-group">
                        <h5>Group <span class="text-danger">*</span></h5>
                        <div class="controls">
                         <select name="group_id"  class="form-control">
                                <option value="" selected="" disabled="">Select group </option>
                                @foreach ($groups as $group)
                        
                                <option value="{{$group->id}}">{{$group->name}}</option>
                                @endforeach
                                 
                            </select>
                         </div>
                              </div>
                            </div>
    
    
    </div>
    
    </div>
    
    
    {{-- end of 4th row --}}
    </div>



    

{{-- 5th row --}}
<div class="row">
    <div class="col-12">
    <div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <h5>Shift<span class="text-danger">*</span></h5>
            <div class="controls">
             <select name="shift_id"  class="form-control">
                    <option value="" selected="" disabled="">Select shift</option>
                    @foreach ($shifts as $shift)
                        
         <option value="{{$shift->id}}">{{$year->name}}</option>
         @endforeach

                </select>
             </div>
                  </div>
    </div>
 
    <div class="col-md-4" >		
        <div class="form-group">
            <h5>Image <span class="text-danger">*</span></h5>
            <div class="controls">
         <input type="file" name="image" class="form-control" id="image" >  </div>
         </div>
        </div>
    
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="controls">
                    <img id="showImage" src="{{url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 
                
                    </div>
                    </div>
                    </div>
    
    
    </div>
    
    </div>
    
    
    {{-- end of 5th  row --}}
    </div>

</div>
</div>
<div class="text-xs-right">
<input type="submit" class="mb-5 btn btn-rounded btn-info" value="Submit">

</div>
</form>

</div>
<!-- /.col -->
</div>
<!-- /.row -->
<!-- /.content-wrapper -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>

@endsection