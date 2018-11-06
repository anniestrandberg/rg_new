@extends('layouts.app')
@include('inc.url')

@include('resources.backgrounds')

<?php
    $header = [
        'style' => 'background-image:url(' . Background::$home . ')',
        'class' => 'header-image',
        'title' => 'Rompens Gård',
        'color' => 'white'
    ]; 

    $nav = [
        'color' => 'white',
        'class' => ''
    ];
?>

@section('content')

    <section class="section section--text-image nav-black">
        <div class="container">

            <div>
                <div class="left">
                    <h2 class="title">Välkommen till Rompens Gård i vackra Lerkil!</h2>
                    <p class="p">Här händer det massor av spännande saker hela tiden. Just nu är vi inne i processen att få igång våra odlingar, utöka våra hagar och mycket mer.</p>
                    <p class="p">Vi säljer allt från honung, ved, ägg till killingkött, lammkött och ullplädar.</p>
                    <p class="p">Köttslakten har vi delat upp i perioder under året. Som störst är perioden på hösten, ungefär mellan augusti - november. Men det förekommer såklart att vi kör något extra slakt någon gång ibland.</p>
                    <br>
                    <p class="p">Har du frågon kring beställning av kött eller något annat? Skicka iväg ett meddelande så svarar vi så snabbt vi kan.</p>
                </div>
            </div>

            <div>
                <div class="right">
                    <div class="media" style="padding-bottom:135.5%">
                            <img src="/storage/gallery/mum_and_dad.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('inc.full_footer_page')

@endsection