@extends('layouts.base')

@section('title', 'crea un fumetto')

@section('maincontent')
<div class="container">
    <form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">titolo fumetto</label>
      <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">descrizione</label>
      <input class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">sei proprio sicuro??</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection