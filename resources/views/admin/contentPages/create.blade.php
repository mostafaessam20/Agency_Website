@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.contentPage.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.content-pages.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.contentPage.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contentPage.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title_ar">title_ar</label>
                <input class="form-control {{ $errors->has('title_ar') ? 'is-invalid' : '' }}" type="text" name="title_ar" id="title_ar" value="{{ old('title_ar', '') }}" required>
                @if($errors->has('title_ar'))
                    <span class="text-danger">{{ $errors->first('title_ar') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contentPage.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="keywords">keywords</label>
                <input class="form-control {{ $errors->has('keywords') ? 'is-invalid' : '' }}" type="text" name="keywords" id="keywords" value="{{ old('keywords', '') }}" >
                @if($errors->has('keywords'))
                    <span class="text-danger">{{ $errors->first('keywords') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contentPage.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="categories">{{ trans('cruds.contentPage.fields.category') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('categories') ? 'is-invalid' : '' }}" name="categories[]" id="categories" multiple>
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" {{ in_array($id, old('categories', [])) ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                </select>
                @if($errors->has('categories'))
                    <span class="text-danger">{{ $errors->first('categories') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contentPage.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tags">{{ trans('cruds.contentPage.fields.tag') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('tags') ? 'is-invalid' : '' }}" name="tags[]" id="tags" multiple>
                    @foreach($tags as $id => $tag)
                        <option value="{{ $id }}" {{ in_array($id, old('tags', [])) ? 'selected' : '' }}>{{ $tag }}</option>
                    @endforeach
                </select>
                @if($errors->has('tags'))
                    <span class="text-danger">{{ $errors->first('tags') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contentPage.fields.tag_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="page_text">{{ trans('cruds.contentPage.fields.page_text') }}</label>
                <textarea class="form-control  {{ $errors->has('page_text') ? 'is-invalid' : '' }}" name="page_text" id="page_text">{!! old('page_text') !!}</textarea>
                @if($errors->has('page_text'))
                    <span class="text-danger">{{ $errors->first('page_text') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contentPage.fields.page_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="page_text_ar">page_text_ar</label>
                <textarea class="form-control  {{ $errors->has('page_text_ar') ? 'is-invalid' : '' }}" name="page_text_ar" id="page_text_ar">{!! old('page_text_ar') !!}</textarea>
                @if($errors->has('page_text_ar'))
                    <span class="text-danger">{{ $errors->first('page_text_ar') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contentPage.fields.page_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="excerpt">{{ trans('cruds.contentPage.fields.excerpt') }}</label>
                <textarea class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
                @if($errors->has('excerpt'))
                    <span class="text-danger">{{ $errors->first('excerpt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contentPage.fields.excerpt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="excerpt_ar">excerpt_ar</label>
                <textarea class="form-control {{ $errors->has('excerpt_ar') ? 'is-invalid' : '' }}" name="excerpt_ar" id="excerpt_ar">{{ old('excerpt_ar') }}</textarea>
                @if($errors->has('excerpt_ar'))
                    <span class="text-danger">{{ $errors->first('excerpt_ar') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contentPage.fields.excerpt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="featured_image">{{ trans('cruds.contentPage.fields.featured_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('featured_image'))
                    <span class="text-danger">{{ $errors->first('featured_image') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contentPage.fields.featured_image_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
  var uploadedImageMap = {}
Dropzone.options.imageDropzone = {
  url: '{{ route('admin.content-pages.storeMedia') }}',
  maxFilesize: 5, // MB
  acceptedFiles: '.jpeg,.jpg,.png,.gif',
  addRemoveLinks: true,
  headers: {
    'X-CSRF-TOKEN': "{{ csrf_token() }}"
  },
  params: {
    size: 5,
    width: 4096,
    height: 4096
  },
  success: function (file, response) {
    $('form').append('<input type="hidden" name="featured_image[]" value="' + response.name + '">')
    uploadedImageMap[file.name] = response.name
  },
  removedfile: function (file) {
    console.log(file)
    file.previewElement.remove()
    var name = ''
    if (typeof file.file_name !== 'undefined') {
      name = file.file_name
    } else {
      name = uploadedImageMap[file.name]
    }
    $('form').find('input[name="featured_image[]"][value="' + name + '"]').remove()
  },
  init: function () {
@if(isset($contentPage) && $contentPage->featured_image)
    var files = {!! json_encode($user->image) !!}
        for (var i in files) {
        var file = files[i]
        this.options.addedfile.call(this, file)
        this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
        file.previewElement.classList.add('dz-complete')
        $('form').append('<input type="hidden" name="featured_image[]" value="' + file.file_name + '">')
      }
@endif
  },
   error: function (file, response) {
       if ($.type(response) === 'string') {
           var message = response //dropzone sends it's own error messages in string
       } else {
           var message = response.errors.file
       }
       file.previewElement.classList.add('dz-error')
       _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
       _results = []
       for (_i = 0, _len = _ref.length; _i < _len; _i++) {
           node = _ref[_i]
           _results.push(node.textContent = message)
       }

       return _results
   }
}

</script>
@endsection