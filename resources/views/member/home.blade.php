@extends('member.layouts.index')

@section('title')
    Hello World
@endsection

@section('content')
<!-- Masthead -->
    <header class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Hello World</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="section-row">
            <h2 class="section-title">All Article</h2>
            <div class="row">
                @if($articles->isEmpty())
                        <div class="col-12">Belum ada artikel</div>
                @endif
                @foreach($articles as $article)
                    <div class="col-12"  style="margin-bottom:10px">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="card-body">
                                    <a href="{{ route('article', ['id' => $article->article_id]) }}">
                                        <h5 class="card-title">{{ $article->article_title }}</h5>
                                    </a>
                                    <p class="card-text">{{ substr($article->article_content, 0, 150) }}...</p>
                                    <br>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            {{ $article->user->user_name }} • {{ $article->created_at }}
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection