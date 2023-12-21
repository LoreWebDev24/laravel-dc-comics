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
                        <th>Tipo</th>
                        <th>
                            Edita
                        </th>
                        <th>
                            Cancella
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
                                <a href="{{ route('comics.show', $comic) }}">
                                    {{ $comic->title }}
                                </a>
                            </td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->type }}</td>
                            <td class="p-0">
                                <a href="{{ route('comics.edit', $comic) }}"><span>edit</span></a>
                            </td>
                            <td>
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input data-confirm data-target="form-{{ $comic->id }}" class="btn btn-danger btn-sm" type="submit" value="Delete">
                                </form>
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
