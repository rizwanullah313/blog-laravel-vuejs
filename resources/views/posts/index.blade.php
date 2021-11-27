@extends('layouts.app')

@section('content')
    <h1><?php  ?></h1>
    <p>Home Page</p>
    @if(count($posts)>0)
         @foreach ($posts as $post)
         <div class="well">
             <div class="row">
                 <div class="col-md-4 col-sm-4">
                   <img style="width: 50%" src="/storage/cover_image/{{$post->cover_image}}" alt="">
                 </div>
                 <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>written on {{$post->created_at}}</small>
                 </div>
             </div>
             <br>

         </div>
             
         @endforeach
         {{$posts->links()}}
    @else
    <p>No Post found</p>
    @endif
@endsection