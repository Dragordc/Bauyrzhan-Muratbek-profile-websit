Hello {{$demo->receiver}},
This is a demo email for testing purposes!Also, it's the HTML version.

Demo Object values:
	
Demo One:{{$demo->demo_one}}
Demo Two:{{$demo->demo_two}}
	
Values passed by With method:>
	
testVarOne:{{ $testVarOne}}
testVarTwo:{{$testVarTwo}}
	
Thank You,
{{$demo-sender}}