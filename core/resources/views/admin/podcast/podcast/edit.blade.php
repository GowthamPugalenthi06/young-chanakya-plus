@extends('admin.layout')

@if(!empty($podcast->language) && $podcast->language->rtl == 1)
@section('styles')
<style>
    form input,
    form textarea,
    form select {
        direction: rtl;
    }
    form .note-editor.note-frame .note-editing-area .note-editable {
        direction: rtl;
        text-align: right;
    }
</style>
@endsection
@endif

@section('content')
  <div class="page-header">
    <h4 class="page-title">Edit Podcast</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="{{route('admin.dashboard')}}">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Podcast Page</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Edit Podcast</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title d-inline-block">Edit podcast</div>
          <a class="btn btn-info btn-sm float-right d-inline-block" href="{{route('admin.podcast.index') . '?language=' . request()->input('language')}}">
            <span class="btn-label">
              <i class="fas fa-backward" style="font-size: 12px;"></i>
            </span>
            Back
          </a>
        </div>
        <div class="card-body pt-5 pb-5">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
                {{-- Slider images upload start --}}
                {{-- <div class="px-2">
                    <label for="" class="mb-2"><strong>Slider Images **</strong></label>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped" id="imgtable">
                                @if (!is_null($podcast->image))
                                    @foreach(json_decode($podcast->image) as $key => $img)
                                        <tr class="trdb" id="trdb{{$key}}">
                                            <td>
                                                <div class="thumbnail">
                                                    <img style="width:150px;" src="{{asset('assets/front/img/podcasts/sliders/'.$img)}}" alt="Ad Image">
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger pull-right rmvbtndb" onclick="rmvdbimg({{$key}},{{$podcast->id}})">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                    <form action="" id="my-dropzone" enctype="multipart/formdata" class="dropzone create">
                        @csrf
                        <div class="fallback">
                        </div>
                    </form>
                    <p class="em text-danger mb-0" id="errimage"></p>
                </div> --}}
                {{-- Slider images upload end --}}
                
              <form id="ajaxForm" class="" action="{{route('admin.podcast.update')}}" method="post">
                @csrf
                <input type="hidden" name="podcast_id" value="{{$podcast->id}}">
                <input type="hidden" name="lang_id" value="{{$podcast->lang_id}}">
                {{-- Video Part --}}
                {{-- START: slider Part --}}

                {{-- START: slider Part --}}
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Slider Images ** </label>
                            <br>
                            <div class="slider-thumbs" id="sliderThumbs2">

                            </div>

                            <input id="fileInput2" type="hidden" name="slider" value="" />
                            <button id="chooseImage2" class="choose-image btn btn-primary" type="button" data-multiple="true" data-toggle="modal" data-target="#lfmModal2">Choose Images</button>


                            <p class="text-warning mb-0">JPG, PNG, JPEG images are allowed</p>
                            <p id="errslider" class="mb-0 text-danger em"></p>

                            <!-- slider LFM Modal -->
                            <div class="modal fade lfm-modal" id="lfmModal2" tabindex="-1" role="dialog" aria-labelledby="lfmModalTitle" aria-hidden="true">
                                <i class="fas fa-times-circle"></i>
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <iframe id="lfmIframe2" src="{{url('laravel-filemanager')}}?serial=2&podcast={{$podcast->id}}" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END: slider Part --}}

                <div class="form-group">
                  <label for="">Title **</label>
                  <input type="text" class="form-control" name="title" value="{{$podcast->title}}" placeholder="Enter title">
                  <p id="errtitle" class="mb-0 text-danger em"></p>
                </div>
                <div class="form-group">
                  <label for="">Category **</label>
                  <select class="form-control" name="cat_id">
                    <option value="" selected disabled>Select a category</option>
                    @foreach ($podcast_categories as $key => $podcast_category)
                      <option value="{{$podcast_category->id}}" {{$podcast_category->id == $podcast->podcastCategories->id ? 'selected' : ''}}>{{$podcast_category->name}}</option>
                    @endforeach
                  </select>
                  <p id="errcat_id" class="mb-0 text-danger em"></p>
                </div>
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" class="form-control ltr" name="title" value="{{$podcast->title}}" placeholder="Enter podcast title">
                  <p id="errcontent" class="mb-0 text-danger em"></p>
                </div>
                <div class="form-group">
                  <label for="">Author</label>
                  <input type="text" class="form-control ltr" name="author" value="{{$podcast->author}}" placeholder="Enter author name">
                  <p id="errauhtor" class="mb-0 text-danger em"></p>
                </div>
                  <div class="form-group">
                      <label for="">Date</label>
                      <input type="date" class="form-control ltr" name="date" value="{{$podcast->date}}" placeholder="Enter podcast Date">
                      <p id="errdate" class="mb-0 text-danger em"></p>
                  </div>
                  <div class="form-group">
                      <label for="">Audio</label>
                      <input type="file" class="form-control ltr" name="audio" value="{{$podcast->audio}}" placeholder="upload audio">
                      <p id="erraudio" class="mb-0 text-danger em"accept="audio/mp3,audio/wav,audio/ogg"></p>
                  </div>
                  <div class="form-group">
                      <label for="">Duration</label>
                      <input type="time" class="form-control ltr" name="time" value="{{\Carbon\Carbon::parse($podcast->time)->format('H:i:s')}}" placeholder="Enter podcast Time">
                      <p id="errtime" class="mb-0 text-danger em"></p>
                  </div>
                <div class="form-group">
                  <label for="">Meta Keywords</label>
                  <input type="text" class="form-control" name="meta_tags" value="{{$podcast->meta_tags}}" data-role="tagsinput">
                  <p id="errmeta_keywords" class="mb-0 text-danger em"></p>
                </div>
                <div class="form-group">
                  <label for="">Meta Description</label>
                  <textarea type="text" class="form-control" name="meta_description" rows="5">{{$podcast->meta_description}}</textarea>
                  <p id="errmeta_description" class="mb-0 text-danger em"></p>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="form">
            <div class="form-group from-show-notify row">
              <div class="col-12 text-center">
                <button type="submit" id="submitBtn" class="btn btn-success">Update</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $("select[name='lang_id']").on('change', function() {
                $("#bcategory").removeAttr('disabled');
                let langid = $(this).val();
                let url = "{{url('/')}}/admin/podcast/" + langid + "/get-categories";
                $.get(url, function(data) {
                    console.log(data);
                    let options = `<option value="" disabled selected>Select a category</option>`;
                    for (let i = 0; i < data.length; i++) {
                        options += `<option value="${data[i].id}">${data[i].name}</option>`;
                    }
                    $("#bcategory").html(options);

                });
            });

            // make input fields RTL
            $("select[name='lang_id']").on('change', function() {
                $(".request-loader").addClass("show");
                let url = "{{url('/')}}/admin/rtlcheck/" + $(this).val();
                $.get(url, function(data) {
                    $(".request-loader").removeClass("show");
                    if (data == 1) {
                        $("form input").each(function() {
                            if (!$(this).hasClass('ltr')) {
                                $(this).addClass('rtl');
                            }
                        });
                        $("form select").each(function() {
                            if (!$(this).hasClass('ltr')) {
                                $(this).addClass('rtl');
                            }
                        });
                        $("form textarea").each(function() {
                            if (!$(this).hasClass('ltr')) {
                                $(this).addClass('rtl');
                            }
                        });
                        $("form .summernote").each(function() {
                            $(this).siblings('.note-editor').find('.note-editable').addClass('rtl text-right');
                        });

                    } else {
                        $("form input, form select, form textarea").removeClass('rtl');
                        $("form.modal-form .summernote").siblings('.note-editor').find('.note-editable').removeClass('rtl text-right');
                    }
                })
            });

            // translatable portfolios will be available if the selected language is not 'Default'
            $("#language").on('change', function() {
                let language = $(this).val();
                if (language == 0) {
                    $("#translatable").attr('disabled', true);
                } else {
                    $("#translatable").removeAttr('disabled');
                }
            });

        });
    </script>
@endsection
