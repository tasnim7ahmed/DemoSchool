    <?php 
      $user = $uss[0]; 
    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>e-PATHSHALA</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="{{asset('adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('adminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="{{asset('adminLTE/bower_components/Ionicons/css/ionicons.min.css')}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset('adminLTE/dist/css/AdminLTE.min.css')}}">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="{{asset('adminLTE/dist/css/skins/_all-skins.min.css')}}">
      <!-- Morris chart -->
      <link rel="stylesheet" href="{{asset('adminLTE/bower_components/morris.js/morris.css')}}">
      <!-- jvectormap -->
      <link rel="stylesheet" href="{{asset('adminLTE/bower_components/jvectormap/jquery-jvectormap.css')}}">
      <!-- Date Picker -->
      <link rel="stylesheet" href="{{asset('adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{asset('adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="{{asset('adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>e</b>PS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><span><i class="fa fa-university"></i></span><b>  e-</b>PATHSHALA</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              
              <!-- User Account: style can be found in dropdown.less -->
              <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @guest
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        {{$user->name}} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
            </ul>
          </div>
        </nav>
      </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Welcome, {{$user->name}}</li>
            <li class="active treeview">
              <a href="/home">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li><a href="#"><i class="fa fa-th-large"></i> <span>Course</span></a></li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Syllabus</span></a></li>
            <li><a href="#"><i class="fa fa-calendar-check-o"></i> <span>Routine</span></a></li>
            <li><a href="#"><i class="fa fa-server"></i> <span>Assignments</span></a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart"></i>
                <span>Results</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Class Test</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-green"></i> Term Exams</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Others</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Exam Info</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Class Test</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-green"></i> Term Exams</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Others</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-file-text-o"></i> <span>Book List</span></a></li>
            <li><a href="#"><i class="fa fa-bell-o"></i> <span>Notice</span></a></li>
            <li><a href="/test"><i class="fa fa-warning"></i> <span>DemoTest Page</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-red">DANGER</small>
                </span>
          </a></li>
            <li class="header"><i class="fa fa-database"></i>  Database</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Students' DB</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Teachers' DB</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>STUDENT A/C</small>
          </h1>
        </section>

      <section class="content">  
        <!-- Main content -->
      <div class="row">
        <div class="col-md-6">
        <div class="box box-primary">
              <div class="box-body box-profile">
                <?php

                if($user->gender=='Male')
                {
                 echo ' <img class="profile-user-img img-responsive img-circle" src="Images/student-boy.png" alt="User profile picture">';
                }
              else
                {
                 echo ' <img class="profile-user-img img-responsive img-circle" src="Images/student-girl.jpg" alt="User profile picture">';
                }
                ?>
                

                <h3 class="profile-username text-center">{{$user->name}}</h3>

                <p class="text-muted text-center">STUDENT</p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>NAME</b> <a class="pull-right">{{$user->name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>GENDER</b> <a class="pull-right">{{$user->gender}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Date of Birth</b> <a class="pull-right">{{$user->dob}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>ROLL</b> <a class="pull-right">{{$user->roll}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>SECTION</b> <a class="pull-right">{{$user->section}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>SHIFT</b> <a class="pull-right">{{$user->shift}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>CLASS</b> <a class="pull-right">{{$user->class}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>YEAR</b> <a class="pull-right">{{$user->year}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>MOTHER's NAME</b> <a class="pull-right">{{$user->mother}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>FATHER's NAME</b> <a class="pull-right">{{$user->father}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>CONTACT NO.</b> <a class="pull-right">{{$user->contact}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>ADDRESS</b> <a class="pull-right">{{$user->address}}</a>
                  </li>
                </ul>
                <a href="#" class="btn btn-success btn-block"><b>Edit Profile</b></a>
                <a href="#" class="btn btn-danger btn-block"><b>Change Password</b></a>
              
              <!-- /.box-body -->
            </div>
          </div>
        </div>

              <!-- Calendar -->
            <div class="col-md-6">
            <div class="box box-solid bg-green-gradient">
              <div class="box-header">
                <i class="fa fa-calendar"></i>

                <h3 class="box-title">Calendar</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
             </div> 
            <!-- /.box -->
        

        <!-- Here Goes The Content!!! tasnim-->
  <div class="row">
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>0</h3>

                <p>Upcoming Ceremonies</p>
              </div>
              <div class="icon">
                <i class="fa fa-road"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>7<sup style="font-size: 20px"></sup></h3>

                <p>Nearby Exams</p>
              </div>
              <div class="icon">
                <i class="fa fa-edit"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>3</h3>

                <p>Unseen Notices</p>
              </div>
              <div class="icon">
                <i class="fa fa-bell-o"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>2</h3>

                <p>Pending Assignments</p>
              </div>
              <div class="icon">
                <i class="fa fa-server"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

      </div>
      </div>
    </section>
    </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; 2018 Tasnim Ahmed.</strong> All rights
        reserved.
      </footer>

    <!--   Control SideBar Goes Here. tasnim-->

      <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{asset('adminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('adminLTE/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="{{asset('adminLTE/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('adminLTE/bower_components/morris.js/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('adminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('adminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('adminLTE/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('adminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('adminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('adminLTE/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('adminLTE/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('adminLTE/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('adminLTE/dist/js/demo.js')}}"></script>
    </body>
    </html>
