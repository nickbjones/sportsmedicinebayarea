<div id="ham_btn">
	<span class="ham_bar"></span>
	<span class="ham_bar"></span>
	<span class="ham_bar"></span>
</div>
<ul id="ham_menu">
	<?php foreach($pages->visible() as $p): ?>
		<li><a href="<?= $p->url() ?>"><?= html($p->title()) ?></a></li>
	<?php endforeach ?>
</ul>
<div id="phone_btn">
	<a href="tel:<?= page('contact')->phone() ?>"><img src="<?= site()->url() ?>/assets/images/Telephone.png" alt="Call Icon"></a>
</div>
