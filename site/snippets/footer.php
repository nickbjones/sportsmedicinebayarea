	<div class="clear"></div>
	<footer role="contentinfo">
		<div class="inner-foot">
			<div class="in_blk contact">
				<span class="non-mobile"><?= page('contact')->phone() ?></span>  <!-- non-callable -->
				<a class="mobile" href="tel:<?= page('contact')->phone() ?>"><?= page('contact')->phone() ?></a>  <!-- callable -->
			</div>
			<div class="in_blk credits">
				<p><?= $site->copyright()->kirbytext() ?></p>
				<p>Center for Sports Medicine</p>
				<p>Saint Francis Memorial Hospital</p>
				<p>Website design by <a href="http://nickbjones.net/">Nick Jones</a></p>
			</div>
		</div>
	</footer>
</body>
</html>