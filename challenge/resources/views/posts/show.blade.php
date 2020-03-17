@extends('layouts.app')
@section('content')
    <a href="." class="btn btn-default">Go Back</a>
    {{-- <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"> --}}
    <hr>
    <div class="list-group" style="max-width: 150rem;">
        <button type="button" class="list-group-item list-group-item-action active"><b>Quote: </b>{{$post->body}} </button>
        <button type="button" class="list-group-item list-group-item-action"><b>TV Show: </b>{{$post->title}}</button>
        <button type="button" class="list-group-item list-group-item-action"><b>Season: </b> {{$post->season}}</button>
        <button type="button" class="list-group-item list-group-item-action"><b>Episode: </b> {{$post->episode}}</button>
        <button type="button" class="list-group-item list-group-item-action" disabled> <small>Written on {{$post->created_at}} </small></button>
      </div>
      <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-default">Edit</a>
         {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'POST','class' => 'pull-right'])!!}
         {{Form::hidden('_method', 'DELETE')}}
         {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
         {!!Form::close()!!} 
@endsection