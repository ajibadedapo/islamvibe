
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Islamic Supplications </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<!-- nav -->
				<nav class="py-lg-4 py-3 px-xl-5 px-lg-3 px-2">
					<div id="logo">
						<h1><a class="" href="index.blade.php"><span class="fa fa-spinner mr-2" aria-hidden="true"></span>Islamic Supplications</a></h1>
					</div>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mt-2">
						<li class="active"><a href="index.blade.php">Home</a></li>
						<li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="#about">About Us</a></li>
						<li><a href="#services">Services</a></li>
						<li class="mx-lg-3 mx-md-2 my-md-0 my-1">
							<!-- First Tier Drop Down -->
							<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
							</label>
							<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
							<input type="checkbox" id="drop-2" />
							<ul>
								<li><a href="#gallery" class="drop-text">Gallery</a></li>
								<li><a href="#price" class="drop-text">Pricing Plans</a></li>
								<li><a href="#features" class="drop-text">Features</a></li>
								<li><a href="#stats" class="drop-text">Statistics</a></li>
								<li><a href="#testi" class="drop-text">Testimonials</a></li>
							</ul>
						</li>
						<li><a href="#contact">Contact Us</a></li>
					</ul>
				</nav>
				<!-- //nav -->
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="main-w3pvt">
			<div class="container">
				<div class="style-banner text-center">
					<h3 class="mb-3 tweet" style="font-size: 54px; padding-bottom: 150px"; p>{{$prayer->prayer}}</h3>
					<p></p>
					<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

</body>

</html>