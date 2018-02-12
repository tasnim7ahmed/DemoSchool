@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register As Student</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>






                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        <label for="gender" class="col-md-4 control-label">Gender</label>
                        <div class="col-md-6">
                          <div id="gender" class="btn-group" data-toggle="buttons">

                            <label class="btn btn-success">
                              <input type="radio" name="gender" value="Male"> Male
                            </label>
                            
                            <label class="btn btn-success">
                              <input type="radio" name="gender" value="Female"> Female
                            </label>

                            <label class="btn btn-success">
                              <input type="radio" name="gender" value="Others"> Others
                            </label>
                          </div>
                          @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>





<!--                         <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <select id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" placeholder="DD-MM-YYYY" name="dob" value="{{ old('dob') }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('roll') ? ' has-error' : '' }}">
                            <label for="roll" class="col-md-4 control-label">Roll</label>

                            <div class="col-md-6">
                                <select id="roll" type="number" class="form-control" name="roll" value="{{ old('roll') }}" required autofocus>
                                    <?php
                                    for($i=1;$i<=100;$i++)
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    ?>
                                </select>
                                @if ($errors->has('roll'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roll') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }}">
                        <label for="section" class="col-md-4 control-label">Section</label>
                        <div class="col-md-6">
                          <div id="section" class="btn-group" data-toggle="buttons">

                            <label class="btn btn-success">
                              <input type="radio" name="section" value="A"> A
                            </label>
                            
                            <label class="btn btn-success">
                              <input type="radio" name="section" value="B"> B
                            </label>

                            <label class="btn btn-success">
                              <input type="radio" name="section" value="C"> C
                            </label>

                            <label class="btn btn-danger">
                              <input type="radio" name="section" value="N/A"> N/A
                            </label>
                          </div>
                          @if ($errors->has('section'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('section') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('shift') ? ' has-error' : '' }}">
                        <label for="shift" class="col-md-4 control-label">Shift</label>
                        <div class="col-md-6">
                          <div id="shift" class="btn-group" data-toggle="buttons">

                            <label class="btn btn-success">
                              <input type="radio" name="shift" value="Morning"> Morning
                            </label>
                            
                            <label class="btn btn-success">
                              <input type="radio" name="shift" value="Day"> Day
                            </label>

                            <label class="btn btn-danger">
                              <input type="radio" name="shift" value="N/A"> N/A
                            </label>
                          </div>
                          @if ($errors->has('shift'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shift') }}</strong>
                                    </span>
                                @endif
                        </div>
                      </div>
                        
                        <div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
                            <label for="class" class="col-md-4 control-label">Class</label>

                            <div class="col-md-6">
                                <select id="class" type="number" class="form-control" name="class" value="{{ old('class') }}" required autofocus>
                                    <?php
                                    for($i=1;$i<=12;$i++)
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    ?>
                                </select>

                                @if ($errors->has('class'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('class') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="role" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                <select id="role" type="text" class="form-control" name="role" value="{{ old('role') }}" required autofocus>
                                    <option value="Student">Student</option>
                                    <option value="Teacher" disabled>Teacher</option>
                                    <option value="Admin" disabled>Admin</option>
                                </select>

                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                            <label for="year" class="col-md-4 control-label">Year</label>

                            <div class="col-md-6">
                                <select id="year" type="number" class="form-control" name="year" value="{{ date('Y') }}" required autofocus>
                                    <option value="{{date('Y')}}">{{date('Y')}}</option>
                                    
                                </select>

                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mother') ? ' has-error' : '' }}">
                            <label for="mother" class="col-md-4 control-label">Mother's Name</label>

                            <div class="col-md-6">
                                <input id="mother" type="text" class="form-control" name="mother" value="{{ old('mother') }}" required autofocus>

                                @if ($errors->has('mother'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mother') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('father') ? ' has-error' : '' }}">
                            <label for="father" class="col-md-4 control-label">Father's Name</label>

                            <div class="col-md-6">
                                <input id="father" type="text" class="form-control" name="father" value="{{ old('father') }}" required autofocus>

                                @if ($errors->has('father'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('father') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                            <label for="contact" class="col-md-4 control-label">Contact no.</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}" required autofocus>

                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('userID') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="userID" type="hidden" class="form-control" name="userID" value="XXXX" required autofocus>

                                @if ($errors->has('userID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>



                        









                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="reset" class="btn btn-primary">
                                    Reset
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
