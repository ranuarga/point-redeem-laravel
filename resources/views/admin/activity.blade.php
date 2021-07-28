@extends('admin.layouts.index')

@section('title')
    Activity
@endsection

@section('name')
    Activity
@endsection

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Activity</li>
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
                        <th>Description</th>
                        <th>Reward Point</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Reward Point</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($activities as $activity)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $activity->activity_title }}</td>
                        <td>{{ $activity->activity_description }}</td>
                        <td>{{ $activity->activity_reward_point }}</td>
                        <td>{{ $activity->created_at }}</td>
                        <td>{{ $activity->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection