@extends('layouts.app')
@section('content')
<h1>Legendary TV Show Quotes</h1>

<a href="{{route('posts.create')}}"  class="btn btn-primary" > &plus; Add New Quote </a>
<hr>
    @if(count($posts) > 0)
        @foreach($posts as $post)

            <div class="list-group" style="max-width: 150rem;">
                <button type="button" class="list-group-item list-group-item-action" >
                <h3><a href="posts/{{$post->id}}"><b>Quote: </b>{{$post->body}}</a></h3> </button>
                <button type="button" class="list-group-item list-group-item-action"><b>TV Show: </b>{{$post->title}}</button>
                <button type="button" class="list-group-item list-group-item-action"><b>Season: </b> {{$post->season}}</button>
                <button type="button" class="list-group-item list-group-item-action"><b>Episode: </b> {{$post->episode}}</button>
                <button type="button" class="list-group-item list-group-item-action" disabled> <small>Written on {{$post->created_at}} </small></button>
              </div>
        @endforeach
        {{$posts->links()}}
    @else
        <br>
        <p>You have not added any Quotes</p>
    @endif
@endsection