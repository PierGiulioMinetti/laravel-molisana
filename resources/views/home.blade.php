@extends('layout.main')

@section('content')

   <section class="type-section container">
       <h2>LE LUNGHE</h2>
       @foreach ($lunghe as $card)
            <div class="card">
                <h3> {{ $card['titolo'] }} </h3>
                <img src=" {{ $card['src'] }}" >
                <a href=""> Vedi prodotto</a>
            </div>
       @endforeach
   </section>

   <section class="type-section container">
    <h2>LE CORTE</h2>
    @foreach ($corte as $card)
         <div class="card">
             <img src=" {{ $card['src'] }}" >
             <h3> {{ $card['titolo'] }} </h3>
             <a href=""> Vedi prodotto</a>
         </div>
    @endforeach
</section>

<section class="type-section container">
    <h2>LE CORTE</h2>
    @foreach ($cortissime as $card)
         <div class="card">
             <img src=" {{ $card['src'] }}" >
             <h3> {{ $card['titolo'] }} </h3>
             <a href=""> Vedi prodotto</a>
         </div>
    @endforeach
</section>




@endsection