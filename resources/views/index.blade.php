
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Islamic Supplications </title>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99857514-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-99857514-2');
	</script>
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

<body style="background: #af692c">
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<!-- nav -->
				<nav class="py-lg-4 py-3 px-xl-5 px-lg-3 px-2">
					<div id="logo">
						<h1><a class="" href="/"><span class="fa fa-spinner mr-2" aria-hidden="true"></span>Islamic Supplications</a></h1>
					</div>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mt-2">
						<li class="active"><a href="/">Show another Prayer</a></li>
						<li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="addprayerpage">Add a New Prayer</a></li>
						<li><a href="https://twitter.com/AJ_DAPO">Contact Us</a></li>
					</ul>
				</nav>
				<!-- //nav -->
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="main-w3pvt" style="min-height: 100vh;">
			<div class="container">
				<div class="style-banner text-center">
					@if(Session::has('added'))
						<div class="alert alert-success" role="alert">
							Thank you, May Allah reward you abundantly !
						</div>
						<h3 class="mb-3 tweet" style="font-size: 54px; padding-bottom: 150px"; >{{\App\Prayer::orderBy('id', 'desc')->first()->prayer}}</h3>
					@else

						<h3 class="mb-3 tweet" style="font-size: 54px; padding-bottom: 150px"; p>{{$prayer->prayer}}</h3>
					@endif
					<p></p>
					<br/><br/><br/><br/><br/><br/><br/><br/
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

</body>

</html>