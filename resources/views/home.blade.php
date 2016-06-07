<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Julius Geoffrey Almazan</title>

	@include("partials/stylesheets")
</head>
<body>
	@include("partials/navbar")
	
	<section id="banner">
		@include("partials/banner")
	</section>
	
	<section id="about">
		@include("about")
	</section>
	
	<section id="works">
		@include("works")
	</section>
	
	<section id="contact">
		@include("contact")
	</section>
	

	@include("partials/scripts")
</body>
</html>