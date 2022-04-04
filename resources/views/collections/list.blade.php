<link href="{{ asset('css/layout.css') }}" rel="stylesheet">
<link href="{{ asset('css/collection.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')

    <h1>Collection: {{$collectionName}}</h1>
    <form method="get" action="/collections/list/additem">
      @csrf
      <input type="hidden" value="{{$collectionName}}" name="name"/>
      <br>

      <div class = "button">
        <button class = "addToList" type="submit" name="submit">Add to list</button>
        <button class = "back" type="button" onclick="window.location='{{ url("collections/") }}'">Back to collections</button>
      </div> 
     
    </form>
    <!-- <button type="button" onclick="window.location='{{ url("collections/list/additem") }}'">Add to list</button> -->
    <div>
      <ul>
        @if($collection)
          @foreach($collection as $collect)
            @if($collect->items)
              @foreach($collect->items as $item)
                <li>{{$item['itemName']}}</li>
				<form action='/collections/deleteItem' method="post">
					@csrf
					<input type="hidden" value="{{$item['itemName']}}" name="name"/>
					<input type="hidden" value="{{$collect->_id}}" name="id"/>
					<input class = "delete" type="submit" value="Delete"/>
				</form>
              @endforeach
            @endif
          @endforeach
        @endif
      </ul>
      <p>total worth: $1000</p>
    </div>
<br>


@endsection
