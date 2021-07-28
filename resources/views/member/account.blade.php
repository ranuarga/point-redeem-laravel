@extends('member.layouts.index')

@section('title')
    My Profile
@endsection

@section('content')
    <div class="container" style="padding: 30px 0px;">
        <h2>My Account</h2>
        {{ Form::model($member, ['route' => 'my-account.update', 'method' => 'post']) }}
            {{ Form::label('user_name', 'Full Name', ['class' => 'small mb-1']) }}
            {{ Form::text('user_name', Request::old('user_name'), ['class' => 'form-control py-4', 'placeholder' => 'Full Name', 'required']) }}
            {{ Form::label('user_email', 'Email', ['class' => 'small mb-1']) }}
            {{ Form::text('user_email', Request::old('user_email'), ['class' => 'form-control py-4', 'placeholder' => 'Email', 'required']) }}
            {{ Form::label('user_phone', 'Phone', ['class' => 'small mb-1']) }}
            {{ Form::text('user_phone', Request::old('user_phone'), ['class' => 'form-control py-4', 'placeholder' => 'Phone', 'required']) }}
            {{ Form::label('user_address', 'Address', ['class' => 'small mb-1']) }}
            {{ Form::textarea('user_address', Request::old('user_address'), ['class' => 'form-control', 'placeholder' => 'Address', 'required']) }}
            <br>
            <button type="submit" class="btn btn-primary float-right">Done</button>
        {{ Form::close() }}
    </div>
@endsection
