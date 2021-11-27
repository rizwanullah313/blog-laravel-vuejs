@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                    <div class="panel-body">
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <h3>Your Blog Posts</h3>
                        @if(count($post )>0)

                        <table class="table table-stripped">
                           <tr>
                            <th>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </th>
                           </tr>
                          @foreach ($post as  $posts)
                          <tr>
                              <td>{{$posts->title}}</td>
                              {{-- <td><img src="/storage/cover_image/{{$post->cover_image}}" alt="">
                              </td> --}}
                              <td><a href="/posts/{{$posts->id}}/edit" class="btn btn-danger">Edit</a></td>
                              
                              <td>
                                <form action="/posts/{{$posts->id}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                              </td>
                          </tr>
                              
                          @endforeach
                        </table>
                        @else
                        <p>You have no Post</p>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
