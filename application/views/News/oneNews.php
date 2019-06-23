<?= $header ?>
<main>
	<div class="container">
		<? if(!empty($one_news)): ?>
		<? foreach($one_news as $article): ?>
		<div class="one-news row">
			<h1><?= $article['title'] ?></h1>
			<div class="one-news-content col-xlg-12 col-lg-12">
				<div class="one-news-img">
					<img src="<?= $article['img'] ?>" alt="">
				</div>
				<div class="one-news-text">
					<p class="one-news-date">
						<?= $article['date_insert'] ?>
					</p>
					<p>
						<?= $article['full_text'] ?>
					</p>
				</div>
			</div>
		</div>
		<? endforeach ?>
		<? else: ?>
		<h1><?= $news_error ?></h1>
		<? endif ?>
	</div>
</main>
<?= $footer ?>