
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="msapplication-TileColor" content="#0E0E0E">
  <meta name="template-color" content="#0E0E0E">
  <meta name="description" content="Index page">
  <meta name="keywords" content="index, page">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/yc/imgs/template/favicon.svg')}}">
  <link href="{{asset('assets/yc/css/style.css?v=5.0.0')}}" rel="stylesheet">
  <title>Home - Youngchanakya</title>
</head>

<body>
  @include('layouts.header')
  @include('layouts.preload')
  <main class="main">
    <section class="section mt-50">
    <div class="container mt-5">
    <h2>Edit Hero Section</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <form action="{{ route('home.hero.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $hero->title }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $hero->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Image</label><br>
            @if($hero->image_url)
                <img src="{{ $hero->image_url }}" width="200" class="mb-2"><br>
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary p-15">Save</button>
    </form>
</div>
    </section>
 

  </main>
  @include('layouts.footer')
  @include('layouts.script')
</body>

</html>