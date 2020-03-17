@extends('layouts.app')
@section('content')
        <h1> Back End Developer Challenge 2020</h1>
        <p> Welcome to the Wise Publishing Back End Developer Challenge! </P>    
            <div class="panel-body">
             <a  href="{{ url('posts') }}" class="btn btn-primary">Part 1 - Quotes from favourite TV show </a>
             </div>
             <div class="panel-body">
             <a  href="{{ url('about') }}" class="btn btn-primary">Part 2 - Average prices for food items by state</a>
            </div>
 @endsection