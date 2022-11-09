@extends('template.main')

@section('main')

<div class="container">

    @foreach ($characters as $character)
    <div class="card mt-5 mx-auto" style="width: 16rem;">
        <img src="{{ $character['img_url'] }}" class="card-img-top img-thumbnail" alt="{{ $character['name'] }}" height="100%">
        <div class="card-body">
            <div class="text-center">
                <h5 class="card-title">{{ $character['name'] }}</h5>
                <p class="card-text">{{ $character['description'] }}</p>
                <a href="/characters/{{ $character['name'] }}" class="btn btn-primary">View Detail</a>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection
