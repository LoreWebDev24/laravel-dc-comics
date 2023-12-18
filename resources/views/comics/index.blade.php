@extends('layouts.app')

@section('content')

  <section>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Copertina</th>
            <th>Titolo</th>
            <th>Prezzo</th>
            <th>tipo</th>
            <th>
              <a href="{{ route('comics.create') }}" class="btn btn-sm btn-primary">Nuovo Fumetto </a>
            </th>
          </tr>
        </thead>
        <tbody>
          @forelse ($comics as $comic)
              <tr>
                <td>{{ $comic->title }}</td>
                <td>
                  <img src="{{ $comic->thumb }}" width="40" alt="">
                </td>
                <td>
                  <a href="{{ route('comics.show',$comic) }}">
                    {{ $comic->title }}
                  </a>
                </td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                  <span>edit</span>
                  <span>delete</span>
                </td>
              </tr>
          @empty
              <tr>
                <td colspan="6">
                  Nessuna fumetto trovato
                </td>
              </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </section>

@endsection
