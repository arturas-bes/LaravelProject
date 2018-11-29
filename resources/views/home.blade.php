@extends('layouts.app')

@section('content')
<div class="container">
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

                    <span>You are logged in!</span>
                    <div class="col-xs-6"><span style="font-weight:700;">Name: </span>{{ Auth::user()->name }}</div>
                     <div class="col-xs-6"><span style="font-weight:700;">Email: </span>{{ Auth::user()->email }}</div>
                     <div class="col-xs-6"><span style="font-weight:700;">Phone: </span>{{ Auth::user()->phone }}</div>
                       <div class="col-xs-6"><span style="font-weight:700;">Password SSH: </span>{{ Auth::user()->password }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
