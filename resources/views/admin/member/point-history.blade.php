@extends('admin.layouts.index')

@section('title')
    Point History
@endsection

@section('name')
    Point History
@endsection

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.member') }}">Member</a></li>
    <li class="breadcrumb-item active">Point History</li>
</ol>
<br>
<br>
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <tr>
                    <td>Name</td>
                    <td>{{ $member->user_name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $member->user_email }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $member->user_phone }}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{ $member->user_address }}</td>
                </tr>
                <tr>
                    <td>Point</td>
                    <td>{{ $member->user_point }}</td>
                </tr>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Activity</th>
                        <th>Description</th>
                        <th>Point</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Activity</th>
                        <th>Description</th>
                        <th>Point</th>
                        <th>Created At</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($point_histories as $point_history)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $point_history->activity->activity_title }}</td>
                        <td>{{ $point_history->activity->activity_description }}</td>
                        <td>{{ $point_history->activity->activity_reward_point }}</td>
                        <td>{{ $point_history->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection