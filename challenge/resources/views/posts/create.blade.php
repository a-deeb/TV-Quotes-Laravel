@extends('layouts.app')

@section('content')
    <h1>Add a Movie Quote !</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'TV Show')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'TV Show'])}}
        </div>
        <div class="form-group">
            {{Form::label('season', 'Season')}}
            {{Form::number('season', '', ['class' => 'form-control', 'placeholder' => 'Season'])}}
        </div>
        <div class="form-group">
            {{Form::label('episode', 'episode')}}
            {{Form::number('episode', '', ['class' => 'form-control', 'placeholder' => 'Episode'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Quote')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Quote'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::file('cover_image')}}
        </div> --}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection