@extends('layouts.base')

@section('title', 'detail')

@section('maincontent')
<div class="container">
    <img src="{{$fumetto->thumb}}" alt="">
    <br>
    <h1>{{$fumetto->title}}</h1>
    <p>{{$fumetto->description}}</p>
    <a href="/comics"><button type="button" class="btn btn-primary">torna ai fumetti</button></a>
    
</div>
    
@endsection