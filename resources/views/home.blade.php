@extends('template.layout')
@section('content')
<div class="container">
      <div id="etichetta">CURRENT SERIES</div>
      @foreach ($fumetti as $item)
      <div class="card">
        <img src="{{ $item['thumb'] }}" alt="" />
        <div class="serie">{{ $item['series'] }}</div>
      </div>
      @endforeach
    </div>
    <button>LOAD MORE</button>
@endsection