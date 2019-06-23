<? foreach($services_text as $text): ?>
<div class="service col-xlg-4 col-lg-4">
	<div class="service-icon">
		<span>
			<i class="fas fa-calendar-week"></i>
		</span>
	</div>
	<div class="service-text">
		<p class="service-text-block">
			<?= $text ?>
		</p>
	</div>
</div>
<? endforeach ?>