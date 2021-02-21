<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{asset('/project.css')}}"/>
</head>
<body>
	<div class="header"  id ="1" style="font-weight: bold;">
		<p onclick="main()">About me</p>
		<p onclick="skill()">My Skills</p>
		<p onclick="contactme()">Contact me</p>
	</div>
	<div class="center" >
		<div class="photo">
			<img src = "https://i.pinimg.com/564x/11/35/04/113504ad2534dea8116b007f8c47fdee.jpg">
		</div>
		<div class = "text">
			<h1>Hello!</h1>
			<p>I am a second year student of the SDU University. My profession is a programmer. To be more precise, it is "IS-information systems".</p>
			<p>Besides study, I’m also fond of fishing because my father is a big fan of fishing. The only thing I don’t like is winter fishing, ice fishing that’s why I only fish in summer. I also like riding my bike and I try to use it no matter what weather it is outside and I’m very happy that there are bike lanes in the city now. I can also name one more hobby of mine and that is watching tv-series. I’ve recently watched a lot of interesting ones.</p>
		</div>
	</div>
	<div class="skills" id="2">
		<h1>My coding skills</h1>
		<p>As you know, programmers work with codes. And everyone has their own specific experience. These are my indicators of experience.</p>
		<div class="pokazatel" >
  <p>Java</p>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<p>Python</p>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
</div>
<p>HTML</p>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
</div>
<p>C++</p>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
</div>
</div>
	</div>
	<div class="contact" id = "3">
		<div class="belifon">
		<div><img src="https://www.modlr.co/images/solutions/key-features/notification-support-01.png" alt="" width="200" style = "margin-top:80px;"></div>
		<div class="oformlenie">
			<h3 style="font-weight: bold;">Get in touch</h3>
			<input type="text" placeholder="First Name">
			<input type="text" placeholder="Last Name">
			<input type="text" placeholder="Email">
			<textarea name="mess" id="" cols="32" rows="5" placeholder="Message"></textarea>
			<input type="submit" value="Send">
		</div>
	</div>
</div>
<script>
	function main() {
		document.querySelector(".center").style.display = 'flex';
		document.querySelector(".skills").style.display = 'none';
		document.querySelector(".contact").style.display = 'none';
	}
		function skill() {
		document.querySelector(".center").style.display = 'none';
		document.querySelector(".skills").style.display = 'block';
		document.querySelector(".contact").style.display = 'none';
	}
		function contactme() {
		document.querySelector(".center").style.display = 'none';
		document.querySelector(".skills").style.display = 'none';
		document.querySelector(".contact").style.display = 'flex';
	}
</script>
</body>
</html>