@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Games List
        </div>
        
        <!-- @for($i = 0; $i < 5; $i++)
          <p>the value of i is {{ $i }}</p>
        @endfor -->

        <!-- @for($i = 0; $i < count($games); $i++)
          <p>{{ $games[$i]['genre'] }}</p>
        @endfor -->

        @foreach($games as $game)
          <div>
            {{-- {{ $loop->index }} - {{ $game['genre'] }} - {{ $game['quality'] }}
            @if($loop->first)
              <span> - first in the loop</span>
            @endif
            @if($loop->last)
              <span> - last in the loop</span>
            @endif --}}


            {{ $game->genre }} - {{ $game->quality}} - ${{ $game->price}}
          </div>
        @endforeach

    </div>
</div>
@endsection