<?php snippet('header') ?>
<main class="body about" role="main">
	<section class="about">
		<div class="top">
			<div class="in_blk left">
				<h2><?= $page->title()->html() ?></h2>
				<p><a class="phone" href="tel:<?= page()->phone() == '' ? '' : page()->phone() ?>"><?= page()->phone() == '' ? '' : page()->phone() ?></a></p>
				<?= page()->email() == '' ? '' : '<p>'.page()->email().'</p>' ?>
				<p><?= page()->address() ?><br><?= page()->city().', '.page()->state().' '.page()->zip() ?></p>
				<p class="see_links">
					<a href="<?= site()->url() ?>/physicians">See Physicians</a>
					<!-- <span class="dvdr">|</span> -->
					<a href="<?= site()->url() ?>/physical-therapists">See Physical Therapists</a>
				</p>
				<p><?= page()->text() ?></p>
			</div>
			<div class="in_blk right">
				<?php if($image = page()->image()): ?>
					<img src="<?= $image->url() ?>" alt="Saint Francis Memorial Hospital About Image">
				<?php endif ?>
			</div>
		</div>
		<div class="bottom">
			<div class="in_blk left">
				<iframe src="<?= $page->map_src() ?>" width="100%" height="450" frameborder="0" style="border:0"></iframe>
			</div>
			<div class="in_blk right">
				<h3>Before Your Visit</h3>
				<p>Please download these forms and fill it out prior to your visit to avoid delay. If you have images you would like to review with your provider, bring both the radiologist’s report and the CD of the raw images.</p>
				<p><a href="#">New patient forms</a></p>
				<p>Please read these directions if you are about to have surgery one week before your operation:</p>
				<p><a href="#">Preoperative directions</a></p>
			</div>
		</div>
	</section>
</main>
<?php snippet('footer') ?>