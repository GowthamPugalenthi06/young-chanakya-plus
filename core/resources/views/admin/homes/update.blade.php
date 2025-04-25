@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2>Edit Home Page Content</h2>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.homes.update', $home->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $home->title }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" rows="5" class="form-control" required>{{ $home->description }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="category">Category</label>
            <input type="text" name="category" value="{{ $home->category }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="image">Image</label><br>
            @if($home->image)
                <img src="{{ asset($home->image) }}" alt="Home Image" width="150" class="mb-2">
            @endif
            <input type="file" name="image" class="form-control">
            <small class="text-muted">Leave empty if you don't want to change the image</small>
        </div>

        <button type="submit" class="btn btn-primary">Update Home</button>
        <a href="{{ route('admin.homes.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
