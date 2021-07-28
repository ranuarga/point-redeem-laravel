@extends('member.layouts.index')

@section('title')
    Hello World
@endsection

@section('content')
    <div style="padding: 30px 0px;">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col">
                    <div class="card">
                        <div class="card-header">{{ $article->article_title }}</div>
                        <div class="card-body">
                            <p class="card-text article-content">{{ $article->article_content }}</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    By {{ $article->user->user_name }} • {{ $article->created_at }}
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row justify-content-md-center">
                <div class="col" style="max-height: 400px; overflow-y:scroll;">
                    @if ($comments->isEmpty())
                        <div class="text-muted text-center">Belum Ada Komentar</div>
                    @endif
                    @foreach ($comments as $comment)
                        <div class="card">
                            <div class="card-body">
                                <p>{{ $comment->comment }}</p>
                                <footer class="blockquote-footer">
                                    {{ $comment->user->user_name }}, {{ $comment->created_at }}
                                </footer>
                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
                <div class="col">
                    @auth
                        {{ Form::open(['route' => ['comment.store', $article->article_id]]) }}
                            {{ Form::textarea('comment', Request::old('comment'), ['class' => 'form-control', 'placeholder' => 'Tulis Komentarmu', 'rows' => 5]) }}
                            <br>
                            <button type="submit" class="btn btn-primary float-right">Comment</button>
                        {{ Form::close() }}
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection