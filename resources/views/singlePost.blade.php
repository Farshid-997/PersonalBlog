@extends('layouts.master')

@section('title') Posts @endsection


@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('{{asset('assets/img/post-bg.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->title}}</h1>

            <span class="meta">Posted by
              <a href="#">{{ $post->user->name}}</a>
              on August 24, 2019</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          {!! nl2br( $post->content)!!}
        </div>
      </div>
      <div class="comments">

      <hr>
      <h2>Comments<h2>
      <hr>

      <p>Comments here<br>
      <p><small>Farshid Ahsan</small</p>
      <hr>
       @if(Auth::check())
          <form action="{{route('newComment')}}" method="POST">
            @csrf
            <div class="form-group">
              <textarea class="form-control" placeholder="Comment..." name="comment" id="" cols="30" rows="4"></textarea>
              <input type="hidden" name="post" value="{{$post->id}}">
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Make Comment</button>

            </div>
          </form>
       @endif

      </div>
    </div>
  </article>


@endsection
