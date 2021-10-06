@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

{{-- add users here --}}
<section class="content">
    <!-- Basic Forms -->
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title">Edit user</h4>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form novalidate="" method="POST" action="{{ route('users.update', $editData->id) }}">
                @csrf
                 <div class="row">
                   <div class="col-12">	
                       
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Select user role <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="usertype" id="select"  aria-invalid="false" required="" class="form-control">
                                        <option value="" selected="" disabled="">Select role</option>
                                        <option value="admin" {{$editData->usertype=="admin"? "selected": "" }}  >Admin</option>
                                        <option value="user"{{$editData->usertype=="user"? "selected": "" }}>User</option>

                                    </select>
                                <div class="help-block"></div></div>
                            </div> 
                            {{-- endcol --}}
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <h5>Username<span class="text-danger">*</span></h5>
                                <div class="controls">
                <input type="text" name="name" value="{{$editData->name}}"class="form-control" required="">
                            </div>

                        </div>
                    </div>

                    
                   
                   </div>


                   <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>User email<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="email" name="email" value="{{$editData->email}}"class="form-control" required="">
                        </div>

                    </div>
                        {{-- endcol --}}
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