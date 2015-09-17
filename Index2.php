<?php include_once('dir.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Serebii v2.0 | Daniel 'Gnifle'</title>

	<meta charset="UTF-8">
	<!--		<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<link rel='shortcut icon' type='image/x-icon' href='/images/favicon/favicon.ico' />

	<!-- Styles -->
	<link rel="stylesheet" href="stylesheets/scss/global.css">

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Arimo:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>

	<!-- JQuery plugins -->
	<script type="text/javascript" src="javascripts/jQuery/jquery-1.11.3.min.js"></script>

	<!-- Custom Javascripts -->
	<script type="text/javascript">
		// Fade in page after load
		$( document ).ready(function() {
			$('#page').css("opacity", 1.0);
		});
	</script>

</head>
<body>

<div id="page">

	<?php include('template/navigation.php'); ?>

	<div id="content-container">
		<header class="logo-center">
			<a href=""></a>
			<div id="logo"></div>
			<div id="search">
				<p>Search</p>
			</div>
		</header>

		<div id="content">
			<p>Content</p>
		</div>
	</div>

</div>

<!--
Check menu for submenus, and apply the 'submenu' class to
these list elements with submenus
-->
<script type="text/javascript">

	// Collect all first-level list elements
	var menuItems = $('#navigation > ul').children('li');

	// Iterate over each of the list elements
	menuItems.each(function() {

		// If the list-item has a submenu, add the submenu class
		$(this).has('ul').addClass('submenu');

	});

</script>

<!--
Set the width of all existing submenu containers to fit the
content inside.
-->
<script type="text/javascript">

	$( document ).ready(function() {

		// Collect all second level menu container per each
		// parent first-level list element
		var menuContainers = $('#navigation').find('> ul > li').has('ul').children('ul');

		// Iterate over each menu container
		menuContainers.each(function() {

			// Count the amount of second-level menu items
			// Or in other words, the amount of coloumns in the
			// second-level menu container
			var coloumnCount = $(this).children('li').length;

			// Set the width of the second-level menu container
			// based on the amount of coloumns inside the container
			if(coloumnCount < 3) {
				// The base width per coloumn is 150px
				$(this).width(coloumnCount * 150);

			} else {
				// The default width for 3 or more coloumns is 450px
				// as the coloumns will break for every third coloumn
				$(this).width(450);
			}

		});

	});

</script>

</body>
</html>