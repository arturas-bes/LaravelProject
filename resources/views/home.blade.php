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
                    <form enctype="multipart/form-data" action="{{ route('profile.update') }}" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"> 
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
