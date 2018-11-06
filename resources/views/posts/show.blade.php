@extends('layouts.app')
@include('inc.url')

@include('resources.backgrounds')

<?php 
    $header = [
        'style' => 'background-image:url(/storage/cover_images/' . $post->cover_image  . ')',
        'class' => 'header-single-post',
        'title' => $post->title,
        'color' => 'white'
    ];

    $nav = [
        'color' => '#282828',
        'class' => ''
    ];
?>

@section('content')
<div class="container">
<div id="single-post">
        <div id="single-post-container">
            <div class="blog-single-container">
                             <div class="blog-single-post">
                                 
                                 <div class="blog-single-content">
                                     <div class="blog-single-text">
                                            <h2 class="blog-single-heading">
                                                    {{$post->title}}
                                                </h2>
                                       {!! $post->body !!}
                                     </div>
                                     <div class="blog-single-image" style="background-image: url(/storage/cover_images/{{$post->cover_image}})"></div>
                                 </div>
                                 <div class="blog-single-information">
                                     <span class="blog-single-author">
                                         {{$post->author}}
                                     </span>
                                     <span class="blog-single-link">
                                        <a href="/blogg">Fler Blogginlägg</a>
                                     </span>
                                     <span class="blog-single-date">
                                         {{$post->created_at}}
                                     </span>
                                 </div>
                             </div>
            </div>
        </div>
    </div>
        
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <div class="edit-post">
                <a href="{{URL::$url }}blog/{{$post->id}}/edit" class="btn btn-default">Redigera</a>
                    <form >
                        <input type="button" class="delete-post-button btn btn-link pull-right" value="radera">
                    </form>
            </div>
        @endif
    @endif

    @include('inc.full_footer_page')
    <div id="darken-screen"></div>
    <div id="delete-confirmation-box">
            <p>Bekräfta radering av blogginlägg</p>
            <div style="display: flex;flex-direction:row;justify-content:center">
                <button class="close-confirmation-box">Avbryt</button>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' =>
            'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Radera', ['class' => 'delete-post-button btn btn-link'])}}
            {!!Form::close()!!}
        </div>

    </div>
@endsection 
