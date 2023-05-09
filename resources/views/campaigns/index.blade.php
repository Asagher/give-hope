@extends('layouts.app')
@section('content')
    <div class="pt-32">
        <h1 class="main-title-a">الحملات</h1>
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