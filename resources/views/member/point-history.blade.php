@extends('member.layouts.index')

@section('title')
    Point History
@endsection

@section('content')
<div class="container" style="padding: 30px 0px;">
<h2>Point History</h2>
<br>
<br>
<div class="card mb-4">
    <div class="card-body">
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
</div>
@endsection