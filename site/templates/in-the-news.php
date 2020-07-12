<?php snippet('header') ?>
<main class="body in_the_news" role="main">
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