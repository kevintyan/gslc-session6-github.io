@extends('template.main')

<style>
    .bg {
        background-image: url("https://images2.alphacoders.com/110/thumb-1920-1109233.jpg");
        height:100vh;
        position: relative;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

@section('main')
<div class="bg">
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="text-center text-light">
                <h1 class="mt-5">Genshin Impact</h1>
                <h5>Let's go on an adventure</h5>
                <p>"Fly across the open world, swim through crystal-clear waters, and climb towering mountains. Stray off the beaten path to discover all the hidden secrets of a world full of wonder and mystery."</p>
                <a href="/characters" type="button" class="btn btn-primary">View Character</a>
            </div>
        </div>
    </div>
</div>
@endsection
