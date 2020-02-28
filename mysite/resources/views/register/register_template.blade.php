@extends('layouts.app')

  
  @section('content')
  <div class="container" style="max-width: 50%">
    <div class="card mt-5">
      <div class="card-header text-center">
        <h2 class="text-center">Register</h2>
      </div>
      <div class="card-body bg-light">
        <form class="form-horizontal" action="{{action('Register@register_action')}}" method="POST">
          <div class="form-group row">
            <label class="col-sm-3 control-label" for="username">Username:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="username" placeholder="Username" name="Username" value="{{old('Username')}}" maxlength="32" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="email">Email:</label>
            <div class="col-sm-6">
              <input type="email" class="form-control" id="email" placeholder="Email" name="Email" value="{{old('Email')}}" maxlength="100" required>
             
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="pwd">Password:</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password" maxlength="32" value="" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="pwd">Confirm Password:</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="Password_confirmation" maxlength="32" value="" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12 text-center">
              <button type="submit" name="submit" class="btn btn-outline-success"><i class="fas fa-check"></i>&nbsp;Register</button>
              <button type="reset" name="reset" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;Clear</button>
            </div>        
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
      </div>
    </div>
    @include('layouts.error')
  </div>
  @endsection