<?php snippet('header') ?>
<main class="body contact" role="main">
	<section class="contact">
		<h2>Saint Francis Memorial Hospital</h2>
		<div class="top">
			<div class="in_blk left">
				<p>
					<span class="non-mobile"><?= (page()->phone() == '') ? '' : page()->phone() ?></span>
					<a class="mobile" href="tel:<?= (page()->phone() == '') ? '' : page()->phone() ?>"><?= (page()->phone() == '') ? '' : page()->phone() ?></a>
				</p>
				<?= page()->email() == '' ? '' : '<p>'.page()->email().'</p>' ?>
				<p><?= page()->address() ?><br><?= page()->city().', '.page()->state().' '.page()->zip() ?></p>
				<p><?= page()->description()->kirbytext() ?></p>
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
				<p class="see_links">
					<a href="<?= site()->url() ?>/physicians">See Physicians</a>
					<a href="<?= site()->url() ?>/physical-therapists">See Physical Therapists</a>
				</p>
				<h3>Before Your Visit</h3>
				<p>Please download these forms and fill it out prior to your visit to avoid delay. If you have images you would like to review with your provider, bring both the radiologist’s report and the CD of the raw images.</p>
				<p><a href="<?= page('home') ?>/new-patient-form.pdf">New patient forms</a></p>
<!-- 				<p>Please read these directions if you are about to have surgery one week before your operation:</p>
				<p><a href="#">Preoperative instructions</a></p> -->
			</div>
		</div>
	</section>
</main>
<?php snippet('footer') ?>