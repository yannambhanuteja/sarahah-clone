@extends('layouts.master')
@section('title','Register') 
@section('content')
<div class="container">
    <div class="row">
        <div class="z-depth-3 card hoverable col s12 m6 l6 offset-l3 offset-m3" id="register_page">
            <div class="panel panel-default">
                <div class="center-align">
                    <h2> Register </h2></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }} {{ csrf_field() }}

                        <div class="input-field col s12{{ $errors->has('name') ? ' has-error' : '' }}">

                            <i class="material-icons prefix">person</i>

                            <input id="icon_perfix" type="text" class="validate" name="name" value="{{ old('name') }}" required>
                            <label for="icon_perfix" class="col-md-4 control-label">Name</label>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif

                        </div>

                        <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">

                            <i class="material-icons prefix">mail</i>
                            <input id="icon_email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                            <label for="icon_email" class="col-md-4 control-label">E-Mail Address</label>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif

                        </div>

                        <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">

                            <i class="material-icons prefix">lock</i>
                            <input id="icon_password" type="password" class="validate" name="password" required>
                            <label for="icon_password" class="col-md-4 control-label">Password</label>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif

                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>

                        </div>

                        <div class="input-field col s12">
                            <div class="col s12 center-align">
                                
                                <button type="submit" class="pulse-expand orange btn waves-effect waves-light">
                                    <i class="shrink fa fa-user-plus" aria-hidden="true"></i> Register
                                </button>
                                <br> 
                                <br>
                                <br>
                                <h5><span>Already a Member ?</span></h5>
                                <a href="/login" class="pulse-expand blue btn waves-effect waves-light">
                                    <i class="shrink fa fa-sign-in" aria-hidden="true"></i> Login
                                </a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #register_page {
        margin-top: 2%;
    }
    
    h5 {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #000;
        line-height: 0.1em;
        margin: 10px 0 20px;
    }
    
    h5 span {
        background: #fff;
        padding: 0 10px;
    }
</style>
@endsection