<?php
    if(isset($reward))
        $title = 'Update';
    else
        $title = 'Create';
?>
@extends('admin.layouts.index')

@section('title')
    {{ $title }} Reward
@endsection

@section('name')
    {{ $title }} Reward
@endsection

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.reward') }}">Reward</a></li>
    <li class="breadcrumb-item active">{{ $title }}</li>
</ol>
    @if(isset($reward))
        {{ Form::model($reward, ['route' => ['admin.reward.update', $reward->reward_id], 'method' => 'post']) }}
    @else
        {{ Form::open(['route' => 'admin.reward.store']) }}
    @endif
            {{ Form::label('reward_title', 'Title') }}
            {{ Form::text('reward_title', Request::old('reward_title'), ['class' => 'form-control', 'placeholder' => 'Title', 'required']) }}
            {{ Form::label('reward_description', 'Description') }}
            {{ Form::textarea('reward_description', Request::old('reward_description'), ['class' => 'form-control', 'placeholder' => 'Description']) }}
            {{ Form::label('reward_cost', 'Cost') }}
            {{ Form::number('reward_cost', Request::old('reward_cost'), ['class' => 'form-control', 'min' => 1, 'step' => 1, 'required']) }}
            <br>
            <button type="submit" class="btn btn-primary float-right">Done</button>
    {{ Form::close() }}
@endsection
