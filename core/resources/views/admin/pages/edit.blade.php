@extends('admin.layout')

@section('content')
    <div class="page-header">
        <h4 class="page-title">Edit Page</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="#">Pages</a></li>
            <li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="#">Edit Page</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-lg-12">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Edit Page - {{ $page->title }}</h5>
                </div>

                <div class="card-body bg-light">
                    <form action="{{ route('admin.page.update', $page->id) }}" method="POST">
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
                            <label for="title">Page Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $page->title }}"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="content">Page Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5"
                                required>{{ $page->content }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="1" {{ $page->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $page->status == 0 ? 'selected' : '' }}>Deactive</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="serial_number">Serial Number</label>
                            <input type="number" class="form-control" id="serial_number" name="serial_number"
                                value="{{ $page->serial_number }}">
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Update Page</button>
                            <a href="{{ route('admin.page.index') }}" class="btn btn-outline-secondary ml-2">Back</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection