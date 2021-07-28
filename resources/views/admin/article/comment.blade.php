@extends('admin.layouts.index')

@section('title')
    Comment
@endsection

@section('name')
    Comment
@endsection

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.article') }}">Article</a></li>
    <li class="breadcrumb-item active">Comment</li>
</ol>
<br>
<br>
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <tr>
                    <td>Title</td>
                    <td>{{ $article->article_title }}</td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td>{{ $article->article_content }}</td>
                </tr>
                <tr>
                    <td>Poster</td>
                    <td>{{ $article->user->user_name }}</td>
                </tr>
                <tr>
                    <td>Created At</td>
                    <td>{{ $article->created_at }}</td>
                </tr>
                <tr>
                    <td>Updated At</td>
                    <td>{{ $article->updated_at }}</td>
                </tr>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Commenter</th>
                        <th>Comment</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Commenter</th>
                        <th>Comment</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($comments as $comment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $comment->user->user_name }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td>{{ $comment->created_at }}</td>
                        <td>{{ $comment->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection