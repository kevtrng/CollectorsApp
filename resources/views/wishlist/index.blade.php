@extends('layouts.app')
@section('content')

    <h1>Wishlist</h1>

    <div>
{{--        foreach this div--}}
        <ul>
            <li>wish list item</li>
            <li>wish list item</li>
            <li>wish list item</li>
            <li>wish list item</li>
        </ul>
        <button>Add to list</button>
    </div>

	{{ $user }} <br>
	
	@foreach ($wishlist as $wishlistItem)
       {{$wishlistItem->name}} <a href={{$wishlistItem->url}}>{{$wishlistItem->url}}</a><br>
    @endforeach

@endsection
