@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
<section class="content">
    <!-- Basic Forms -->
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title">Change password</h4>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form novalidate="" method="POST" action="{{route('password.update')}}">
                @csrf
                 <div class="row">
                   <div class="col-12">	
                       
                    


                   <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Current password<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="oldpassword" id="current_password" class="form-control" required="">
                                @error('oldpassword')
                                <span class="text-danger">{{$message}}</span>                
                                @enderror
                        </div>

                    </div>
                        {{-- endcol --}}
                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <h5>New password<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password"  id="password"  name="password" class="form-control" required="">
                                @error('password')
                                <span class="text-danger">{{$message}}</span>                
                                @enderror
                        </div>

                    </div>
                </div>

                
               
               </div>


               <div class="col-md-6">

                <div class="form-group">
                    <h5>Confirm password<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="password"   id="password_confirmation" name="password_confirmation" class="form-control" required="">
                        @error('password_confirmation')
                        <span class="text-danger">{{$message}}</span>                
                        @enderror
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