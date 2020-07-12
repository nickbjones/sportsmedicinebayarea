<div class="post">
	<div class="post_header">
		<h3><?= $post->title() ?></h3>
		<p><?= $post->date('M d, Y') ?></p>
	</div>
	<div class="post_body">
		<p><?= $post->text()->kirbytext() ?></p>
	</div>
</div>