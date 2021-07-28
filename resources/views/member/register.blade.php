@extends('member.layouts.index')

@section('title')
    Register Member
@endsection

@section('content')
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">
                                            Register Member
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        {{ Form::open(['route' => 'register.post']) }}
                                            {{ Form::label('user_name', 'Full Name', ['class' => 'small mb-1']) }}
                                            {{ Form::text('user_name', Request::old('user_name'), ['class' => 'form-control py-4', 'placeholder' => 'Full Name', 'required']) }}
                                            {{ Form::label('user_email', 'Email', ['class' => 'small mb-1']) }}
                                            {{ Form::text('user_email', Request::old('user_email'), ['class' => 'form-control py-4', 'placeholder' => 'Email', 'required']) }}
                                            {{ Form::label('user_password', 'Password', ['class' => 'small mb-1']) }}
                                            {{ Form::password('user_password', ['class' => 'form-control py-4', 'placeholder' => 'Password', 'required']) }}
                                            {{ Form::label('confirm_password', 'Password', ['class' => 'small mb-1']) }}
                                            {{ Form::password('confirm_password', ['class' => 'form-control py-4', 'placeholder' => 'Confirm Password', 'required']) }}
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary">Register</button>
                                            </div>
                                        {{ Form::close() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
@endsection