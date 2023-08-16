@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

         <div class="col-md-4 offset-md-4">
            <div class="card form-holder">
                <div class="card-body">
                    <h1> Login </h1>

                    @if(Session::has('error'))
                        <p class="text-danger">{{ Session::get('error')}} </p>
                    @endif
                    @if (Session::has('success'))
                    <p class="text-success">{{ Session::get('success') }} </p>
                    @endif

                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" name="email" class="form-control" placeholder="Email"/>
                            @if($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="form-group"> 
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="password"/>
                            @if($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-8 text-left">
                                <a href="#" class="btn btn-link">Forget Password </a>
                            </div>
                            <div class="col-4 text-right">
                                <input type="submit" class="btn btn-primary" value="Login" /> 
                            </div>
                        </div>
                     </form>    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Primary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->

@endsection
