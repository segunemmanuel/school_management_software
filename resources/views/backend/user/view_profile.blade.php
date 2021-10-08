@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
<section class="content">
<div class="row">
<div class="col-12">
    <div class="box box-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="bg-black widget-user-header">
          <h6 class="widget-user-username">User Name: {{$user->name}}</h6>
          <a href="{{ route('user.add') }}" style="float:right" class="mb-5 btn btn-rounded btn-success">Edit profile </a>
          <h6 class="widget-user-desc">User Type: {{$user->usertype}}</h6>
          <h6 class="widget-user-desc">User Type: {{$user->email}}</h6>
        </div>
        <div class="widget-user-image">
{{-- Get images when empty or not --}}
          <img class="rounded-circle" 
          src="{{ (!empty($user->image)) ? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" alt="User Avatar">
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header">Mobile Number:</h5>
                <span class="description-text">{{$user->mobile}}</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4 br-1 bl-1">
              <div class="description-block">
                <h5 class="description-header">Address</h5>
                <span class="description-text">{{$user->address}}</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header">Gender</h5>
                <span class="description-text">{{$user->gender} }</span>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</div>    
   </section>


        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection