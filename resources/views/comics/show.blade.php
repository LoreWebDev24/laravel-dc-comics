@extends('layouts.app')

@section('content')

  <section>
    <div class="container pt-5">
      <h1 class="pb-3">{{ $comic->title }}</h1>
      <img class="pb-5" src="{{ $comic->thumb }}" alt="immagine-fumetto">
      <p>
        {{ $comic->description }}
      </p>
    </div>
  </section>

@endsection
