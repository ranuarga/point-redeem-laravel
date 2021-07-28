@extends('admin.layouts.index')

@section('title')
    Member
@endsection

@section('name')
    Member
@endsection

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Member</li>
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
                        <th>Email</th>
                        <th>Point</th>
                        <th>Member Since</th>
                        <th>Point History</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Point</th>
                        <th>Member Since</th>
                        <th>Point History</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $member->user_name }}</td>
                        <td>{{ $member->user_email }}</td>
                        <td>{{ $member->user_point }}</td>
                        <td>{{ $member->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.member.point-history', ['id' => $member->user_id]) }}">
                                Check
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