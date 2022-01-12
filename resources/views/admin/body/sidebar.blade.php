@php
$prefix= Request::route()->getprefix();
$route = Route::current()->getName();
@endphp
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
						  <img src="backend/../images/logo-dark.png" alt="">
						  <h3><b>School</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="{{ ($route=='dashboard') ? 'active': '' }}">
          <a href="{{route('dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>

        @if (Auth::user()->role=='Admin')
        <li class="treeview  {{ ($prefix =='/users') ? 'active': '' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.view')}}"><i class="ti-more"></i>View users</a></li>
            <li><a href="{{ route('user.add') }}"><i class="ti-more"></i>Add user</a></li>
          </ul>
        </li>
        @endif


        <li class="treeview {{ ($prefix =='/profiles')?'active': ''}}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="{{route('profile.view')}}"><i class="ti-more"></i>Your profile</a></li>
            <li><a href="{{route('password.view')}}"><i class="ti-more"></i>Change password</a></li>
          </ul>
        </li>




        <li class="treeview {{ ($prefix =='/setups')?'active': ''}}">
          <a href="#">
            <i data-feather="mail"></i> <span>Setup Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="{{route('student.class.view')}}"><i class="ti-more"></i>Student class</a></li>
            <li><a href="{{route('student.year.view')}}"><i class="ti-more"></i>Student year</a></li>
            <li><a href="{{route('student.group.view')}}"><i class="ti-more"></i>Student groups</a></li>
            <li><a href="{{route('student.shift.view')}}"><i class="ti-more"></i>Student shift</a></li>
            <li><a href="{{route('fee.category.view')}}"><i class="ti-more"></i>Fee category</a></li>
            <li><a href="{{route('fee.amount.view')}}"><i class="ti-more"></i>Fee category amount</a></li>
            <li><a href="{{route('exam.type.view')}}"><i class="ti-more"></i>Exam type</a></li>
            <li><a href="{{route('school.subject.view')}}"><i class="ti-more"></i>School subjects</a></li>
            <li><a href="{{route('assign.subject.view')}}"><i class="ti-more"></i>Assign subject</a></li>
            <li><a href="{{route('designation.view')}}"><i class="ti-more"></i>Designation</a></li>
          </ul>
        </li>



        <li class="treeview {{ ($prefix =='/students')?'active': ''}}">
          <a href="#">
            <i data-feather="mail"></i> <span>Student Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="{{route('student.registration.view')}}"><i class="ti-more"></i>Student registration</a></li>
            <li><a href="{{route('roll.generate.view')}}"><i class="ti-more"></i>Roll generation</a></li>
            <li><a href="{{route('registration.fee.view')}}"><i class="ti-more"></i>Registration fee</a></li>
            <li><a href="{{route('month.fee.view')}}"><i class="ti-more"></i>Monthly fee</a></li>
            <li><a href="{{route('exam.fee.view')}}"><i class="ti-more"></i>Exam fee</a></li>



          </ul>
        </li>

        <li class="treeview {{ ($prefix =='/employees')?'active': ''}}">
            <a href="#">
              <i data-feather="mail"></i> <span>Employee Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
              <li><a href="{{ route('employee.registration.view')}}"><i class="ti-more"></i>Employee registration</a></li>
              <li><a href="{{ route('employee.salary.view')}}"><i class="ti-more"></i>Employee salary</a></li>
              <li><a href="{{ route('employee.leave.view')}}"><i class="ti-more"></i>Employee leave</a></li>
              <li><a href="{{ route('employee.attendance.view')}}"><i class="ti-more"></i>Employee attendance</a></li>
              <li><a href="{{ route('employee.monthly.salary')}}"><i class="ti-more"></i>Employee monthly salary</a></li>

            </ul>
          </li>


          <li class="treeview {{ ($prefix == '/marks')?'active':'' }}">
            <a href="#">
               <i data-feather="edit-2"></i> <span> Marks Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
          <li class="{{ ($route == 'marks.entry.add')?'active':'' }}"><a href="{{ route('marks.entry.add') }}"><i class="ti-more"></i>Marks Entry</a></li>
        <li class="{{ ($route == 'marks.entry.edit')?'active':'' }}"><a href="{{ route('marks.entry.edit') }}"><i class="ti-more"></i>Marks Edit</a></li>

         <li class="{{ ($route == 'marks.entry.grade')?'active':'' }}"><a href="{{ route('marks.entry.grade') }}"><i class="ti-more"></i>Marks Grade</a></li>


            </ul>
          </li>




          <li class="treeview {{ ($prefix == '/accounts')?'active':'' }}">
            <a href="#">
              <i data-feather="inbox"></i> <span> Accounts Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
          <li class="{{ ($route == 'student.fee.view')?'active':'' }}"><a href="{{ route('student.fee.view') }}"><i class="ti-more"></i>Student Fee</a></li>
          <li class="{{ ($route == 'account.salary.view')?'active':'' }}"><a href="{{ route('account.salary.view') }}"><i class="ti-more"></i>Employee Salary</a></li>

          <li class="{{ ($route == 'other.cost.view')?'active':'' }}"><a href="{{ route('other.cost.view') }}"><i class="ti-more"></i>Other Cost</a></li>


            </ul>
          </li>




          <li class="header nav-small-cap">Report Interface</li>

          <li class="treeview {{ ($prefix == '/reports')?'active':'' }}">
             <a href="#">
               <i data-feather="server"></i></i> <span> Reports Management</span>
               <span class="pull-right-container">
                 <i class="fa fa-angle-right pull-right"></i>
               </span>
             </a>
             <ul class="treeview-menu">
           <li class="{{ ($route == 'monthly.profit.view')?'active':'' }}"><a href="{{ route('monthly.profit.view') }}"><i class="ti-more"></i>Monthly-Yearly Profite</a></li>

             <li class="{{ ($route == 'marksheet.generate.view')?'active':'' }}"><a href="{{ route('marksheet.generate.view') }}"><i class="ti-more"></i>MarkSheet Generate</a></li>

              <li class="{{ ($route == 'attendance.report.view')?'active':'' }}"><a href="{{ route('attendance.report.view') }}"><i class="ti-more"></i>Attendance Report</a></li>

              <li class="{{ ($route == 'student.result.view')?'active':'' }}"><a href="{{ route('student.result.view') }}"><i class="ti-more"></i>Student Result </a></li>

              <li class="{{ ($route == 'student.idcard.view')?'active':'' }}"><a href="{{ route('student.idcard.view') }}"><i class="ti-more"></i>Student ID Card </a></li>





             </ul>
           </li>





         </ul>
    </section>

	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
