<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
    <?=$loadhead?>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.html"><img class="logo" src="images/logo.png" width="513" height="84" alt="" title=""></a>
			<a href="index.html"><img  src="images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
                <?=makeLinks($nav1,'<li>','</li>','<li class="active">')?>
                <!--
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
                -->
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="content">
			<div>
				<div>
                    <?=showFeedback()?>
                    <!-- header ends here -->