<? foreach($why_we as $value): ?>
<div class="whywe col-xlg-4 col-lg-4">
	<div class="whywe-img">
		<img src="<?= $value['img'] ?>" alt="">
	</div>
	<div class="whywe-text">
		<?= $value['text'] ?>
	</div>
</div>
<? endforeach ?>