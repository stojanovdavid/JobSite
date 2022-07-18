<!-- Navbar-->
@extends('layouts.app')


@section('content')
<div class="container">
    <form method="post" action="{{ route('register') }}">
      @csrf
      <div class="form-group">
        <select name="role" id="role">
          @foreach ($roles as $role)
              <option value="{{ $role->role }}">{{ $role->role }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">First Name:</label>
        <input type="text" class="form-control @error('firstName') border border-danger  @enderror" name="firstName" aria-describedby="emailHelp" placeholder="Enter name">
          <div class="text-danger">
            @error('firstName')
                {{ $message }}
            @enderror
          </div>
      </div>
      <div class="form-group">
        <label for="lastName">Last name:</label>
        <input type="text" class="form-control @error('lastName') border border-danger  @enderror" name="lastName" id="lastName" aria-describedby="emailHelp" placeholder="Enter email">
        <div class="text-danger">
          @error('lastName')
              {{ $message }}
          @enderror
        </div>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control @error('username') border border-danger  @enderror" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter email">
        <div class="text-danger">
          @error('username')
              {{ $message }}
          @enderror
        </div>
      </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control @error('email') border border-danger  @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <div class="text-danger">
            @error('email')
                {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control @error('password') border border-danger  @enderror" name="password" id="exampleInputPassword1" placeholder="Password">
          <div class="text-danger">
            @error('password')
                {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="password_confirmation">Repeat password</label>
          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
