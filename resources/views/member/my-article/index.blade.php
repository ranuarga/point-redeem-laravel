@extends('member.layouts.index')

@section('title')
    My Article
@endsection

@section('content')
<div class="container" style="padding: 30px 0px;">
<h2>My Article</h2>
<a href="{{ route('my-article.create') }}">
    <button class="btn btn-success float-right">
        Create Article
    </button>
</a>
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
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($articles as $article)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $article->article_title }}</td>
                        <td>{{ $article->article_content }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->updated_at }}</td>
                        <td>
                            <a href="{{ route('my-article.edit', ['id' => $article->article_id]) }}">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="{{ route('my-article.delete', ['id' => $article->article_id]) }}">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection