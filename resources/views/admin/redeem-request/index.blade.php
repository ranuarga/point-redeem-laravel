@extends('admin.layouts.index')

@section('title')
    Redeem Request
@endsection

@section('name')
    Redeem Request
@endsection

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Redeem Request</li>
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
                        <th>Name</th>
                        <th>Reward</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Reward</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($redeem_requests as $redeem_request)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $redeem_request->user->user_name }}</td>
                        <td>{{ $redeem_request->reward->reward_title }}</td>
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
                        <td>{{ $redeem_request->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.redeem-request.accept', ['id' => $redeem_request->reward_history_id]) }}">
                                Accept
                            </a>
                            <a href="{{ route('admin.redeem-request.deny', ['id' => $$redeem_request->reward_history_id]) }}">
                                Deny
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