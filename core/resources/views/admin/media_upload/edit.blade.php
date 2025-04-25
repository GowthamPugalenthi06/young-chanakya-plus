@extends('admin.layout')

@section('content')
<div class="page-header">
  <h4 class="page-title text-dark">Edit Media Upload</h4>
  <ul class="breadcrumbs">
    <li class="nav-home">
      <a href="{{ route('admin.dashboard') }}">
        <i class="flaticon-home text-primary"></i>
      </a>
    </li>
    <li class="separator"><i class="flaticon-right-arrow text-muted"></i></li>
    <li class="nav-item"><a href="#" class="text-muted">Media</a></li>
    <li class="separator"><i class="flaticon-right-arrow text-muted"></i></li>
    <li class="nav-item"><a href="#" class="text-muted">Edit Media</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card border border-light shadow-sm bg-white">
      <div class="card-header bg-white border-bottom">
        <div class="row">
          <div class="col-lg-4">
            <h5 class="card-title mb-0 text-dark">Edit Media Upload</h5>
          </div>
        </div>
      </div>

      <div class="card-body">
        <form action="{{ route('admin.media.upload.update', $media->id) }}" method="POST" enctype="multipart/form-data">
          @csrf @method('PUT')
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
            <label class="text-dark">Page</label>
            <input type="text" name="page" class="form-control border rounded bg-light" value="{{ $media->page }}" required>
          </div>

          <div class="form-group">
            <label class="text-dark">Section</label>
            <input type="text" name="section" class="form-control border rounded bg-light" value="{{ $media->section }}" required>
          </div>

          <div class="form-group">
            <label class="text-dark">Media Type</label>
            <select name="media_type" class="form-control border rounded bg-light" required>
              <option value="image" {{ $media->media_type == 'image' ? 'selected' : '' }}>Image</option>
              <option value="video" {{ $media->media_type == 'video' ? 'selected' : '' }}>Video</option>
            </select>
          </div>

          <div class="form-group">
            <label class="text-dark">Current Media</label><br>
            @if($media->media_type == 'image')
              <img src="{{ asset( $media->file_path) }}" width="150" class="rounded shadow-sm">
            @else
              <video width="150" controls class="rounded shadow-sm">
                <source src="{{ asset( $media->file_path) }}">
              </video>
            @endif
          </div>

          <div class="form-group">
            <label class="text-dark">Replace Media</label>
            <input type="file" name="media_file" class="form-control border rounded bg-light">
          </div>

          <div class="mt-3 text-right">
            <button type="submit" class="btn btn-outline-success btn-sm"><i class="fas fa-save"></i> Update</button>
            <a href="{{ route('admin.media.upload.index') }}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
