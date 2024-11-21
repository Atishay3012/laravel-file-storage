@extends('layouts.app')

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
        padding: 20px; /* Padding to create space around the content */
    }

    .panel {
        background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
        border: none;
        border-radius: 10px;
        width: 100%; /* Full-width */
        max-width: 400px; /* Limit the panel's width */
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Optional shadow for depth */
    }

    .panel-heading {
        font-size: 1.5em; /* Increase heading size for emphasis */
        margin-bottom: 15px; /* Spacing below heading */
    }

    .help-block {
        color: red; /* Highlight error messages in red */
    }
</style>

<div class="bg">
    <div class="panel">
        <h3 class="page-title">@lang('quickadmin.qa_change_password')</h3>

        @if(session('success'))
            <div class="row">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        @else
            {!! Form::open(['method' => 'PATCH', 'route' => ['auth.change_password']]) !!}
            <div class="panel-heading">
                @lang('quickadmin.qa_edit')
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('current_password', trans('quickadmin.qa_current_password'), ['class' => 'control-label']) !!}
                        {!! Form::password('current_password', ['class' => 'form-control', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('current_password'))
                            <p class="help-block">
                                {{ $errors->first('current_password') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('new_password', trans('quickadmin.qa_new_password'), ['class' => 'control-label']) !!}
                        {!! Form::password('new_password', ['class' => 'form-control', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('new_password'))
                            <p class="help-block">
                                {{ $errors->first('new_password') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('new_password_confirmation', trans('quickadmin.qa_password_confirm'), ['class' => 'control-label']) !!}
                        {!! Form::password('new_password_confirmation', ['class' => 'form-control', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('new_password_confirmation'))
                            <p class="help-block">
                                {{ $errors->first('new_password_confirmation') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="panel-footer">
                {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        @endif
    </div>
</div>
@endsection
