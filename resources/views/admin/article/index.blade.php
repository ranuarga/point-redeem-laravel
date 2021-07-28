@extends('admin.layouts.index')

@section('title')
    Article
@endsection

@section('name')
    Article
@endsection

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Article</li>
</ol>
<br>
<br>
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Poster</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Poster</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Comment</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($articles as $article)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $article->article_title }}</td>
                        <td>{{ $article->article_content }}</td>
                        <td>{{ $article->user->user_name }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.article.comment', ['id' => $article->article_id]) }}">
                                Check
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection