@extends('member.layouts.index')

@section('title')
    Activity
@endsection

@section('content')
    <div style="padding: 30px 0px;">
        <p class="text-center">Aktivitas untuk Mendapatkan Poin yang dapat Ditukarkan dengan Reward</p>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-8">
                    <div class="card">
                        <div class="list-group">
                            @foreach ($activities as $activity)
                            <div class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $activity->activity_title }}</h5>
                                    <small>+{{ $activity->activity_reward_point }} Poin</small>
                                </div>
                                <p class="mb-1">{{ $activity->activity_description }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection