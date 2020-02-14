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
    {!! Form::textarea('description', null, ['rows' => 3, 'id' => 'description', 'class' => $errors->first('description') ? 'form-control is-invalid' : 'form-control']) !!}

    @error('description')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<button class="btn btn-primary" type="submit">Submit</button>

@push('script')
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
    </script>
@endpush
