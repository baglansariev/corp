<header id="header">
	<div class="header-top">
		<div class="container">
			<div class="top-1">
				<p class="top-phone">
					<i class="fas fa-mobile-alt"></i>
					<span>
						Телефон: +7 (7252) 27-00-40
					</span>
				</p>
				<p class="top-email">
					<i class="fas fa-envelope"></i>
					<span>
						Email: expertgroup-m@mail.ru
					</span>
				</p>
			</div>
			<div class="top-2">
				<p class="top-question">Есть вопросы?</p>
				<a href="#" id="modal-form">Заказать звонок</a>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="logo">
				<a href="/">
					<img src="/public/images/icons/logo.png" alt="">
				</a>
			</div>
			<nav class="menu">
				<ul>
					<? foreach($menu as $link):
						if($link['url'] == $uri_params):
							$class = 'class="menu-active"';
						else:
							$class = 'class=""';
						endif;
					?>
					<a href="<?= $link['url'] ?>" <?= $class ?>>
						<li><?= $link['name'] ?></li>
					</a>
					<? endforeach ?>
				</ul>
			</nav>
		</div>
	</div>
</header>