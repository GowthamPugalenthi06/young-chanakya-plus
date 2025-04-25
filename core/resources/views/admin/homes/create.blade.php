@extends('admin.layout')

@section('content')
<div class="page-header">
    <h4 class="page-title">Add New Home Member</h4>
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

<form action="{{ route('admin.homes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
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
        <input type="text" name="name" class="form-control" placeholder="Enter name" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" rows="5" class="form-control" placeholder="Enter description" required></textarea>
    </div>

    <div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    {{-- Social Media Links --}}
    <div class="form-group">
        <label for="linkedin">LinkedIn Link</label>
        <input type="url" name="linkedin" class="form-control" placeholder="https://linkedin.com/in/username">
    </div>

    <div class="form-group">
        <label for="facebook">Facebook Link</label>
        <input type="url" name="facebook" class="form-control" placeholder="https://facebook.com/username">
    </div>

    <div class="form-group">
        <label for="twitter">Twitter Link</label>
        <input type="url" name="twitter" class="form-control" placeholder="https://twitter.com/username">
    </div>

    <div class="d-flex justify-content-between mt-4">
        <button type="submit" class="btn btn-primary">Add Member</button>
        <a href="{{ route('admin.homes.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</form>
@endsection

@section('scripts')
@endsection
