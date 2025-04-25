@extends('admin.layout')

@section('content')
<div class="page-header">
    <h4 class="page-title">Edit Home Member</h4>
</div>

@if ($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.homes.update', $home->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
    @csrf
    @method('PUT')
    <style>
                    label {
                        color: #495057 !important;
                    }

                    .form-control {
                        background-color: #ffffff !important;
                        border: 1px solid #ced4da !important;
                        color: #495057 !important;
                    }

                    body[data-background-color="dark"] .main-panel label {
                        color: #495057 !important;
                    }
                </style>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $home->name }}" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" rows="5" class="form-control" required>{{ $home->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="linkedin">LinkedIn Link</label>
        <input type="url" name="linkedin" class="form-control" value="{{ $home->linkedin }}" placeholder="https://linkedin.com/in/yourprofile">
    </div>

    <div class="form-group">
        <label for="facebook">Facebook Link</label>
        <input type="url" name="facebook" class="form-control" value="{{ $home->facebook }}" placeholder="https://facebook.com/yourprofile">
    </div>

    <div class="form-group">
        <label for="twitter">Twitter Link</label>
        <input type="url" name="twitter" class="form-control" value="{{ $home->twitter }}" placeholder="https://twitter.com/yourprofile">
    </div>

    <div class="form-group">
        <label for="image">Upload New Image (optional)</label>
        <input type="file" name="image" class="form-control-file">
    </div>

    <div class="d-flex justify-content-between mt-4">
        <button type="submit" class="btn" style="background-color: #202940;color:white;">Update Member</button>
        <a href="{{ route('admin.homes.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</form>
@endsection
