@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
<section class="content">
    <!-- Basic Forms -->
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title">Add fee amount</h4>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form novalidate="" method="POST" action="{{route('store.student.group')}}">
                @csrf
                 <div class="row">
                   <div class="col-md-6">	
                    <div class="form-group">
                      <h5>Fee category <span class="text-danger">*</span></h5>
                      <div class="controls">
                          <select name="fee_category_id"  required="" aria-invalid="false"  class="form-control">
                              <option value="" selected="" disabled="">Select fee category</option>
                              @foreach ($fee_categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                          </select>
<div class="row">

  <div class="col-md-5">
    <div class="form-group">
      <h5>Fee category <span class="text-danger">*</span></h5>
      <div class="controls">
          <select name="fee_category_id"  required="" aria-invalid="false"  class="form-control">
              <option value="" selected="" disabled="">Select fee category</option>
              @foreach ($fee_categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
          </select>
      </div>
                       </div> 
                                  
  </div>
  <div class="col-md-5">
    <div class="form-group">
      <h5>Fee category <span class="text-danger">*</span></h5>
      <div class="controls">
          <select name="fee_category_id"  required="" aria-invalid="false"  class="form-control">
              <option value="" selected="" disabled="">Select fee category</option>
              @foreach ($fee_categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
          </select>
      </div>
                       </div> 
                                  
  </div>

  <div class="col-md-2">
    <div class="form-group">
      <h5>Fee category <span class="text-danger">*</span></h5>
      <div class="controls">
          <select name="fee_category_id"  required="" aria-invalid="false"  class="form-control">
              <option value="" selected="" disabled="">Select fee category</option>
              @foreach ($fee_categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
          </select>
      </div>
                       </div> 
                                  


                   <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>Amount<span class="text-danger">*</span></h5>
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
       <!-- /.box-body -->
     <!-- /.box -->

   </section>


          <!-- /.col -->
        <!-- /.row -->
      </section>

    
<!-- /.content-wrapper -->

@endsection