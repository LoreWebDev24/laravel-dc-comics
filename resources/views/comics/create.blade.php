@extends('layouts.app')

@section('content')

<section class="py-3">
  <div class="container">
    <form action="#" method="POST" >

      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image (url)</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Url image">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="descritption" id="descritpion" placeholder="Comic Description">
      </div>
      <div>
        <input type="submit" class="btn btn-primary" value="Create">
      </div>
    </form>
  </div>
</section>

@endsection
