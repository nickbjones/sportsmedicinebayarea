<?php
	$name = $person->title();
	$title = (strlen($person->employee_title()) > 0) ? ', '.$person->employee_title() : "";
?>
<div class="profile_snippet">
	<div class="profile_snippet_header">
		<h4><a class="profile_snippet_header_link" href="<?= $person->url() ?>"><?= $name.$title ?></a></h4>
		<p><a class="profile_snippet_header_link" href="<?= $person->url() ?>"><?= $person->specialty() ?></a></p>
	</div>
	<div class="profile_snippet_img">
		<?php if($person->image()) { ?>
			<div class="img" style="background-image: url(<?= $person->image()->url() ?>);" title="<?= $name." ".$title." ".$person->specialty() ?>"></div>
		<?php } else { ?>
			<?php snippet('placeholder_face'); ?>
		<?php } ?>
	</div>
	<?php if(strlen($person->bio()) > 0) { ?>
		<div class="profile_snippet_text">
			<div><?= $person->bio()->kirbytext() ?></div>
			<a class="read_more" href="<?= $person->url() ?>">read more...</a>
		</div>
	<?php } ?>
</div>