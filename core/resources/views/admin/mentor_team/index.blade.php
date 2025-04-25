@extends('admin.layout')

@section('content')
<div class="page-header">
  <h4 class="page-title">Mentor Team</h4>
  <ul class="breadcrumbs">
    <li class="nav-home">
      <a href="{{ route('admin.dashboard') }}">
        <i class="flaticon-home"></i>
      </a>
    </li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Mentors</a></li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Mentor Team</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">

    <div class="card card-light">
      <div class="card-header bg-light">
        <div class="row">
          <div class="col-lg-6">
            <div class="card-title d-inline-block text-dark">Mentor List</div>
          </div>

          <div class="col-lg-6 text-right">
            <a href="{{ route('admin.mentor_team.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add New Mentor</a>
          </div>
        </div>
      </div>

      <div class="card-body bg-white">
        {{-- Filter Dropdown --}}
        <form method="GET" action="{{ route('admin.mentor_team.index') }}" class="mb-4">
          <div class="form-row align-items-center">
            <div class="col-auto">
              <label for="category" class="col-form-label text-dark"  style="color: black !important;">Filter by Category:</label>
            </div>
            <div class="col-auto">
              <select name="category" class="form-control form-control-sm"  style="background-color: white; color: black;border-color:white;" onchange="this.form.submit()">
                <option value="">-- All --</option>
                <option value="Mentor Team" {{ $selectedCategory == 'Mentor Team' ? 'selected' : '' }}>Mentor Team</option>
                <option value="Advisory Team" {{ $selectedCategory == 'Advisory Team' ? 'selected' : '' }}>Advisory Team</option>
                <option value="Academic Team" {{ $selectedCategory == 'Academic Team' ? 'selected' : '' }}>Academic Team</option>
                <option value="VC Team" {{ $selectedCategory == "VC Team" ? 'selected' : '' }}>VC Team</option>
                <option value="Management Team" {{ $selectedCategory == "Management Team" ? 'selected' : '' }}>Management Team</option>
              </select>
            </div>
          </div>
        </form>

        {{-- Data Table --}}
        @if(count($items) == 0)
          <h4 class="text-center text-dark">No mentors found.</h4>
        @else
          <div class="table-responsive">
            <table class="table table-light table-striped mt-3" >
              <thead class="thead-light">
                <tr>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($items as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->category }}</td>
                  <td><img src="{{ asset($item->image) }}" width="80"></td>
                  <td>
                    <a href="{{ route('admin.mentor_team.show', $item->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                    <a href="{{ route('admin.mentor_team.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                    <form action="{{ route('admin.mentor_team.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
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
<!-- id="basic-datatables -->