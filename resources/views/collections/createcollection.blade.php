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
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <button type="button" onclick="window.location='{{ url("collections/list/") }}'">cancel</button>

@endsection

