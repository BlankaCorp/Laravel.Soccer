@extends('layouts.main')

@section('content')

<div class="container-lg" style="margin: 0 auto;">
    <div class="row mt-5">

        @if(isset($response['data']))
        @foreach($response['data'] as $match)
        <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-3">
            <div class="card">
                <img/>
                <div class="card-body">
                    <div class="card-title" style="font-size: 20px;font-weight:bold;">
                        <img src="{{$match['teams']['home']['img']}}"/>
                        {{$match['teams']['home']['name']}} {{$match['scores']['home_score']}} - {{$match['scores']['away_score']}}  {{$match['teams']['away']['name']}}<img src="{{$match['teams']['away']['img']}}"/> </div>
                    <div class="card-text" style="font-size : 12px">{{ $match['time']['time']}} {{ $match['time']['timezone']}}</div>
                    <div class="card-text" style="font-size : 12px">{{ $match['status_name']}}</div>
                    <div class="card-text">{{ $match['league']['name']}} - {{ $match['league']['country_name']}}</div>
                </div>
            </div>
    </div>
    @endforeach

    @else 
    <h2>No matches</h2>
    @endif

</div>


@endsection