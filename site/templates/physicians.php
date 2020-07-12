<?php snippet('header') ?>
<main class="body physicians" role="main">
	<section class="subpg">
		<h2><?= $page->title()->html() ?></h2>
		<div class="flex_container">
			<?php
				$people = $page->children()->visible();
				foreach($people as $person) :
					snippet('person', array('person' => $person));
				endforeach
			?>
		</div>
	</section>
</main>
<?php snippet('footer') ?>