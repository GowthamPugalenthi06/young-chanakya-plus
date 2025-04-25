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
  <h4 class="page-title text-dark">Home Members</h4>
  <ul class="breadcrumbs bg-light p-2 rounded">
    <li class="nav-home">
      <a href="{{ route('admin.dashboard') }}">
        <i class="flaticon-home text-primary"></i>
      </a>
    </li>
    <li class="separator"><i class="flaticon-right-arrow text-secondary"></i></li>
    <li class="nav-item"><a href="#" class="text-secondary">Home Members</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">

    <div class="card border shadow-sm bg-white">
      <div class="card-header bg-white border-bottom">
        <div class="row">
          <div class="col-lg-6">
            <h5 class="card-title mb-0 text-dark">Home Members</h5>
          </div>
          <div class="col-lg-6 text-right">
            <a href="{{ route('admin.homes.create') }}" class="btn btn-outline-primary btn-sm">
              <i class="fas fa-plus"></i> Add New Member
            </a>
          </div>
        </div>
      </div>

      <div class="card-body">
        @if(count($homes) == 0)
          <h5 class="text-center text-muted">No Home Members Found</h5>
        @else
          <div class="table-responsive">
            <table class="table table-bordered table-hover mt-3 bg-light text-dark">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($homes as $home)
                <tr>
                  <td>{{ $home->id }}</td>
                  <td>{{ $home->name }}</td>
                  <td>{{ $home->description }}</td>
                  <td><img src="{{ asset($home->image) }}" width="100" class="rounded shadow-sm"></td>
                  <td>
                    <a href="{{ route('admin.homes.show', $home->id) }}" class="btn btn-outline-info btn-sm">
                      <i class="fas fa-eye"></i> View
                    </a>
                    <a href="{{ route('admin.homes.edit', $home->id) }}" class="btn btn-outline-warning btn-sm">
                      <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('admin.homes.destroy', $home->id) }}" method="POST" style="display:inline-block;">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')">
                        <i class="fas fa-trash"></i> Delete
                      </button>
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
