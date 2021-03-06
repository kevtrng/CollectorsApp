<link href="{{ asset('css/layout.css') }}" rel="stylesheet">
<link href="{{ asset('css/collection.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')

    <h1>Add to Collection: {{$collection}}</h1>

    <div>
        {{--        foreach this div--}}
        <form method="post" action="/collections/addItem">
          @csrf
            <label for="itemName">Item name
                <input type="text" name="itemName"/>
            </label><br>
            <label for="modelNum">Model #
                <input type="text" name="modelNum"/>
            </label><br>
            <label for="year">Production Year
                <input type="text" name="year"/>
            </label><br>
            <label for="acqDate">Acquisition Date
                <input type="text" name="acqDate"/>
            </label><br>
            <label for="price">Price
                <input type="text" name="price"/>
            </label><br>
            <label for="quantity">Units/Quantity
                <input type="text" name="quantity"/>
            </label><br>
            <label for="condition">Condition
                <input type="text" name="condition"/>
            </label><br>
            <label for="picture">Picture
                <input type="file" name="picture"/>
            </label><br>
            <label for="description">Description
                <textarea name="description"></textarea>
            </label><br>
            <input type="hidden" value="{{$collection}}" name="name"/><br>
            <button class = "addToList" type="submit" name="submit">Submit</button>
            <button class = "back" type="button" onclick="window.location='{{ url("collections/list/") }}'">cancel</button>
        </form>
    </div>
   

@endsection

