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
<div class="page-header bg-white text-dark shadow-sm rounded p-3">
  <h4 class="page-title">Pages List</h4>
  <ul class="breadcrumbs">
    <li class="nav-home">
      <a href="{{ route('admin.dashboard') }}">
        <i class="flaticon-home"></i>
      </a>
    </li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Pages</a></li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Page Lists</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card bg-white text-dark shadow-sm">
      <div class="card-header bg-light border-bottom">
        <div class="row">
          <div class="col-lg-4">
            <h5 class="card-title d-inline-block mb-0" style="color: #495057;">Pages List</h5>
          </div>
          <div class="col-lg-3">
            
          </div>
          <div class="col-lg-5 mt-2 mt-lg-0 text-right">
            <a href="{{ route('admin.page.create') }}" class="btn btn-outline-primary btn-sm">
              <i class="fas fa-plus"></i> Add Page
            </a>
          </div>
        </div>
      </div>

      <div class="card-body">
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (count($pages) == 0)
          <h2 class="text-center text-muted">No Pages Found</h2>
        @else
          <div class="table-responsive">
            <table class="table table-bordered table-hover mt-3">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Created</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pages as $page)
                <tr>
                  <td>{{ $page->id }}</td>
                  <td>{{ $page->title }}</td>
                  <td>{{ $page->created_at->format('Y-m-d') }}</td>
                  <td>
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('admin.page.edit', $page->id) }}">
                      <i class="fas fa-edit"></i> Edit
                    </a>

                    <form action="{{ route('admin.page.destroy', $page->id) }}" method="POST" class="d-inline-block">
                      @csrf
                      @method('DELETE')
                      <button onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-trash"></i> Delete
                      </button>
                    </form>

                    <a href="{{ route('admin.page.show', $page->id) }}" class="btn btn-outline-info btn-sm">
                      <i class="fas fa-eye"></i> View
                    </a>
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
