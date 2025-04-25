@extends('admin.layout')

@php
$selLang = \App\Language::where('code', request()->input('language'))->first();
@endphp

@if(!empty($selLang) && $selLang->rtl == 1)
@section('styles')
<style>
  form:not(.modal-form) input,
  form:not(.modal-form) textarea,
  form:not(.modal-form) select,
  select[name='language'] {
    direction: rtl;
  }

  form:not(.modal-form) .note-editor.note-frame .note-editing-area .note-editable {
    direction: rtl;
    text-align: right;
  }
  

</style>
@endsection
@endif

@section('content')
<div class="page-header">
  <h4 class="page-title">Media Uploads</h4>
  <ul class="breadcrumbs">
    <li class="nav-home">
      <a href="{{ route('admin.dashboard') }}">
        <i class="flaticon-home"></i>
      </a>
    </li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Media</a></li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Media Uploads</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-lg-12">

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card border-0 shadow-sm">
      <div class="card-header bg-white">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Media Uploads</h5>
          <a href="{{ route('admin.media.upload.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-upload"></i> Upload New Media
          </a>
        </div>
      </div>

      <div class="card-body bg-white">
        @if(count($media) == 0)
          <h5 class="text-center">No Media Found</h5>
        @else
          <div class="table-responsive">
            <table class="table table-striped mt-3">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Page</th>
                  <th>Section</th>
                  <th>Media Type</th>
                  <th>Preview</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($media as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->page }}</td>
                  <td>{{ $item->section }}</td>
                  <td>{{ ucfirst($item->media_type) }}</td>
                  <td>
                    @if($item->media_type == 'image')
                      <img src="{{ asset($item->file_path) }}" width="100" class="rounded shadow-sm">
                    @else
                      <video width="150" controls class="rounded shadow-sm">
                        <source src="{{ asset($item->file_path) }}">
                      </video>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('admin.media.upload.show', $item->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('admin.media.upload.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.media.upload.destroy', $item->id) }}" method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endif
      </div>
    </div>

  </div>
</div>
@endsection
