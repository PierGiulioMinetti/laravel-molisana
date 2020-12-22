@extends('layout.main')

@section('content')

<section class="container">
    <div class="cards">
        @foreach ($cards as $card)
            <div class="card">
                <img src=" {{$card['src']}} " alt="">
                <h3>
                    {{ $card['titolo']}}
                </h3>
                <a href="">

                </a>
            </div>
        @endforeach
    </div>


</section>

@endsection