@extends('admin.layouts.index')

@section('title')
    Dashboard
@endsection

@section('name')
    Dashboard
@endsection

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">
    <div class="col-xl-3 col-md-12">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <h1>{{ $count_member }}</h1>
                Member(s)
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('admin.member') }}">
                    View Details
                </a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-12">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <h1>{{ $count_reward }}</h1>
                Reward(s)
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('admin.reward') }}">
                    View Details
                </a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-12">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <h1>{{ $count_redeem_request }}</h1>
                Redeem Request(s)
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('admin.redeem-request') }}">
                    View Details
                </a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-12">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <h1>{{ $count_article }}</h1>
                Article(s)
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('admin.article') }}">
                    View Details
                </a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
