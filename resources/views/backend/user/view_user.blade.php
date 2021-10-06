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
             <h3 class="box-title">Users List</h3>
             <a href="{{ route('user.add') }}" style="float:right" class="mb-5 btn btn-rounded btn-success">Add users</a>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
               <div class="table-responsive">
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                       <tr>
                           <th width="5%">SL</th>
                           <th>Role</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th width="25%">Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($allData as  $key=>$user )
                       <tr>
                           <td>{{ $key+1}}</td>
                           <td>{{$user->usertype}}</td>
                           <td>{{$user->name}}</td>
                           <td>{{$user->email}}</td>
                           <td>
<a href="{{route('users.edit', $user->id)}}"class="btn btn-info">Edit</a>
<a href="{{route('users.delete',$user->id)}}" id="delete" class="btn btn-danger">Delete</a>
                           </td>
                       </tr>
                       @endforeach
                       
                       </tbody>
                   <tfoot>
                       <tr>
                        <th>SL</th>
                        <th>Role</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                       </tr>
                   </tfoot>
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