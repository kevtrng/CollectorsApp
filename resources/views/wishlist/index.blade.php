@extends('layouts.app')
@section('content')
<link href="{{ asset('css/wishlist.css') }}" rel="stylesheet">

<h1>Wishlist</h1>

<div>
	<ul>
		@foreach ($wishlist as $wishlistItem)
		<li>
			{{$wishlistItem->name}} <br/>
			<a href={{$wishlistItem->url}}>{{$wishlistItem->url}}</a>
			<form action="/wishlist/submitDeleteWish" method='post'>
				@csrf
				<input name="id" type="hidden" value={{$wishlistItem->_id}} />
				<input type="submit" value="delete"/>
			</form>
		</li>
		@endforeach
	</ul>
	<button class = "addToList"><a href='/wishlist/wish'>Add to list</a></button>
</div>
	

@endsection
