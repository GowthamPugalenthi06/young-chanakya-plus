@extends('admin.layout')

@section('content')
  <div class="page-header">
    <h4 class="page-title">Add Mentor - Mentor Team</h4>
    <ul class="breadcrumbs">
    <li class="nav-home">
      <a href="{{ route('admin.dashboard') }}">
      <i class="flaticon-home"></i>
      </a>
    </li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Mentor Team</a></li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Add Mentor</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="col-md-12">

    <div class="card">
      <div class="card-header bg-white">
      <div class="card-title text-black-50">Add New Mentor</div>
      </div>

      <div class="card-body bg-white">
      <form action="{{ route('admin.mentor_team.store') }}" method="POST" enctype="multipart/form-data">
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
        <label>Name <span class="text-danger">*</span></label>
        <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
        <label>Category <span class="text-danger">*</span></label>
        <select name="category" class="form-control" required>
          <option value="Mentor Team">Mentor Team</option>
          <option value="Advisory Team">Advisory Team</option>
          <option value="Academic Team">Academic Team</option>
          <option value="VC Team">VC Team</option>
          <option value="Management Team">Management Team</option>
        </select>
        </div>

        <div class="form-group">
        <label>Description <span class="text-danger">*</span></label>
        <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
        <label>Image <span class="text-danger">*</span></label>
        <input type="file" name="image" class="form-control-file" required>
        </div>
        <div class="form-group">
        <label>LinkedIn</label>
        <input type="url" name="linkedin" class="form-control" placeholder="https://linkedin.com/in/username">
        </div>

        <div class="form-group">
        <label>Facebook</label>
        <input type="url" name="facebook" class="form-control" placeholder="https://facebook.com/username">
        </div>

        <div class="form-group">
        <label>Twitter</label>
        <input type="url" name="twitter" class="form-control" placeholder="https://twitter.com/username">
        </div>


        <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add Mentor</button>
        </div>
      </form>
      </div>
    </div>

    </div>
  </div>
@endsection