<!DOCTYPE html>
<html lang="en" dir="ltr">
	<?php $currentPage = 'about'; ?>
	<!-- Header -->
	<?php
		$path = './';
		if($currentPage !== 'home'){
			$path = '../';
		}
	 ?>
	<?php include('../templates/header.php') ?>
	<body>
		<!-- Page Templates -->
		<?php require('../templates/nav.php') ?>
		<div class="main w-100 pt-5 pt-md-5 pl-sm-5">
			<div class="container mt-5 mt-md-5">
				<div class="row justify-content-center">
					<div class="col-12 col-md-9 col-xl-10 row justify-content-center align-items-md-end">
						<div class="col-12 col-md-7">
							<h2 class="primary-text">About TAG <br>Regional Partners</h2>
						</div>
						<div class="col-12 col-md-3">
							<div class="img-container">
								<img src="<?= $path ?>/img/about-graphic.png" alt="">
							</div>
						</div>
						<div class="col-12 order-3">
							<hr>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-12 col-md-9 col-xl-10 row justify-content-center">
						<div class="col-12">
							<p>TAG The Agency was established in 2015 with a focus on providing digital storytelling and advertising solutions to leading brands.</p>
							<br>
							<p>We also established the agency with a focus on disruption, not in the day to day world of
							advertising as we’ve been doing that for years, but how an agency is run, how and who we
							deliver work for. This internal focus has been on delivering a culture that inspires, supports and
							builds people up. At TAG The Agency we are a family that is focused on the success of every
							member. You have the ability to join this unique and dynamic family!</p>
						</div>
						<div class="col-12">
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require('../templates/footer.php') ?>
	</body>
</html>
