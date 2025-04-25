@extends('admin.layout')

@section('content')
    <div class="page-header">
        <h4 class="page-title">Create New Page</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="#">Pages</a></li>
            <li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="#">Create Page</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card">
                <div class="card-header bg-white">
                    <div class="card-title text-black-50">Add New Page</div>
                </div>

                <div class="card-body bg-white">
                    <form method="POST" action="{{ route('admin.page.store') }}">
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
                            <label for="title" >Page Title</label>
                            <input type="text" style="background-color:white;color:black" class="form-control" name="title" required>
                        </div>

                        <div class="form-group">
                            <label for="content">Page Content</label>
                            <textarea id="editor" name="content" style="color:black"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Save Page</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- CKEditor 5 Classic CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection