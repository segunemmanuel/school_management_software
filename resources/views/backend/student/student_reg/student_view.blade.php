@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
<section class="content">
<div class="row">


    <div class="col-12">
        <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Students list</h3>
             <a href="{{ route('student.registration.add') }}" style="float:right" class="mb-5 btn btn-rounded btn-success">Add student</a>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
               <div class="table-responsive">
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                       <tr>
                           <th width="5%">SL</th>
                           <th>Name</th>
                           <th>ID no</th>

                           <th width="25%">Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($allData as  $key=>$value )
                       <tr>
                           <td>{{ $key+1 }}</td>
                           <td>{{ $value->class_id }}</td>
                           <td>{{ $value->year_id }}</td>

                           <td>
<a href="" class="btn btn-info">Edit</a>
<a href="" id="delete" class="btn btn-danger">Delete</a>
                           </td>
                       </tr>
                       @endforeach
                       
                       </tbody>
               
                 </table>
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