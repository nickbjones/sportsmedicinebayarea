<?php snippet('header') ?>
<main class="body patient_education" role="main">
	<section class="subpg">
		<h2><?= $page->title()->html() ?></h2>
		<?php
			$posts = $page->children()->visible()->sortBy('date', 'desc');
			foreach($posts as $post):
				snippet('post', array('post' => $post));
			endforeach
		?>
	</section>
</main>
<?php snippet('footer') ?>