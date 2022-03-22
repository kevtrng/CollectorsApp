
<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html>
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
	<body>
		<div class="container">
			<div class="formstuff">
				<h1>Welcome to Collector!</h1>
				<h4>Log in using your email and password</h4>
				<form method="post" action="/home/submitLogin" name="loginForm">
					<input type="email" name="email" placeholder="email"/><br>
					<input type="password" name="password" placeholder="password"/><br>
					<input type="submit" />
				</form>
			</div>

			<div class="imagestuff"></div>

		</div>

		


	</body>
</html>
@endsection

