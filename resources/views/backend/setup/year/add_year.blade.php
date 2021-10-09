@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
<section class="content">
    <!-- Basic Forms -->
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title">Add Student Class</h4>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form novalidate="" method="POST" action="{{route('store.student.year')}}">
                @csrf
                 <div class="row">
                   <div class="col-12">	
                   <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Student Year name<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="name"  class="form-control">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>                
                                @enderror
                        </div>

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
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->

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