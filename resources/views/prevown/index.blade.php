@extends('layouts.app')
@section('content')

    <h1>Your Previously Owned Items</h1>

    <div>
        <h2>Previously Owned</h2>
        <ul>
			@foreach ($prevOwned as $prevOwnedItem)
				<li>{{$prevOwnedItem->name}}</li>
			@endforeach
        </ul>
    </div>
@endsection
