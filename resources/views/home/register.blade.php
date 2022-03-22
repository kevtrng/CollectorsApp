<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
<link href="{{ asset('css/login.css') }}" rel="stylesheet">		
	<body>
		<div class="container">
			<div class="formstuff">
				<h1>Register</h1>
				<h4>Create your account!</h4>
				<form method="post" action="/home/submitRegister" name="registerForm">
					<input type="text" name="username" placeholder ="username"/><br>
					<input type="email" name="email" placeholder ="email"/><br>
					<input type="password" name="password" placeholder ="password"/><br>
					<input type="submit" />
				</form>
			</div>
			<div class=imagestuff></div>

		</div>
	</body>
</html>
@endsection
