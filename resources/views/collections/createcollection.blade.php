<link href="{{ asset('css/layout.css') }}" rel="stylesheet">
<link href="{{ asset('css/collection.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')

    <h1>Create a new collection</h1>

    <div>
        {{--        foreach this div--}}
        <form method="post" action="/collections/createcollection">
            Collection name
                @csrf
                <input type="text" name="name"/>
            <br>
            <button class = "addToList" type="submit" name="submit">Submit</button>
            <button class = "back" type="button" onclick="window.location='{{ url("collections/list/") }}'">cancel</button>
        </form>
    </div>

@endsection

