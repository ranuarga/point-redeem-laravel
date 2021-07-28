<?php
    if(isset($reward))
        $title = 'Update';
    else
        $title = 'Create';
?>
@extends('member.layouts.index')

@section('title')
    {{ $title }} My Article
@endsection

@section('name')
    {{ $title }} My Article
@endsection

@section('content')
<div class="container" style="padding: 30px 0px;">
    <h2>My Article</h2>
    @if(isset($article))
        {{ Form::model($article, ['route' => ['my-article.update', $article->article_id], 'method' => 'post']) }}
    @else
        {{ Form::open(['route' => 'my-article.store']) }}
    @endif
            {{ Form::label('article_title', 'Title') }}
            {{ Form::text('article_title', Request::old('article_title'), ['class' => 'form-control', 'placeholder' => 'Title', 'required']) }}
            {{ Form::label('article_content', 'Content') }}
            {{ Form::textarea('article_content', Request::old('article_content'), ['class' => 'form-control', 'placeholder' => 'Content']) }}
            <br>
            <button type="submit" class="btn btn-primary float-right">Done</button>
        {{ Form::close() }}
</div>
@endsection
