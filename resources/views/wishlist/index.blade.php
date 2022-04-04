@extends('layouts.app')
@section('content')
<link href="{{ asset('css/wishlist.css') }}" rel="stylesheet">

<h1>Wishlist</h1>
<h4>Want something? Add to your wishlist!</h4>
<button class = "addToList"><a href='/wishlist/wish'>Add to list</a></button>

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
</div>
	

@endsection
