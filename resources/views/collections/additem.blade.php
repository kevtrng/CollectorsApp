@extends('layouts.app')
@section('content')

    <h1>Add to Collection: {This particular collection}</h1>

    <div>
        {{--        foreach this div--}}
        <form method="post" action="/collections/addItem">
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
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <button type="button" onclick="window.location='{{ url("collections/list/") }}'">cancel</button>

@endsection

