@extends('layouts.layout')

@section('content')

<div class="wrapper game-details">
    <h1>
        Order for {{$game->name}}
    </h1>
    <p class="genre"> Genre - {{ $game->genre}}</p>
    <p class="quality"> Quality - {{ $game->quality}}</p>
    <p class="price"> Price - ${{ $game->price}}</p>
</div>
<a href="/games" class="back"> <- Back to all Games</a>
@endsection