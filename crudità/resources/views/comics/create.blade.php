@extends('layouts.base')

@section('title', 'crea un fumetto')

@section('maincontent')
<div class="container">
    <form action="{{route('comics.store')}}" method="post">
      @csrf
    <div class="mb-3">
      <label for="titolo" class="form-label">titolo fumetto</label>
      <input type="text" class="form-control" id="title" name="title">
      
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text-area" class="form-control" id="description" name="description">
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">immagine</label>
      <input type="text" class="form-control" id="thumb" name="thumb">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">prezzo</label>
      <input type="number" class="form-control" id="price" name="price" min="2" max="200">
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">serie</label>
      <input type="text" class="form-control" id="series" name="series">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">type</label>
      <select name="type" class="form-control" id="type">
        <option value="comic book">comic book</option>
        <option value="graphic novel">graphic novel</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">sale date</label>
      <input type="date" class="form-control" id="date" name="sale_date">
    </div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>
</div>

@endsection