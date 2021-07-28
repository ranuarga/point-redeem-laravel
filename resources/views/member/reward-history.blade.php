@extends('member.layouts.index')

@section('title')
    Reward History
@endsection

@section('content')
<div class="container" style="padding: 30px 0px;">
<h2>Reward History</h2>
<br>
<br>
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Reward</th>
                        <th>Cost</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Reward</th>
                        <th>Cost</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($redeem_requests as $redeem_request)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $redeem_request->reward->reward_title }}</td>
                        <td>{{ $redeem_request->reward->reward_cost }}</td>
                        <td>
                            @if($redeem_request->reward_status == 1)
                                Accepted
                            @elseif($redeem_request->reward_status == 2)
                                Denied
                            @else
                                In Progress
                            @endif
                        </td>
                        <td>{{ $redeem_request->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection