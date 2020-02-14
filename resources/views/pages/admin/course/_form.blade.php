<div class="form-group">
    {!! Form::label('slug', 'Slug') !!} {!! Form::text('slug', null, ['id' => 'slug', 'class' => $errors->first('slug') ? 'form-control is-invalid' : 'form-control',
    'required' => 'required ']) !!}

    @error('slug')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['onkeyup' => 'createslug()', 'id' => 'title', 'class' => $errors->first('title') ? 'form-control is-invalid' : 'form-control', 'required' => 'required', 'autofocus' => 'autofocus']) !!}

    @error('title')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['rows' => 3, 'id' => 'description', 'class' => $errors->first('description') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}

    @error('description')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('runtime', 'Runtime') !!}
    {!! Form::text('runtime', null, ['id' => 'title', 'class' => $errors->first('runtime') ? 'form-control is-invalid' : 'form-control', 'placeholder' => '00:00:00']) !!}

    @error('runtime')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('price', 'Price') !!}
    {!! Form::number('price', null, ['id' => 'price', 'class' => $errors->first('price') ? 'form-control is-invalid' : 'form-control', 'required' => 'required', 'placeholder' => 'insert 0 for free']) !!}

    @error('price')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('skill_id', 'Skill') !!}
    {!! Form::select('skill_id', \App\Models\Skill::pluck('title', 'id'), null, ['id' => 'skill_id', 'class' => $errors->first('skill_id') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('skill_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('subject', 'Subject') !!}
    <select class="select2 form-control" name="subjects[]" multiple>
        @if (!empty($course->subjects))
            @foreach ($course->subjects as $row)
                <option value="{{ $row->id }}" selected>{{ $row->title }}</option>
            @endforeach
        @endif
    </select>
    @error('subject')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('is_pro', 'Is Pro?') !!}
    <br>
    <div class="form-check form-check-inline">
        {!! Form::radio('is_pro', 1, true) !!}
        <label class="form-check-label" for="is_pro1">True</label>
    </div>
    <div class="form-check form-check-inline">
        {!! Form::radio('is_pro', 0) !!}
        <label class="form-check-label" for="is_pro2">False</label>
    </div>
    @error('is_pro')
    <span class="text-danger" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('is_featured', 'Is Featured?') !!}
    <br>
    <div class="form-check form-check-inline">
        {!! Form::radio('is_featured', 1, true) !!}
        <label class="form-check-label" for="is_featured">True</label>
    </div>
    <div class="form-check form-check-inline">
        {!! Form::radio('is_featured', 0) !!}
        <label class="form-check-label" for="is_featured">False</label>
    </div>
    @error('is_featured')
    <span class="text-danger" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('status', 'Status') !!}
    {!! Form::select('status', ['draft' => 'Draft', 'published' => 'Published', 'archived' => 'Archived'], null, ['id' => 'status', 'class' => $errors->first('status') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('status')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('image', 'Image') !!}

    <div class="input-group">
        <span class="input-group-btn">
          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
            <i class="fa fa-picture-o"></i> Choose
          </a>
        </span>
        {!! Form::text('image', null, ['id' => 'thumbnail', 'class' => $errors->first('image') ? 'form-control is-invalid' : 'form-control',
        'required' => 'required ']) !!}
    </div>

    <img id="holder" style="margin-top:15px;max-height:100px;">

    @error('image')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('meta_description', 'Meta Description') !!}
    {!! Form::textarea('meta_description', null, ['rows' => 3, 'id' => 'meta_description', 'class' => $errors->first('meta_description') ? 'form-control is-invalid' : 'form-control']) !!}

    @error('meta_description')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('meta_keyword', 'Meta Keyword') !!}
    {!! Form::textarea('meta_keyword', null, ['rows' => 1, 'id' => 'meta_keyword', 'class' => $errors->first('meta_keyword') ? 'form-control is-invalid' : 'form-control']) !!}

    @error('meta_keyword')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<button class="btn btn-primary" type="submit">Submit</button>

@push('script')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
    <script type="text/javascript">
        function createslug()
        {
            var judul = $('#title').val();
            $('#slug').val(slugify(judul));
        }

        function slugify(text)
        {
            return text.toString().toLowerCase()
                    .replace(/\s+/g, '-')           // Replace spaces with -
                    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                    .replace(/^-+/, '')             // Trim - from start of text
                    .replace(/-+$/, '');            // Trim - from end of text
        }
        $( ".select2" ).select2({
            ajax: {
                url: "/admin/service/select/subject",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        query: params.term
                    };
                },
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                text: item.title,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            },
            theme: 'bootstrap',
            multiple: true,
            allowClear: true,
            placeholder: 'Type for search subjects',
            minimumInputLength: 2,
        });
    </script>
@endpush
