@extends('layouts.master')

@section('title','Blog')

@section('banner_title','Clean Blog')
@section('banner_text','Its a very good Blog')
@push('banner_image_url','img/home-bg.jpg')


@section('body_post')
  <div class="post-preview">
    <a href="post.html">
      <h2 class="post-title">
        Failure is not an option
      </h2>
      <h3 class="post-subtitle">
        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
      </h3>
    </a>
    <p class="post-meta">Posted by
      <a href="#">Start Bootstrap</a>
      on July 8, 2019</p>
  </div>
  <hr>
@endsection

