<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<link rel="shortcut icon" type="image/png" href="<?= site()->url() ?>/assets/images/favicon.png"/>
	<link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400' rel='stylesheet' type='text/css'>
	<meta name="description" content="<?= $site->description()->html() ?>">
	<meta name="keywords" content="<?= $site->keywords()->html() ?>">
	<?= css('assets/styles/css/styles.css') ?>
	<?= js('assets/js/jquery.min.js') ?>
	<script>
		// Google Analytics
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-74784709-1', 'auto');
		ga('send', 'pageview');
	</script>
	<script type="text/javascript" src="assets/js/html5shim.js"></script>
</head>
<body>
	<header role="banner">
		<div class="banner">
			<div class="in_blk left">
				<a class="overlay" href="<?= site()->url() ?>" title="Center for Sports Medicine home page">
					<h1 class="h1">Center for Sports Medicine</h1>
					<p class="subtitle">(Orthopedic and Sports Medicine Institute)</p>
				</a>
			</div>
			<div class="in_blk right">
				<span class="header-phone"><?= page('contact')->phone() ?></span>
			</div>
		</div>
		<nav class="navigation" role="navigation">
			<div class="title">
				<a class="overlay" href="<?= site()->url() ?>" title="Center for Sports Medicine home page">
					<h1 class="h1">Center for Sports Medicine</h1>
					<p class="subtitle">(Orthopedic and Sports Medicine Institute)</p>
				</a>
			</div>
			<ul id="navbar">
				<?php foreach($pages->visible() as $p): ?>
					<li><a <?= ($p->isOpen()) ? 'class="active"' : '' ?> href="<?= $p->url() ?>"><?= html($p->title()) ?></a></li>
				<?php endforeach ?>
			</ul>
			<?= snippet('responsive_nav') ?>
			<div class="clear"></div>
			<?= js('assets/js/header.js') ?>
		</nav>
	</header>