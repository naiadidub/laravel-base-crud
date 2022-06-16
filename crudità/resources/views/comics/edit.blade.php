@extends('layouts.base')

@section('title', 'modifica un fumetto')

@section('maincontent')
<div class="container">
    <form action="{{route('comics.update', $fumetto->id)}}" method="post">
      @csrf
      @method('PUT')
    <div class="mb-3">
      <label for="titolo" class="form-label">titolo fumetto</label>
      <input type="text" class="form-control" id="title" name="title" value="{{$fumetto->title}}">
      
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description">{{$fumetto->description}} </textarea>
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">immagine</label>
      <input type="text" class="form-control" id="thumb" name="thumb" value="{{$fumetto->thumb}}">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">prezzo</label>
      <input type="number" class="form-control" id="price" name="price"  value="{{$fumetto->price}}">
    </div>
    <div class="mb-3">
      <label for="serie" class="form-label">serie</label>
      <input type="text" class="form-control" id="series" name="series" value="{{$fumetto->series}}">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">type</label>
      <select name="type" class="form-control" id="type">
        <option value="comic book" {{$fumetto->type == 'comic book' ? 'selected' : ''}}>comic book</option>
        <option value="graphic novel" {{$fumetto->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">sale date</label>
      <input type="date" class="form-control" id="date" name="sale_date" value="{{$fumetto->sale_date}}">
    </div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>
</div>
@endsection