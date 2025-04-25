@extends('admin.layout')

@section('content')
  <div class="page-header">
    <h4 class="page-title">Edit Mentor - Mentor Team</h4>
    <ul class="breadcrumbs">
    <li class="nav-home">
      <a href="{{ route('admin.dashboard') }}">
      <i class="flaticon-home"></i>
      </a>
    </li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Mentor Team</a></li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Edit Mentor</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="col-md-12">

    <div class="card">
      <div class="card-header bg-white">
      <div class="card-title text-black-50">Edit Mentor Details</div>
      </div>

      <div class="card-body bg-white">
      <form action="{{ route('admin.mentor_team.update', $item->id) }}" method="POST" enctype="multipart/form-data">
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
        <label>Name <span class="text-danger">*</span></label>
        <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
        </div>

        <div class="form-group">
        <label>Category <span class="text-danger">*</span></label>
        <select name="category" class="form-control" required>
          <option value="Mentor Team" {{ $item->category == 'Mentor Team' ? 'selected' : '' }}>Mentor Team</option>
          <option value="Advisory Team" {{ $item->category == 'Advisory Team' ? 'selected' : '' }}>Advisory Team
          </option>
          <option value="Academic Team" {{ $item->category == 'Academic Team' ? 'selected' : '' }}>Academic Team
          </option>
          <option value="VC Team" {{ $item->category == "VC Team" ? 'selected' : '' }}>VC Team</option>
          <option value="Management Team" {{ $item->category == "Management Team" ? 'selected' : '' }}>Management Team
          </option>
        </select>
        </div>

        <div class="form-group">
        <label>Description <span class="text-danger">*</span></label>
        <textarea name="description" class="form-control" rows="4" required>{{ $item->description }}</textarea>
        </div>

        <div class="form-group">
        <label>Image <span class="text-danger">*</span></label>
        <input type="file" name="image" class="form-control-file">
        <div class="mt-2">
          <img src="{{ asset($item->image) }}" width="100" class="img-thumbnail">
        </div>
        </div>
        <div class="form-group">
        <label>LinkedIn</label>
        <input type="url" name="linkedin" class="form-control" value="{{ $item->linkedin }}"
          placeholder="https://linkedin.com/in/username">
        </div>

        <div class="form-group">
        <label>Facebook</label>
        <input type="url" name="facebook" class="form-control" value="{{ $item->facebook }}"
          placeholder="https://facebook.com/username">
        </div>

        <div class="form-group">
        <label>Twitter</label>
        <input type="url" name="twitter" class="form-control" value="{{ $item->twitter }}"
          placeholder="https://twitter.com/username">
        </div>


        <div class="form-group text-right">
        <button type="submit" class="btn" style="background-color:#202940;color:white;"><i class="fas fa-save"></i> Update Mentor</button>
        </div>
      </form>
      </div>
    </div>

    </div>
  </div>
@endsection