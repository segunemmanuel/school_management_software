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
          <h3 class="widget-user-username">{{$user->name}}</h3>
          <h6 class="widget-user-desc">{{$user->usertype}}</h6>
        </div>
        <div class="widget-user-image">
          <img class="rounded-circle" src="../images/user3-128x128.jpg" alt="User Avatar">
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header">12K</h5>
                <span class="description-text">FOLLOWERS</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4 br-1 bl-1">
              <div class="description-block">
                <h5 class="description-header">550</h5>
                <span class="description-text">FOLLOWERS</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header">158</h5>
                <span class="description-text">TWEETS</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
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