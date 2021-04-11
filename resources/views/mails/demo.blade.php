<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	Hello <i>{{$demo->receiver}}</i>,
	<p>This is a demo email for testing purposes!Also, it's the HTML version.</p>
	<p><u>Demo Object values:</u></p>
	<div>
		<p><b>Demo One:</b>&nbsp;{{$demo->demo_one}}</p>
		<p><b>Demo Two:</b>&nbsp;{{$demo->demo_two}}</p>
	</div>
	<p><u>Values passed by With method:</u></p>
	<div>
		<p><b>testVarOne:</b>&nbsp;{{ $testVarOne}}</p>
		<p><b>testVarTwo:</b>&nbsp;{{$testVarTwo}}</p>
	</div>
	Thank You,
	<br/>
	<i>{{$demo-sender}}</i>
</body>
</html>