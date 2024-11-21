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
        <div class="panel-heading">{{ ucfirst(config('app.name')) }} @lang('quickadmin.qa_login')</div>
        <div class="panel-body">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> @lang('quickadmin.qa_there_were_problems_with_input'):
                <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form class="form-horizontal"
                  role="form"
                  method="POST"
                  action="{{ url('login') }}">
                <input type="hidden"
                       name="_token"
                       value="{{ csrf_token() }}">

                <div class="form-group">
                    <label class="col-md-4 control-label">@lang('quickadmin.qa_email')</label>

                    <div class="col-md-6">
                        <input type="email"
                               class="form-control"
                               name="email"
                               value="{{ old('email') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">@lang('quickadmin.qa_password')</label>

                    <div class="col-md-6">
                        <input type="password"
                               class="form-control"
                               name="password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <a href="{{ route('auth.password.reset') }}">@lang('quickadmin.qa_forgot_password')</a>
                        <br>
                        <a href="{{ route('auth.register') }}">@lang('quickadmin.qa_registration')</a>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <label>
                            <input type="checkbox"
                                   name="remember"> @lang('quickadmin.qa_remember_me')
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit"
                                class="btn btn-primary"
                                style="margin-right: 15px;">
                            @lang('quickadmin.qa_login')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
