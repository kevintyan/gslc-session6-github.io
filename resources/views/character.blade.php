@extends('template.main')

@section('main')

<div class="container">
    <div class="text-center">
        <h1>{{ $char['name'] }}</h1>
        <h5>VA: {{ $char['va'] }}</h5>
        <p>{{ $char['description'] }}</p>
        <img src="{{ $char['img_desc_url'] }}" alt="{{ $char['name'] }}" class="img-thumbnail">
        <a href="/characters" type="button" class="btn btn-danger mt-5 mb-5">Go Back</a>
    </div>
</div>

@endsection
