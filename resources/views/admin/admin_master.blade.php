<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Schooly-A school management software for all school types</title>
    
	<!-- Vendors Style-->
    
	<link rel="stylesheet" href="backend/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="backend/css/style.css">
	<link rel="stylesheet" href="backend/css/skin_color.css">
     
  </head>

<body class="fixed hold-transition dark-skin sidebar-mini theme-primary">
	
<div class="wrapper">

@include('admin.body.header')
  
  <!-- Left side column. contains the logo and sidebar -->
@include('admin.body.sidebar')
 

  <!-- Content Wrapper. Contains page content -->
 @yield('admin')
  <!-- /.content-wrapper -->
  @include('admin.body.footer')


  <!-- Control Sidebar -->
{{--  --}}
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
	<script src="backend/js/vendors.min.js"></script>
    <script src="backend/../assets/icons/feather-icons/feather.min.js"></script>	
	<script src="backend/../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js"></script>
	<script src="backend/../assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="backend/../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	
	<!-- Sunny Admin App -->
	<script src="backend/js/template.js"></script>
	<script src="backend/js/pages/dashboard.js"></script>
	
	
</body>
</html>
