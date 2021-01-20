<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
        <title>
            @yield('Title')
        </title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
	<header id="header">
				<div class="inner">
					<a href="index" class="logo">introspect</a>
					<nav id="nav">
						<a href="index">Home</a>
						<a href="generic">Generic</a>
						<a href="elements">Elements</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			<section id="one">
				<div class="inner">
					<header>
						@yield('section')</header>
						</div>
					</section>
</body>
</html>