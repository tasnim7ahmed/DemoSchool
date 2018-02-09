@extends('master')
@section('body')
<?php 
      $user = $uss[0]; 
?>
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
@endsection