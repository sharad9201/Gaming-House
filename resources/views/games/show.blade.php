@extends('layouts.app')

@section('content')

<div class="wrapper game-details">
    <h1>
        Order for {{$game->name}}
    </h1>
    <p class="name"> Name - {{ $game->name}}</p>
    <p class="genre"> Genre - {{ $game->genre}}</p>
    <p class="quality"> Quality - {{ $game->quality}}</p>
    <p class="offer"> Offers </p>
    <ul>
        @foreach($game->offer as $offer )
           <li>{{ $offer }}</li>
        @endforeach
    </ul>
    <form action="/games/{{$game->id}}" method="POST">
        @csrf 
        @method('DELETE')
        <button> Complete Order</button>

    </form>

    {{-- <p class="price"> Price - ${{ $game->price}}</p> --}}
</div>
<a href="/games" class="back"> <- Back to all Games</a>
@endsection