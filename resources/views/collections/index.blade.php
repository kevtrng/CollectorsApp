@extends('layouts.app')
@section('content')

    <h1>Your Collections</h1>

    <button type="button" onclick="window.location='{{ url("collections/list/createcollection") }}'">
        Create Collection</button>
        <div>
{{--            {{$collections}}--}}
            @if ($collections)
                @foreach ($collections as $collection)
                <h2>{{$collection->collectionName}}</h2>
                <ul>
                    @foreach($collection->items as $item)
                        <li>{{$item->name}}</li>
                    @endforeach
                </ul>
                @endforeach
            @endif

        <button type="button" onclick="window.location='{{ url("collections/list") }}'">
        view full list</button>
        <p>total worth: $1000</p>
    </div>

@endsection
