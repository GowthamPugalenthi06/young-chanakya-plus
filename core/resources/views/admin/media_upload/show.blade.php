@extends('admin.layout')

@section('content')

<div class="page-header">
  <h4 class="page-title text-dark">Media Details</h4>
  <ul class="breadcrumbs bg-light p-2 rounded shadow-sm">
    <li class="nav-home">
      <a href="{{ route('admin.dashboard') }}">
        <i class="flaticon-home text-primary"></i>
      </a>
    </li>
    <li class="separator text-secondary"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item text-dark"><a href="#">Media</a></li>
    <li class="separator text-secondary"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item text-dark"><a href="#">Media Details</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card bg-white shadow-sm border-light">
      <div class="card-header bg-light border-bottom">
        <div class="row">
          <div class="col-lg-4">
            <h5 class="card-title text-dark mb-0">Media Details</h5>
          </div>
        </div>
      </div>

      <div class="card-body">
        <ul class="list-group mb-3">
          <li class="list-group-item bg-light text-dark"><strong>ID:</strong> {{ $media->id }}</li>
          <li class="list-group-item bg-light text-dark"><strong>Page:</strong> {{ $media->page }}</li>
          <li class="list-group-item bg-light text-dark"><strong>Section:</strong> {{ $media->section }}</li>
          <li class="list-group-item bg-light text-dark"><strong>Type:</strong> {{ ucfirst($media->media_type) }}</li>
        </ul>

        <div class="text-center">
          @if($media->media_type == 'image')
            <img src="{{ asset($media->file_path) }}" width="300" class="img-thumbnail shadow-sm">
          @else
            <video width="400" controls class="shadow-sm rounded">
              <source src="{{ asset($media->file_path) }}">
            </video>
          @endif
        </div>

        <div class="mt-4 text-end">
          <a href="{{ route('admin.media.upload.edit', $media->id) }}" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
          <a href="{{ route('admin.media.upload.index') }}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
