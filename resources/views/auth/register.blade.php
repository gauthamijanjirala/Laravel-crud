@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card form-holder">
                <div class="card-body">
                    <h1> Register </h1>

                    @if(session::has('error'))
                        <p class="text-danger">{{Session::get('error')}} </p>
                    @endif
                    <form action="{{ route('register') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection