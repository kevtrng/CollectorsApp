<link href="{{ asset('css/PrevOwn.css') }}" rel="stylesheet">
<link href="{{ asset('css/layout.css') }}" rel="stylesheet">


@extends('layouts.app')
@section('content')

    <h1>Your Previously Owned Items</h1>

    <div>
        <h2>previously owned</h2>
        <ul>
			@foreach ($prevOwned as $prevOwnedItem)
				<li>{{$prevOwnedItem->name}}</li>
			@endforeach
        </ul>
    </div>
@endsection
