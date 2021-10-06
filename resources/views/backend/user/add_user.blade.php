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
         <h4 class="box-title">Form Validation</h4>
         <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form novalidate="">
                 <div class="row">
                   <div class="col-12">						
                       <div class="form-group">
                           <h5>Basic Text Input <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" name="text" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                           <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                       </div>
                       <div class="form-group">
                           <h5>Email Field <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                       </div>
                       <div class="form-group">
                           <h5>Basic Select <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <select name="select" id="select" required="" class="form-control">
                                   <option value="">Select Your City</option>
                                   <option value="1">India</option>
                                   <option value="2">USA</option>
                                   <option value="3">UK</option>
                                   <option value="4">Canada</option>
                                   <option value="5">Dubai</option>
                               </select>
                           <div class="help-block"></div></div>
                       </div>
                    
                   
                   </div>
                   <div class="text-xs-right">
                       <button type="submit" class="btn btn-rounded btn-info">Submit</button>
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