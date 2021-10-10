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
             <h3 class="box-title">Fee amount details</h3>
             <a href="{{ route('fee.amount.add') }}" style="float:right" class="mb-5 btn btn-rounded btn-success">Add fee amount</a>
           </div>
           <!-- /.box-header -->
           <div class="box-body">

            <h4><strong>Fee category:</strong>{{$details[0]['fee_category']['name']}}</h4>
               <div class="table-responsive">
                 <table  class="table table-bordered table-striped">
                   <thead class="thead-light">
                       <tr>
                           <th width="5%">SL</th>
                           <th>Class name</th>
                           <th width="25%">Amount</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($details as  $key=>$detail )
                       <tr>
                           <td>{{$key+1}}</td>
                           <td>{{$detail['student_class']['name']}}</td>
                           <td>{{$detail->amount}}</td>
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