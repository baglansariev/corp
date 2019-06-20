<?php
	return [
		'' => [
			'controller' => 'main',
			'action' => 'index',
		],
		'about' => [
			'controller' => 'about',
			'action' => 'index',
		],
		'reviews' => [
			'controller' => 'reviews',
			'action' => 'index',
		],
		'news' => [
			'controller' => 'news',
			'action' => 'newsList',
		],
		'news/[0-9]+' => [
			'controller' => 'news',
			'action' => 'oneNews',
		],
		'contact' => [
			'controller' => 'contact',
			'action' => 'index',
		],
	];