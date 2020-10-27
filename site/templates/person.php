<?php
	snippet('header');
	$name = ($page->title() != "") ? $page->title() : "" ;
	$title = ($page->employee_title() != "") ? ', '.$page->employee_title() : "" ;
	$specialty = ($page->specialty() != "") ? " &mdash; ".$page->specialty() : "" ;
?>
<main class="body profile" role="main">
	<section class="profile">
		<h2><?= $name.$title.$specialty ?></h2>
		<div class="flex_container">
			<div class="in_blk left" title="<?= $page->parent()->title() ?>">
				<?php if($page->image()) { ?>
					<img src="<?= $page->image()->url() ?>" 
						 alt="<?= $page->parent()->title()." ".$page->title()." ".$page->employee_title()." ".$page->specialty() ?>">
				<?php } else { ?>
					<?php snippet('placeholder_face'); ?>
				<?php } ?>
			</div>
			<div class="in_blk right"><?= $page->bio()->kirbytext() ?></div>
		</div>

		<?php if($page->slug() == 'meredith-bean') { snippet('zocdoc-button'); } ?>

	</section>
</main>
<?php snippet('footer') ?>