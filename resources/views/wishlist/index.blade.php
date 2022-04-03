@extends('layouts.app')
@section('content')

<script>
	function del(id) {
		fetch("/wishlist/submitDeleteWish/" + id, {
			method:"delete"
		})
	}
</script>

<h1>Wishlist</h1>

<div>
	<ul>
		@foreach ($wishlist as $wishlistItem)
		<li>
			{{$wishlistItem->name}} 
			<a href={{$wishlistItem->url}}>{{$wishlistItem->url}}</a>
			<form action="/wishlist/submitDeleteWish/{{$wishlistItem->_id}}" method='post'>
				<!-- <input name="id" type="hidden" value={{$wishlistItem->_id}}> -->
				<input type="submit">
			</form>
		</li>
		@endforeach
	</ul>
	<button><a href='/wishlist/wish'>Add to list</a></button>
</div>
	

@endsection
