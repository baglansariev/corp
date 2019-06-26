<? foreach($advantages as $advantage):?>
<div class="advantage col-xlg-3 col-lg-3 col-md-6 col-sm-6">
	<span class="advantage-icon">
		<?= $advantage['icon'] ?>
	</span>
	<span class="count">
		<?= $advantage['count'] ?>
	</span>
	<span class="advantage-title">
		<?= $advantage['title'] ?>
	</span>
</div>
<? endforeach ?>