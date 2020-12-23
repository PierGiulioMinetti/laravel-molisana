@extends('layout.main')

@section('content')

<section >
       <h2>LE LUNGHE</h2>
       <div class="type-section container">
           @foreach ($lunghe as $card)
           <div class="card">
               <h3> {{ $card['titolo'] }} </h3>
               <h4>{{ $card['id'] }}</h4>
               <img src=" {{ $card['src'] }}" >
               <a href="{{ route('product', $card['id']) }}"> Vedi prodotto</a>
            </div>
            @endforeach
        </div>
   </section>

   <section >
       <h2>LE CORTE</h2>
       <div class="type-section container">

           @foreach ($corte as $card)
                <div class="card">
                    <img src=" {{ $card['src'] }}" >
                    <h3> {{ $card['titolo'] }} </h3>
                    <h4>{{ $card['id'] }}</h4>
                    <a href="{{ route('product', $card['id']) }}"> Vedi prodotto</a>
                </div>
            @endforeach
        </div> 
</section>

<section >
    <h2>LE CORTISSIME</h2>
    <div class="type-section container">

        @foreach ($cortissime as $card)
            <div class="card">
                <img src=" {{ $card['src'] }}" >
                <h3> {{ $card['titolo'] }} </h3>

                <h4>{{ $card['id'] }}</h4>
                <a href="{{ route('product', $card['id']) }}"> Vedi prodotto</a>
            </div>
        @endforeach
    </div>
</section>




@endsection