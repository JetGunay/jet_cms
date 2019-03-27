@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    {{ Auth::user()->name }}
                    {{-- @if($service == 'google')
                        <div class="title">
                            <h1>Welcome {{ $details->name }}</h1> <br>
                            Your email is: {{ $details->email }} <br>
                            <img src="{{ $details->avatar }}" alt="">
                        </div>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
@endsection
