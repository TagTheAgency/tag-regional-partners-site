<!DOCTYPE html>
<html lang="en" dir="ltr">
	<?php $currentPage = 'home'; ?>
	<!-- Header -->
	<?php
		$path = './';
		if(!$currentPage == 'home'){
			$path = '../';
		}
	 ?>
	<?php include('templates/header.php') ?>
	<body>
		<!-- Page Templates -->
		<?php require('templates/nav.php') ?>
		<?php require('templates/main.php') ?>
		<?php require('templates/footer.php') ?>
	</body>
</html>
