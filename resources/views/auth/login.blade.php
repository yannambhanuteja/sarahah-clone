@extends('layouts.master') @section('title','Login') @section('content')
<div class="container">
    <div class="row">
        <div class="z-depth-3 card hoverable col s12 m6 l6 offset-l3 offset-m3" id="login_page">
            <div class="panel panel-default">
                <div class="center-align">
                    <h2>Login </h2></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">

                            <i class="material-icons prefix">email</i>

                            <input id="icon_prefix" type="email" class="validate" name="email" value="{{ old('email') }}" required>

                            <label for="icon_prefix" class="col s6 control-label">E-Mail Address</label>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif

                        </div>

                        <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">

                            <i class="material-icons prefix">lock</i>

                            <input id="icon_password" type="password" class="validate" name="password" required>
                            <label for="icon_password" class="col s6 control-label">Password</label>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif

                        </div>

                        <div class="center-align">
                            <button type="submit" class="pulse-expand blue btn waves-effect waves-light">
                                <i class="shrink fa fa-sign-in" aria-hidden="true"></i> Login
                            </button>
                            <br><br>
                            
                           

                            <a class="pulse-expand orange btn waves-effect waves-light" href="{{ route('password.request') }}">
                                <i class="shrink fa fa-unlock" aria-hidden="true"></i> Forgot Your Password?

                            </a>
                            <br>
                            <br>
                            <br>
                            <h5><span>Not Yet a Member ?</span></h5>
                            <br>
                            <a class="pulse-expand green btn waves-effect waves-ligh" href="/register">
                                <i class="shrink fa fa-user-plus" aria-hidden="true"></i> Register
                            </a>
                            <br>
                            <br>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #login_page {
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