@extends('admin.layout')

@section('content')
<h1>{{ $item->name }}</h1>
<p><strong>Category:</strong> {{ $item->category }}</p>
<p><strong>Description:</strong><br>{{ $item->description }}</p>
@if($item->image)
<img src="{{ asset($item->image) }}" width="200">
@endif
@endsection
