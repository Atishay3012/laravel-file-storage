@extends('layouts.auth')

@section('content')
<style>
    body, html {
        height: 100%;
        margin: 0;
    }

    .bg {
        background-image: url('https://img.freepik.com/free-vector/characters-people-searching-through-files_53876-66241.jpg?t=st=1730393755~exp=1730397355~hmac=83bd7251f873bbdd940d0cf522af1e57f33fca0c6ce6ba67d94520634ea24cbc&w=900');
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .panel {
        background-color: rgba(255, 255, 255, 0.8);
        border: none;
        border-radius: 10px;
        padding: 20px;
        width: 100%; /* Optional: make panel full-width */
        max-width: 400px; /* Optional: limit the width of the panel */
    }
</style>

<div class="bg">
    <div class="panel">
        <div class="panel-heading">@lang('quickadmin.qa_register')</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">@lang('quickadmin.qa_name')</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">@lang('quickadmin.qa_email')</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">@lang('quickadmin.qa_password')</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">@lang('quickadmin.qa_confirm_password')</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            @lang('quickadmin.qa_register')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
