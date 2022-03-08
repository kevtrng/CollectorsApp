<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
	<body>
		Login
		<form method="post" action="/home/submitLogin" name="loginForm">
			<input type="email" name="email" placeholder="email"/><br>
			<input type="password" name="password" placeholder="password"/><br>
			<input type="submit" />
		</form>
	</body>
</html>
@endsection

