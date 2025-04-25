@extends('admin.layout')

@section('content')
<div class="page-header">
  <h4 class="page-title">Mentor Chanakya</h4>
  <ul class="breadcrumbs">
    <li class="nav-home">
      <a href="{{ route('admin.dashboard') }}">
        <i class="flaticon-home"></i>
      </a>
    </li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Mentors</a></li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><a href="#">Mentor Chanakya</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">

    <div class="card shadow-sm">
      <div class="card-header bg-light">
        <div class="row">
          <div class="col-lg-6">
            <div class="card-title d-inline-block text-dark">Mentor List</div>
          </div>

          <div class="col-lg-6 text-right">
            <a href="{{ route('admin.mentor_chanakya.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add New Mentor</a>
          </div>
        </div>
      </div>

      <div class="card-body bg-white">
        {{-- Filter Dropdown --}}
        <form method="GET" action="{{ route('admin.mentor_chanakya.index') }}" class="mb-4">
          <div class="form-row align-items-center">
            <div class="col-auto">
              <label for="category" class="col-form-label" style="color: black !important;">Filter by Category:</label>
            </div>
            <div class="col-auto">
              <select name="category" class="form-control form-control-sm" style="background-color: white; color: black;border-color:white;" onchange="this.form.submit()">
                <option value="">-- All --</option>
                <option value="CEO and MD" {{ $selectedCategory == 'CEO and MD' ? 'selected' : '' }}>CEO and MD</option>
                <option value="Unicorn Founders" {{ $selectedCategory == 'Unicorn Founders' ? 'selected' : '' }}>Unicorn Founders</option>
                <option value="Executive" {{ $selectedCategory == 'Executive' ? 'selected' : '' }}>Executive</option>
                <option value="Fortune 500's" {{ $selectedCategory == "Fortune 500's" ? 'selected' : '' }}>Fortune 500's</option>
              </select>
            </div>
          </div>
        </form>

        {{-- Data Table --}}
        @if(count($items) == 0)
          <h4 class="text-center text-muted">No mentors found.</h4>
        @else
          <div class="table-responsive">
            <table class="table table-striped table-bordered mt-3">
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
                  <td><img src="{{ asset($item->image) }}" width="80" class="img-thumbnail"></td>
                  <td>
                    <a href="{{ route('admin.mentor_chanakya.show', $item->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                    <a href="{{ route('admin.mentor_chanakya.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                    <form action="{{ route('admin.mentor_chanakya.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
