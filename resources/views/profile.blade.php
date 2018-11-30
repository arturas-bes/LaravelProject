@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profile</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
    <div class="container mt-5">
     <div class="col-xs-6 text-left p-3" ><span style="font-weight:700;">Name: </span>{{ Auth::user()->name }}</div>
                     <div class="col-xs-6 text-left p-3"><span style="font-weight:700;">Email: </span>{{ Auth::user()->email }}</div>
                     <div class="col-xs-6 text-left p-3"><span style="font-weight:700;">Phone: </span>{{ Auth::user()->phone }}</div>
                       <div class="col-xs-6 text-left p-3"><span style="font-weight:700;">Password SSH: </span>{{ Auth::user()->password }}</div>
                      
</div>
</div>
@endsection