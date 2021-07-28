@extends('member.layouts.index')

@section('title')
    Reward
@endsection

@section('content')
    <div style="padding: 30px 0px;">
        <div class="container">
            <p>Berikut daftar reward yang bisa didapatkan</p>
            @auth
                <p>Poin kamu saat ini : {{ $member->user_point }}</p>
            @endauth
            <div class="row justify-content-md-center">
                @foreach ($rewards as $reward)
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-4" style="max-width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $reward->reward_title }}</h5>
                                <hr>
                                <p class="card-text">{{ $reward->reward_description }}</p>
                            </div>
                            <div class="card-footer bg-transparent">
                                {{ $reward->reward_cost }} Poin
                                @auth
                                    @if ($member->user_point >= $reward->reward_cost)
                                        <a href="{{ route('reward.redeem', ['id' => $reward->reward_id]) }}"
                                            class="btn btn-outline-success" style="float:right">Redeem</a>
                                    @else
                                        <a href="{{ route('reward.redeem', ['id' => $reward->reward_id]) }}"
                                            class="btn btn-outline-secondary" style="float:right">Redeem</a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
