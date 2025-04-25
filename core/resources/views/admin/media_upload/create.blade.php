@extends('admin.layout')

@section('content')
    <div class="page-header">
        <h4 class="page-title">Upload Media</h4>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white">
            <h5 class="mb-0">Upload Media</h5>
        </div>

        <div class="card-body bg-light">
            <form action="{{ route('admin.media.upload.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="media_type">Media Type</label>
                    <select name="media_type" id="media_type" class="form-control" required>
                        <option value="">Select Media Type</option>
                        <option value="image">Image</option>
                        <option value="video">Video</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="page">Page</label>
                    <select name="page" id="page" class="form-control" required>
                        <option value="">Select Page</option>
                        @foreach($pages as $page => $sections)
                            <option value="{{ $page }}">{{ ucfirst($page) }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="section">Section</label>
                    <select name="section" id="section" class="form-control" required>
                        <option value="">Select Section</option>
                        <!-- Sections will be populated via JavaScript -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="media_files">Upload Files</label>
                    <input type="file" name="media_files[]" class="form-control" multiple required>
                </div>

                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary">Upload</button>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary ml-2">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const pages = @json($pages);

        document.getElementById('page').addEventListener('change', function () {
            const page = this.value;
            const sections = pages[page] || [];
            const sectionSelect = document.getElementById('section');

            sectionSelect.innerHTML = '<option value="">Select Section</option>';
            sections.forEach(function (section) {
                const option = document.createElement('option');
                option.value = section;
                option.text = section.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
                sectionSelect.appendChild(option);
            });
        });
    </script>
@endsection
