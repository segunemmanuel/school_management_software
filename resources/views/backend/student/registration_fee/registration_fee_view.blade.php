@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
<section class="content">
<div class="row">
  <div class="col-12">
  <div class="box bb-3 border-warning">
    <div class="box-header">
    <h4 class="box-title">Student <strong>Registration fee</strong></h4>
    </div>
    <div class="box-body">

<div class="row">
  <div class="col-md-4">
    <div class="form-group">
        <h5>Year <span class="text-danger"></span></h5>
        <div class="controls">
         <select name="year_id" id="year_id" class="form-control">
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
        <h5>Class <span class="text-danger"></span></h5>
        <div class="controls">
         <select name="class_id" id="class_id"  class="form-control">
                <option value="" selected="" disabled="">Select class</option>
                @foreach ($classes as $class)

                <option value="{{$class->id}}">{{$class->name}}</option>
                @endforeach

            </select>
         </div>
              </div>
            </div>

      <div class="pt-25 col-md-4">

        <a id="search" class="btn btn-primary" name="search">Search</a>
      </div>
</div>
{{-- Registration fee table --}}

<div class="row">
<div class="col-md-12">

<div id="DocumentResults">
    <script id="dcoument-template" type="text/x-handlebars-template" >
        <table class="table table-bordered table-striped" style="width: 100%">
        <thead>
            <tr>
                @{{{thsource}}}
            </tr>
        </thead>
        <tbody>
            @{{#each this}}
            <tr>
                @{{{tdsource}}}
                </tr>
            @{{/each}}
        </tbody>
        </table>
    </script>
</div>





</div>
</div>

    </div>
  </div>
</div>
{{-- re --}}


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

<script type="text/javascript">
    $(document).on('click','#search',function(){
      var year_id = $('#year_id').val();
      var class_id = $('#class_id').val();
       $.ajax({
        url: "{{ route('student.registration.getstudents')}}",
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id},
        success: function (data) {
          $('#roll-generate').removeClass('d-none');
          var html = '';
          $.each( data, function(key, v){
            html +=
            '<tr>'+
            '<td>'+v.student.id_no+'<input type="hidden" name="student_id[]" value="'+v.student_id+'"></td>'+
            '<td>'+v.student.name+'</td>'+
            '<td>'+v.student.fname+'</td>'+
            '<td>'+v.student.gender+'</td>'+
            '<td><input type="text" class="form-control form-control-sm" name="roll[]" value="'+v.roll+'"></td>'+
            '</tr>';
          });
          html = $('#roll-generate-tr').html(html);
        }
      });
    });

  </script>




@endsection
