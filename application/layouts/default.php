<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="<?= $metaDesc ?>">
	<meta name="keywords" content="<?= $metaKey ?>">
	<title><?= $title ?></title>
	<link rel="shortcut icon" href="/public/images/icons/favicon.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="/public/style/css/main.css">
	<link rel="stylesheet" href="/public/style/css/bootstrap/bootstrap-grid.css">
	<link rel="stylesheet" href="/public/style/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="/public/style/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="/public/style/owl-carousel/owl.theme.default.min.css">
	<script type="text/javascript" src="/public/style/js/jquery-3.4.0.min.js"></script>
	<script type="text/javascript" src="/public/style/js/app.js"></script>
	<script src="/public/style/owl-carousel/owl.carousel.min.js"></script>
	<script src="/public/style/particles/particles.min.js"></script>
</head>
<body>
	<? include 'application/layouts/helpers/header.php' ?>
	<main>
		<div id="wrapper">
			<?= $content ?>
		</div>
	</main>
	<? include 'application/layouts/helpers/footer.php' ?>
	<script type="text/javascript" src="/public/style/js/bootstrap/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="/public/style/js/bootstrap/bootstrap.js"></script>
</body>
</html>