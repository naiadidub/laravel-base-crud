@extends('layouts.base')

@section('title', 'elenco fumetti')

@section('maincontent')
    <div class="container">
        <div class="row">
            @foreach ($fumetti as $fumetto)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$fumetto->thumb}}" class="card-img-top" alt="{{$fumetto->title}}">
                        <div class="card-body">
                          <h5 class="card-title">{{$fumetto->title}}</h5>
                          <p>serie: {{$fumetto->series}}</p>
                          <p>sale date: {{$fumetto->sale_date}}</p>
                          <p>{{$fumetto->type}}</p>
                          <h5>$ {{$fumetto->price}}</h5>
                          <a href="{{route('comics.show', $fumetto->id)}}" class="btn btn-primary">vai alla descrizione</a>
                        </div>
                      </div>
                </div>
            
            @endforeach
        </div>
    </div>
@endsection