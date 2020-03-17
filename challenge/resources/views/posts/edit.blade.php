@extends('layouts.app')

@section('content')
    <h1>Edit Quote</h1>
    {!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST', 'enctype' => 'multipart/data']) !!}
        <div class="form-group">
            {{Form::label('title', 'TV Show: ')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'TV Show'])}}
        </div>
        <div class="form-group">
            {{Form::label('season', 'Season: ')}}
            {{Form::number('season', $post->season, ['id' => 'form-control', 'class' => 'form-control', 'placeholder' => 'Season'])}}
        </div>
        <div class="form-group">
            {{Form::label('episode', 'Episode: ')}}
            {{Form::number('episode', $post->episode, ['class' => 'form-control', 'placeholder' => 'Episode'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Quote: ')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Quote'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::file('cover_image')}}
        </div> --}}
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection