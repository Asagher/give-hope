@extends('layouts.app')
@section('content')
    <div>
        @if(count($campaigns)>0)
            @foreach ($campaigns as $campaign)
                <li>
                    <a href="{{route('campaigns.show',['campaign' => $campaign['id']])}}">
                        {{$campaign['name']}}
                    </a></li>
            @endforeach
        @else
            <p>no data</p>
        @endif
    </div>
@endsection