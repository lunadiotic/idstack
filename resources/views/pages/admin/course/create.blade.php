@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Form Course
                </div>

                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'admin.course.store', 'class' => '']) !!}
                        @include('pages.admin.course._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
