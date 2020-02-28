@extends('layouts.app')

@section('content')
  <div class="container" style="max-width: 50%">
    <div class="card mt-5">
      <div class="card-header">
        <h2 class="text-center">Login</h2>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{action('Login@login_action')}}" method="POST">
          <div class="form-group row">
            <label class="control-label col-sm-3" for="email">Email:</label>
            <div class="col-sm-6">
              <input type="email" class="form-control" id="email" placeholder="Enter Email" name="Email" value="{{old('Email')}}" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="pwd">Password:</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password" value="" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12 row">
              <div class="col-sm-6">
                <label class="float-left"><input type="checkbox" name="rememberMe" value="true">Remember me</label>
              </div>
              <div class="col-sm-6">
                <a class="float-right" href="password_reset.php">Forgot password?</a>
              </div>
            </div>
          </div>      
          <div class="form-group row">
            <div class="col-sm-12 text-center">
              <button type="submit" class="btn btn-outline-success"><i class="fas fa-check"></i>&nbsp;Login</button>
            </div>        
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
        @include('layouts.error')
      </div>
  </div>
</div>
@endsection