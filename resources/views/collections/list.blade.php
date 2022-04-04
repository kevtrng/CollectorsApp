@extends('layouts.app')
@section('content')

    <h1>Collection: {{$collectionName}}</h1>
    <form method="get" action="/collections/list/additem">
      @csrf
      <input type="hidden" value="{{$collectionName}}" name="name"/>
      <br>
      <button type="submit" name="submit">Add to list</button>
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
					<input type="submit" value="Delete"/>
				</form>
              @endforeach
            @endif
          @endforeach
        @endif
      </ul>
      <p>total worth: $1000</p>
    </div>
<br>
    <button type="button" onclick="window.location='{{ url("collections/") }}'">Back to collections</button>


@endsection
