@extends('layouts.app')
@section('content')

    <h1>Collection: {This particular collection}</h1>

    <button type="button" onclick="window.location='{{ url("collections/list/additem") }}'">Add to list</button>
    <div>
        {{--        foreach this div--}}
        <ul>
            <li>collection item</li>
            <li>collection item</li>
            <li>collection item</li>
            <li>collection item</li>
            <li>collection item</li>
            <li>collection item</li>
            <li>collection item</li>
            <li>collection item</li>
            <li>collection item</li>
            <li>collection item</li>
            <li>collection item</li>
        </ul>
        <p>total worth: $1000</p>
    </div>
<br>
    <button type="button" onclick="window.location='{{ url("collections/") }}'">Back to collections</button>


@endsection
