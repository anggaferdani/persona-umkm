@extends('templates.authentications')
@section('title', isset($title) ? $title : 'Login')
@section('content')
<div class="container container-tight py-4">
  <div class="text-center mb-4">
    <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('tabler/static/logo.svg') }}" height="36" alt=""></a>
  </div>
  <div class="card card-md">
    <div class="card-body">
      <h2 class="h2 text-center mb-4">Login to your account</h2>
      @if(Session::get('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
      @endif
      <form action="{{ route('post-login') }}" method="post" autocomplete="off" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="mb-3">
          <label class="form-label required">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email" autocomplete="off">
          @error('email')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-2">
          <label class="form-label required">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter password" autocomplete="off">
          @error('password')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">Sign in</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection