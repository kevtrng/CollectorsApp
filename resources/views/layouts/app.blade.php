<html lang="en">
<head>
</head>
<body>



<!-- Links appear only when not authenticated. -->
@guest
    <a href='/login'>Login</a> |
    <a href='/register'>Register</a>
@endguest
<!-- Links appear only when authenticated. -->
@auth
    <a href='/dashboard'>Dashboard</a> |
    <a href='/collections'>Collections</a> |
    <a href='/prevown'>Prev Owned</a> |
    <a href='/wishlist'>Wish List</a> |
    <a href='/trade'>Trade Requests</a> |
    <a href='/logout'>Logout</a> |
@endauth
<br>

@yield('content')

<!-- Show flash messages -->
{{--@include('flash-message')--}}
</body>
</html>
