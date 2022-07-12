<!-- Navbar-->
@extends('layouts.app')


@section('content')
<div class="container">
    <form method="post" action="{{ route('register') }}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">First Name:</label>
        <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="lastName">Last name:</label>
        <input type="text" class="form-control" name="lastName" id="lastName" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="password_confirmation">Repeat password</label>
          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
