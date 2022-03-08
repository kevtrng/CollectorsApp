<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
	<body>
		Register
		<form method="post" action="/home/submitRegister" name="registerForm">
			<input type="text" name="username" placeholder ="username"/><br>
			<input type="email" name="email" placeholder ="email"/><br>
			<input type="password" name="password" placeholder ="password"/><br>
			<input type="submit" />
		</form>
	</body>
</html>
@endsection
