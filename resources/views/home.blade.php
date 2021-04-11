<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	@extends('layout')
	@section('content')
	<div class = "container">
		<h1 class = "display-4 text-center" style="font-size:3.0 rem">{{__('lang.welcome')}}</h1>
		<h3 class = "display-4 text-center" style="font-size:2.0 rem">{{__('lang.title')}}</h3>
		<h4 class = "display-4 text-center" style="font-size:1.5 rem">{{__('lang.body')}}</h4>
		<h4 class = "display-4 text-center" style="font-size:1.5 rem">{{__("Абайдың ел ішіндегі есті жас Ерболмен достығы да осындай, азаматтың ат үстінде жүрген шақтарында тапқан рухани олжасы.")}}</h4>
		<h4 class = "display-4 text-center" style="font-size:1.5 rem">{{__("Бауыржан")}}</h4>
</div>
@endsection
</body>
</html>