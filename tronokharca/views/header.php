<?php Session::init(); ?>
<!DOCTYPE html>

<head>
	<title><?php echo PAGENAME; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
</head>

<body>
	<article>
		<header>
			<nav id="header" class="d-flex justify-content-center border-bottom border-dark bg-header mb-5">

				<a href="<?php echo URL; ?>" class="d-flex justify-content-center p-2 ml-auto">
					<h5 class="m-2 text-orange">Kezdőlap</h5>
				</a>

				<a href="<?php echo URL; ?>characters" class="d-flex justify-content-center p-2 ml-3">
					<h5 class="m-2 text-orange">Karakterek</h5>
				</a>

				<a href="<?php echo URL; ?>contact" class="d-flex justify-content-center p-2 ml-3">
					<h5 class="m-2 text-orange">Kapcsolat</h5>
				</a>

				<?php if (Session::get('loggedIn')) : ?>

					<?php if (Session::get('isAdmin')) { ?>
						<a href="<?php echo URL; ?>admin" class="d-flex justify-content-center p-2 ml-3">
							<h5 class="m-2 text-orange">cPanel</h5>
						</a>
					<?php } ?>

					<a href="#" class="d-flex justify-content-center p-2 ml-auto border-right border-primary">
						<h5 class="m-2"><?php echo Session::get("username"); ?></h5>
					</a>

					<a href=" <?php echo URL; ?>dashboard/logout" class="d-flex justify-content-center p-2 ">
						<h5 class="m-2 text-primary">Kilépés</h5>
					</a>

				<?php else : ?>

					<a href="<?php echo URL; ?>login" class="d-flex justify-content-center p-2 -left ml-auto">
						<h5 class="m-2 text-orange">Belépés</h5>
					</a>

					<a href="<?php echo URL; ?>registration" class="d-flex justify-content-center p-2 ">
						<h5 class="m-2 text-orange">Regisztrálás</h5>
					</a>

				<?php endif; ?>

			</nav>
		</header>