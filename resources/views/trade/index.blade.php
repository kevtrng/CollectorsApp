@extends('layouts.app')
@section('content')

    <h1>Trade Requests</h1>

    <div>
{{--        foreach this div--}}
        <h2>request from {some other user}</h2>
        <p>Your {user's item}</p> <br>
        <p>for</p> <br>
        <p>Their {requester's item}</p>
        <button>accept</button><button>reject</button>
    </div>

@endsection
