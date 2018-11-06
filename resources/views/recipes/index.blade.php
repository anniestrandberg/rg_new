@extends('layouts.app')
@include('inc.url')

@include('resources.backgrounds')

<?php 
    $header = [
        'style' => 'background-image: url(https://images.unsplash.com/photo-1513135065346-a098a63a71ee?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b45026387bb20508bf1ae2b11d856479&auto=format&fit=crop&w=1349&q=80);',
        'class' => 'header-image',
        'title' => 'Rompens recept',
        'color' => 'white'
    ];

    $nav = [
        'color' => 'white',
        'class' => ''
    ];
?>

@section('content')
    
    <div class="container recipes-index">
       
        @if(count($recipes) > 0)
            
            @foreach($recipes as $recipe)

                <div class="one-recipe-container">
                    <a href="/recept/{{$recipe->id}}">
                        <div class="one-recipe-image" style="background-image: url(storage/recipe_images/{{ $recipe->recipe_image}})">
                            <div class="one-recipe-info">
                                <h2 class="h2 one-recipe-title">{{$recipe->recipe_title}}</h2>
                                <div class="one-recipe-description">{{$recipe->recipe_description}}</div>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
        @else
        <p>Inga inlägg</p>
        @endif
                            
    </div>

@endsection