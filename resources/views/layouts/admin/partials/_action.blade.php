{!! Form::model($model, ['url' => $delete_url, 'method' => 'DELETE']) !!}
    @if ($show_url)
        <a href="{{ $show_url }}" class="btn btn-info btn-sm text-white">Show</a>
    @endif

    @if ($edit_url)
        <a href="{{ $edit_url }}" class="btn btn-light btn-sm">Edit</a>
    @endif


    @if ($delete_url)
        <button
            type="submit"
            class="btn btn-danger btn-sm"
            onclick="return confirm('Are you sure want to delete this data ?')"
        >Delete</button>
    @endif
{!! Form::close() !!}
