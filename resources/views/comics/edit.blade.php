@extends('layouts.app')

@section('content')

<section class="py-3">
  <div class="container">
    <form action="{{ route('comics.update', $comic) }}" method="POST" >

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo" value="{{ $comic->title }}">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image (url)</label>
        <input type="text" class="form-control" name="thumb" id="image" placeholder="Url image" value="{{ $comic->thumb }}">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" name="price" id="price" placeholder="Price" value="{{ $comic->price }}">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Type">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="descritpion" placeholder="Comic Description" value="{{ $comic->description }}">
      </div>
      <div>
        <input type="submit" class="btn btn-primary" value="Edit">
      </div>
    </form>
  </div>
</section>

@endsection
