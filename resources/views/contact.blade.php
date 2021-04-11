<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
	<link rel="stylesheet" href="{{asset('/about.css')}}"/>
</head>
<body>
	@extends('layout')
	@section('content')
	<div class="header"  id ="1" style="font-weight: bold;">
		<p onclick="main()">{{__("About me")}}</p>{{__("")}}
		<p onclick="skill()">{{__("My Skills")}}</p>
		<p onclick="contactme()">{{__("Contact me")}}</p>
	</div>
		<div class="contact" id = "3">
		<div class="belifon">
		<div><img src="https://www.modlr.co/images/solutions/key-features/notification-support-01.png" alt="" width="200" style = "margin-top:80px;"></div>
		<div class="oformlenie">
			<h3 style="font-weight: bold;">{{__("Get in touch")}}</h3>
			<input type="text" placeholder="First Name">
			<input type="text" placeholder="Last Name">
			<input type="text" placeholder="Email">
			<textarea name="mess" id="" cols="32" rows="5" placeholder="Message"></textarea>
			<input type="submit" value="Send">
		</div>
	</div>
</div>
@endsection
</body>
</html>