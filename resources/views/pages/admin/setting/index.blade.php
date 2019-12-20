@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Setting</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('admin.setting.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Site Name</label>
                            <input id="title" name="title" type="text" required="required"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title', $setting->title ?? '') }}" autocomplete="title" autofocus>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tagline">Tagline</label>
                            <input id="tagline" name="tagline" type="text" required="required"
                                class="form-control @error('tagline') is-invalid @enderror"
                                value="{{ old('tagline', $setting->tagline ?? '') }}" autocomplete="tagline">
                            @error('tagline')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="site_url">Site URL</label>
                            <input id="site_url" name="site_url" type="text" required="required"
                                class="form-control @error('site_url') is-invalid @enderror"
                                value="{{ old('site_url', $setting->site_url ?? '') }}" autocomplete="site_url">
                            @error('site_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" cols="40" rows="5"
                                class="form-control @error('description') is-invalid @enderror">{{ old('description', $setting->description ?? '') }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button name="" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
