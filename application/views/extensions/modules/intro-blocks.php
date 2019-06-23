<? foreach($intro_blocks as $intro_block): ?>
<div class="intro-block col-xlg-4 col-lg-4">
	<div class="intro-cover">
		<p class="intro-text">
			<?= $intro_block['text'] ?>
		</p>
		<a href="/about" class="info-btn itro-btn">
			Подробнее
		</a>
	</div>
	<img src="<?= $intro_block['img'] ?>" alt="">
	<p class="intro-label">
		<?= $intro_block['title'] ?>
	</p>
</div>
<? endforeach ?>