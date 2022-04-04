@extends('layouts.app')
@section('content')

    <h1>Your Collections</h1>

    <button type="button" onclick="window.location='{{ url("collections/list/createcollection") }}'">
        Create Collection</button>
        <div>
            @if ($collections)
                @foreach ($collections as $collection)
                <h2>{{$collection->collectionName}}</h2>
                <ul>
                    @if($collection->items)
                        @foreach($collection->items as $item)
                          <li>{{$item['itemName']}}</li>
                        @endforeach
                    @endif
                    <form method="get" action="/collections/list">
                      @csrf
                      <input type="hidden" value="{{$collection->collectionName}}" name="name"/>
                      <input type="hidden" value="{{$collection->_id}}" name="id"/>
                      <br>
                      <button type="submit" name="submit">view full list</button>
                    </form>
                        <!-- <button type="button" onclick="window.location='{{ url("collections/list") }}'">
                            view full list</button> -->
                        <p>total worth: $1000</p>
                </ul>
                @endforeach
            @endif
    </div>

@endsection
