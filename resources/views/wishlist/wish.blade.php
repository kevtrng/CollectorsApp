<link href="{{ asset('css/wishlist.css') }}" rel="stylesheet">
<link href="{{ asset('css/layout.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')

<h1>Add to Your Wishlist</h1>

<div>
	<form method='POST' action='/wishlist/submitWish'>
		@csrf
		<input type='text' name='name' placeholder="Onyx Ring" required/><br>
		<input type='text' name='url' placeholder="https://link-to-your-item.example" /><br>
		<input class = "add" type='submit'/><br>
	</form>
</div>
	

@endsection
