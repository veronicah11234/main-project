@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Parks</h1>
        <ul>
            @foreach($parks as $park)
                <li>
                    <a href="{{ route('parks.show', $park->id) }}">{{ $park->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
