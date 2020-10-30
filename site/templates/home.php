<?php snippet('header') ?>
<main class="body home" role="main">
	<div id="hero">
		<div class="slide0">
			<img src="assets/images/heroes/0.png" alt="Industry Leading Physicians Healing Patients Welcome Image">
			<p class="msg0">Industry Leading Physicians<br>Healing Patients</p>
		</div>
		<div class="slide1">
			<img src="assets/images/heroes/1.png" alt="Getting Athletes Back in Their Game Welcome Image">
			<p class="msg1">Getting Athletes<br>Back in Their Game</p>
		</div>
		<div class="slide2">
			<img src="assets/images/heroes/2.png" alt="Located in San Francisco at Saint Francis Memorial Hospital Welcome Image">
			<p class="msg2">Located in San Francisco<br>at Saint Francis Memorial Hospital</p>
		</div>
		<?= js('assets/js/hero_slide.js') ?>
	</div>
	<div id="main">
		<section class="intro">
			<div>
				<div class="in_blk title">
					<h2>About</h2>
				</div>
				<div class="in_blk text">
					<?= $page->text()->kirbytext() ?>
				</div>
			</div>
		</section>
		<section class="associations">
			<div class="in_blk">
				<a href="https://www.aaos.org/"><img src="assets/images/logos/logo_aaos_sm.jpg" alt="AAOS logo"></a>
			</div>
			<div class="in_blk">
				<a href="https://www.saintfrancisfoundation.org/"><img src="assets/images/logos/stf_found.png" alt="Saint Francis Foundation Logo"></a>
			</div>
		</section>
	</div>
</main>
<?php snippet('footer') ?>