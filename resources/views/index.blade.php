@extends('layouts.main')

@section('content')

<div class="container-lg" style="margin: 0 auto;">
    <div class="row mt-5">
        @foreach($response['data'] as $match)
        <div class="col-lg-4 col-md4 col-sm-12 text-center mb-3 mx-5">
            <div class="card" style="width: 28rem;">
                <img/>
                <div class="card-body">
                    <div class="card-title">{{$match['teams']['home']['name']}} - {{$match['scores']['home_score']}} - {{$match['scores']['away_score']}} - {{$match['teams']['away']['name']}}</div>
                    <div class="card-text"></div>
                </div>
            </div>
    </div>
    @endforeach
</div>


@endsection