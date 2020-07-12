<?php snippet('header') ?>
<main class="body patient_education" role="main">
	<section class="subpg">
		<h2><?= $page->title()->html() ?></h2>
		<p><?= $page->text()->html() ?></p>

		<!-- <br> -->
		<!-- <p><?= $useragent=$_SERVER['HTTP_USER_AGENT']; ?></p> -->
	</section>
</main>
<?php snippet('footer') ?>