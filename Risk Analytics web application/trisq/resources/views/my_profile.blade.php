@extends('layouts.master')
@section('title', 'Trisq My Profile')

@section('content')
<div class="page-content-wrapper col-md-12">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="page-content inset" id="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="fa fa-user" aria-hidden="true"></i> Edit profile</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal col-md-offset-2" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                    <div class="form-group" id="profile_form">
                        <label for="title" class="col-md-1 control-label">Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="form-group" id="profile_form">
                        <label for="email" class="col-md-1 control-label">E-mail</label>
                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                         @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group" id="profile_form">
                        <div class="col-md-8 col-md-offset-1">
                            <a href="{{ URL::previous() }}" class="btn btn-danger gradient btn-sm pull-right"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</a>
                            <button type="submit" class="btn btn-primary gradient btn-sm"><span class="glyphicon glyphicon-ok"></span> Update</button>
                        </div>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
