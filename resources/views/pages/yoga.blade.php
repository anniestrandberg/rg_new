@extends('layouts.app')
@include('inc.url')

@include('resources.backgrounds')

<?php 
    $header = [
        'style' => 'background-image:url(' . Background::$yoga . ')',
        'class' => 'header-image',
        'title' => 'Getyoga',
        'color' => 'white'
    ];
    
    $nav = [
        'color' => 'white',
        'class' => ''
    ];
?>

@section('content')
                
<div id="yoga_container">
<div class="yoga-second-container">
    <div id="yoga_img"></div>
    <div class="yoga_information">
        <p>
            Vi är bland de första ut med denna form av yoga i Sverige.
        </p>
        <p>
            Ett underbart sätt att få umgås med dessa nyfikna härliga djur, glädje och lekfullthet.
        </p>
        <p>
            Våra mattor är av ett material som är ekologiskt tillverkade.
        </p>
        <p>
            Företag, möhippor, grupper osv. Kontakta oss för att få ett skräddarsytt koncept.
        </p>

    </div>
</div>


</div>
    
    @include('inc.full_footer_page')

@endsection