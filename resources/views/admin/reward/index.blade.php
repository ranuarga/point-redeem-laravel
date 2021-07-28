@extends('admin.layouts.index')

@section('title')
    Reward
@endsection

@section('name')
    Reward
@endsection

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Reward</li>
</ol>
<a href="{{ route('admin.reward.create') }}">
    <button class="btn btn-success float-right">
        Create Reward
    </button>
</a>
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
                        <th>Cost</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Cost</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($rewards as $reward)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $reward->reward_title }}</td>
                        <td>{{ $reward->reward_description }}</td>
                        <td>{{ $reward->reward_cost }}</td>
                        <td>{{ $reward->created_at }}</td>
                        <td>{{ $reward->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.reward.edit', ['id' => $reward->reward_id]) }}">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="{{ route('admin.reward.delete', ['id' => $reward->reward_id]) }}">
                                <i class="fas fa-trash-alt"></i>
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