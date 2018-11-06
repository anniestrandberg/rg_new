@extends('layouts.app')
@include('inc.url')

@include('resources.backgrounds')

<?php 
    $header = [
        'style' => 'background-image: url(/storage/background_images/GALE.jpg)',
        'class' => 'header-image blog-index-header',
        'title' => 'Blogg',
        'color' => 'white'
    ];

    $nav = [
        'color' => 'white',
        'class' => ''
    ];
?>

@section('content')

<div class="container">
    <div id="blog-page">
        <div id="archive-page">
            <div id="blog-archive">
                <div class="blog-archive-container">
                    @if(count($posts) > 0)

                    @foreach($posts as $post)
                    <div class="blog-archive-post">
                        <a href="{{URL::$url}}blogg/{{$post->id}}">
                            <span class="blog-archive-image" style="background-image: url(storage/cover_images/{{$post->cover_image}})">
                                <span class="blog-archive-author">
                                    <span>
                                        {{$post->author}}
                                    </span>
                                </span>
                            </span>
                        </a>
                        <div class="post-all-content">
                            <a class="blog-archive-link" href="{{URL::$url}}blogg/{{$post->id}}">
                                <h2 class="blog-archive-heading">
                                    {{$post->title}}
                                </h2>
                            </a>
                            <div class="blog-archive-content">{!! \Illuminate\Support\Str::words($post->body, 10,'...')
                                !!}</div>
                            <div class="blog-archive-information">

                                <span class="blog-archive-date">
                                    <i class="fa fa-calendar-alt"></i><span class="post-time">{{$post->created_at}}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p>Inga inlägg</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    var blogContent = document.querySelectorAll('.blog-archive-content');

    blogContent.forEach(e => {
        e.firstChild.classList.add('blog-archive-text');
    });
</script>

@endsection