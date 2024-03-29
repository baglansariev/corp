<?= $header ?>
<main>
	<div class="page-heading">
		<div class="container">
			<h3>Новости</h3>
		</div>
	</div>
	<div class="news container">
		<div class="row">
			<? foreach($news as $article): ?>
			<div class="one-news col-xlg-4 col-lg-4">
				<div class="news-image">
					<a href="/news/<?= $article['id'] ?>">
						<img src="<?= $article['img'] ?>" alt="">
					</a>
					<span class="date">
						<?= $article['date_insert'] ?>
					</span>
				</div>
				<div class="news-text">
					<p class="news-heading">
						<a href="/news/<?= $article['id'] ?>">
							<?= $article['title'] ?>
						</a>
					</p>
					<p class="news-intro-text">
						<?= $article['short_text'] ?>
					</p>
				</div>
			</div>
			<? endforeach ?>
		</div>
	</div>
</main>
<?= $footer ?>