
<!DOCTYPE HTML>
<html>

<head>
	<title>Add new Prayer</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="{{asset('css/style1.css')}}" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Abhaya+Libre:400,500,600,700,800" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<h1>Add a Prayer </h1>
	<h2>YOur prayer will be shared among thousands of people </h2>
	<div class="w3ls-contact">
		<!-- form starts here -->
		<form action="submitprayer" method="post">
			<div class="agile-field-txt">
				<label>
					Your Prayer :</label>
				<textarea name="prayer" placeholder=" " required=""></textarea>
			</div>
			<div class="w3ls-contact  w3l-sub">
				<input type="submit" value="SUBMIT">
			</div>
		</form>
		<!-- //form ends here -->
	</div>
	<!--copyright-->
{{--	<div class="copy-wthree">
		<p>© 2018 Business Consultancy Form . All Rights Reserved | Design by
			<a href="http://w3layouts.com/" target="_blank">W3layouts</a>
		</p>
	</div>--}}
	<!--//copyright-->

</body>

</html>