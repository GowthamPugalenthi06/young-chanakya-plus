@extends('admin.layout')

@php
$selLang = \App\Language::where('code', request()->input('language'))->first();
@endphp
@if(!empty($selLang) && $selLang->rtl == 1)
@section('styles')
<style>
    form:not(.modal-form) input,
    form:not(.modal-form) textarea,
    form:not(.modal-form) select,
    select[name='language'] {
        direction: rtl;
    }
    form:not(.modal-form) .note-editor.note-frame .note-editing-area .note-editable {
        direction: rtl;
        text-align: right;
    }
</style>
@endsection
@endif

@section('content')
<div class="page-header">
   <h4 class="page-title">podcasts</h4>
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
         <a href="#">podcast Page</a>
      </li>
      <li class="separator">
         <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
         <a href="#">podcasts</a>
      </li>
   </ul>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">
            <div class="row">
               <div class="col-lg-4">
                  <div class="card-title d-inline-block">Podcasts</div>
               </div>
               <div class="col-lg-3">
                  @if (!empty($langs))
                  <select name="language" class="form-control" onchange="window.location='{{url()->current() . '?language='}}'+this.value">
                     <option value="" selected disabled>Select a Language</option>
                     @foreach ($langs as $lang)
                     <option value="{{$lang->code}}" {{$lang->code == request()->input('language') ? 'selected' : ''}}>{{$lang->name}}</option>
                     @endforeach
                  </select>
                  @endif
               </div>

               <div class="col-lg-4 offset-lg-1 mt-2 mt-lg-0">
                  <a href="#" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus" style="color: white !important;"></i> Add podcast</a>
                  <button class="btn btn-danger float-right btn-sm mr-2 d-none bulk-delete" data-href="{{route('admin.podcast.bulk.delete')}}"><i class="flaticon-interface-5"></i> Delete</button>
               </div>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-lg-12">

                  @if (count($podcasts) == 0)
                  <h3 class="text-center">NO podcast FOUND</h3>
                  @else
                  <div class="table-responsive">
                     <table class="table table-striped mt-3" id="basic-datatables">
                        <thead>
                           <tr>
                              <th scope="col">
                                 <input type="checkbox" class="bulk-check" data-val="all">
                              </th>
                              <th scope="col">Image</th>
                              <th scope="col">Category</th>
                              <th scope="col">Title</th>
                              <th scope="col">podcast Date</th>
                              <th scope="col">podcast Duration</th>
                              <th scope="col">Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($podcasts as $key => $podcast)
                           <tr>
                              <td>
                                 <input type="checkbox" class="bulk-check" data-val="{{$podcast->id}}">
                              </td>
                              @php
                                $images = json_decode($podcast->image, true);
                              @endphp
                              <td><img src="{{(!empty($images)) ? asset('/assets/front/img/podcasts/sliders/'.$images[0]) : ''}}" alt="" width="80"></td>
                              <td>{{ !empty(convertUtf8($podcast->podcastCategories)) ? convertUtf8($podcast->podcastCategories->name) : '' }}</td>
                              <td>{{convertUtf8(strlen($podcast->title)) > 30 ? convertUtf8(substr($podcast->title, 0, 30)) . '...' : convertUtf8($podcast->title)}}</td>
                              <td>
                                 @php
                                 $date = \Carbon\Carbon::parse($podcast->date);
                                 @endphp
                                 {{$date->translatedFormat('jS F, Y')}}
                              </td>
                              <td>
                                 <a class="btn btn-secondary btn-sm" href="{{route('admin.podcast.edit', $podcast->id) . '?language=' . request()->input('language')}}">
                                 <span class="btn-label">
                                 <i class="fas fa-edit"></i>
                                 </span>
                                 Edit
                                 </a>
                                 <form class="deleteform d-inline-block" action="{{route('admin.podcast.delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="podcast_id" value="{{$podcast->id}}">
                                    <button type="submit" class="btn btn-danger btn-sm deletebtn">
                                    <span class="btn-label">
                                    <i class="fas fa-trash"></i>
                                    </span>
                                    Delete
                                    </button>
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
   </div>
</div>
<!-- Create Blog Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add podcast</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">

            <form id="ajaxForm" class="modal-form" action="{{route('admin.podcast.store')}}" method="POST">
               @csrf
                {{-- START: slider Part --}}
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Slider Images ** </label>
                            <br>
                            <div class="slider-thumbs" id="sliderThumbs1">

                            </div>

                            <input id="fileInput1" type="hidden" name="slider" value="" />
                            <button id="chooseImage1" class="choose-image btn btn-primary" type="button" data-multiple="true" data-toggle="modal" data-target="#lfmModal1">Choose Images</button>


                            <p class="text-warning mb-0">JPG, PNG, JPEG images are allowed</p>
                            <p id="errslider" class="mb-0 text-danger em"></p>


                        </div>
                    </div>
                </div>
                {{-- END: slider Part --}}
               <div class="form-group">
                  <label for="">Language **</label>
                  <select id="language" name="lang_id" class="form-control" required>
                     <option value="" selected disabled>Select a language</option>
                     @foreach ($langs as $lang)
                     <option value="{{$lang->id}}">{{$lang->name}}</option>
                     @endforeach
                  </select>
                  <p id="errlang_id" class="mb-0 text-danger em"></p>
               </div>
               <div class="form-group">
                  <label for="">Category **</label>
                  <select id="bcategory" class="form-control" name="cat_id" disabled required>
                     <option value="" selected disabled>Select a category</option>
                  </select>
                  <p id="errcat_id" class="mb-0 text-danger em"></p>
               </div>

               <div class="form-group">
                  <label for="">Title **</label>
                  <input type="text" class="form-control ltr" name="title" value="" placeholder="Enter podcast Title" required>
                  <p id="errcontent" class="mb-0 text-danger em"></p>
               </div>
               <div class="form-group">
                  <label for="">Author **</label>
                  <input type="text" class="form-control ltr" name="author" value="" placeholder="Enter author name" required>
                  <p id="errauthor" class="mb-0 text-danger em"></p>
               </div>
                <div class="form-group">
                    <label for="">Date **</label>
                    <input type="date" class="form-control ltr" name="date" value="" placeholder="Enter podcast Date" required>
                    <p id="errdate" class="mb-0 text-danger em"></p>
                </div>
                <div class="form-group">
                    <label for="">Duration **</label>
                    <input type="time" class="form-control ltr" name="time" value="" placeholder="Enter podcast Time" required>
                    <p id="errtime" class="mb-0 text-danger em"></p>
                </div>
                <div class="form-group">
                    <label for="">Audio **</label>
                    <input type="file" class="form-control ltr" name="audio" value="" placeholder="Upload audio"accept="audio/mp3,audio/wav,audio/ogg" required>
                    <p id="erraudio" class="mb-0 text-danger em"></p>
                </div>
               <div class="form-group">
                  <label for="">Meta Keywords</label>
                  <input type="text" class="form-control" name="meta_tags" value="" data-role="tagsinput">
               </div>
               <div class="form-group">
                  <label for="">Meta Description</label>
                  <textarea type="text" class="form-control" name="meta_description" rows="5"></textarea>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button id="submitBtn" type="button" class="btn btn-primary">Submit</button>
         </div>
      </div>
   </div>
</div>

<!-- slider LFM Modal -->
<div class="modal fade lfm-modal" id="lfmModal1" tabindex="-1" role="dialog" aria-labelledby="lfmModalTitle" aria-hidden="true">
    <i class="fas fa-times-circle"></i>
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <iframe id="lfmIframe1" src="{{url('laravel-filemanager')}}?serial=1" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
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
