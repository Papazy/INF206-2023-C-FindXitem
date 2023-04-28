@extends('Layouts.auth')
@section('container')
@if(session()->has('loginError'))
  <?php
    $message = "Maaf, Login gagal";
    echo "<script type='text/javascript'>alert('$message');</script>";
  ?>
@endif

<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true" />
    
    <div class="signup" >
      <form action="/login/create" method="post">
        <input type="hidden"  name="_token" value="{{ csrf_token() }}"/>
        <label for="chk" aria-hidden="true">Sign up</label>
        <input type="text" name="name" placeholder="User name" required="" />
        <input type="email" name="email" placeholder="Email" required="" />
        <input
        type="password"
        name="password"
        placeholder="Password"
        required=""
        />
        <button type="submit">Sign up</button>
      </form>
    </div>
    

    <div class="login">
      <form action="/login" method="POST">
        <input type="hidden"  name="_token" value="{{ csrf_token() }}"/>
        <label for="chk" aria-hidden="true">Login</label>
        <input type="email" name="email" placeholder="Email" required="" />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required=""
        />
        <button type="submit">Login</button>
      </form>
    </div>
  </div>
@endsection