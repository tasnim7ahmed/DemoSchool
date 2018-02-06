@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login As Student</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

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
                                <select id="section" type="text" class="form-control" name="section" value="{{ old('section') }}" required autofocus>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="N/A">N/A</option>
                                </select>

                                @if ($errors->has('section'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('section') }}</strong>
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
                        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                            <label for="year" class="col-md-4 control-label">Year</label>

                            <div class="col-md-6">
                                <select id="year" type="number" class="form-control" name="year" value="{{ old('year') }}" required autofocus>
                                    <?php
                                    for($i=(date('Y')-12);$i<=(date('Y'));$i++)
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    ?>
                                </select>

                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="reset" class="btn btn-primary">
                                    Reset
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
