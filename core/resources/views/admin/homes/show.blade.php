@extends('admin.layout')

@section('content')
<div class="card mt-4 shadow-sm">
    <div class="card-body" style="background-color:white;">
        <div class="d-flex align-items-center mb-3">
            <img src="{{ asset($home->image) }}" alt="Profile Image" class="rounded-circle mr-3" width="100" height="100" style="object-fit: cover;">
            <div>
                <h4 class="mb-0">{{ $home->name }}</h4>
            </div>
        </div>

        <p class="text-muted">{{ $home->description }}</p>

        <div class="mt-4">
            <a href="{{ route('admin.homes.edit', $home->id) }}" class="btn btn-primary">Edit Member</a>
            <a href="{{ route('admin.homes.index') }}" class="btn btn-secondary ml-2">Back to List</a>
        </div>
    </div>
</div>
@endsection
