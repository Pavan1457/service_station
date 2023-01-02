<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
	<link rel="stylesheet" href="/css/style.css">

</head>

<body>

	<div class="container-fluid home">
		<div class="row">
			<div class="col-md-6 p1">
				CARTUNE SERVICE
			</div>
			<div class="col-md-5 nav-links">
				<ul>Home</ul>
				<ul>About</ul>
				<ul>Contact</ul>
			</div>
		</div>
		<div class="inform">
			<p class="p2"> <span class="pl1"> ALWAYS.&nbsp; &nbsp;</span> CUSTOMERS. &nbsp;&nbsp; <span class="pl2">CHOICE.</span></p>
			<!-- <p class="p3">When you're at the gym feeling like you'll never be one of those people who look like they've been at it their entire lives, remember that they all started somewhere.</p> -->
		</div>
	</div>
	<div class="container-fluid home2">
		<div>
			<img class="img" src="/css/carsat_logo.png">
		</div>
		<div>
			<h2 class="p4">PRICEING AND PLANS</h2>
		</div>
		<form action="" method="post">
			<div class="container">
				<div class="row box">
					<div class="column box1">
						<p class="text">WATER WASHISNG</br>
							SERVICE</p>
						<p class="p5"><b>1,000Rs/-</b></p>
						<div>
							<li class="li"><b>Foam Water Washing</b></li>
							<li class="li"><b>Chain Cleaning</b></li>
							<li class="li"><b>Chain lube</b></li>
						</div>
						<a href="{{url('register')}}" role="button" class="btn btn-secondary button">Book Now </a>

					</div>
					<div class="column box2">
						<p class="text">GENERAL CHECK-UP</br>
							SERVICE</p>
						<p class="p5"><b>3,000Rs/-</b></p>
						<div>
							<li class="li"><b>Oil change</b></li>
							<li class="li"><b>General checkup></b></li>
							<li class="li"><b>water wash</b></li>
						</div>
						<a href="{{url('register')}}" role="button" class="btn btn-secondary button">Book Now </a>
					</div>
					<div class="column box3">
						<p class="text">FULL CUSTOMIZE</br>SERVICE</p>
						<p class="p5"><b>8,000Rs/-</b></p>
						<div>
							<li class="li"><b>Engine Checkup</b></li>
							<li class="li"><b>Painting Works</b></li>
							<li class="li"><b>water wash</b></li>
						</div>						
						<a href="{{url('register')}}" role="button" class="btn btn-secondary button">Book Now </a>
					</div>
				</div>
			</div>
		</form>
</body>
</html>