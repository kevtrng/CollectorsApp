@extends('layouts.app')
@section('content')

    <h1>Your Collections</h1>

    <button type="button" onclick="window.location='{{ url("collections/list/createcollection") }}'">
        Create Collection</button>
        <div>
{{--        foreach this div--}}
        <h2>title of collection</h2>
        <ul>
            <li>collection item</li>
            <li>collection item</li>
            <li>collection item</li>
            <li>collection item</li>
        </ul>
        <button type="button" onclick="window.location='{{ url("collections/list") }}'">
        view full list</button>
        <p>total worth: $1000</p>
    </div>

@endsection
