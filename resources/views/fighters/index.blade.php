
@extends('layouts.app')

@section('content')
    <h1>Fighters</h1>
    <a href="{{ route('fighters.create') }}">Add New Fighter</a>
    <ul>
        @foreach ($fighters as $fighter)
            <li>{{ $fighter->name }} - {{ $fighter->weight_class }} - {{ $fighter->country }}</li>
        @endforeach
    </ul>
@endsection
