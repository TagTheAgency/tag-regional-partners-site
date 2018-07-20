<?php require($path.'/templates/popups.php'); ?>
<nav>
	<div id="side-nav" class="side-nav-container px-1 py-5 d-none d-sm-flex fixed">
		<div class="nav-item">
			<i id="nav-menu-btn" class="material-icons" data-popup-open="nav-menu-popup">menu</i>
		</div>
		<div class="nav-item">
			<div class="logo">
				<span><a href="<?= $path  ?>">Regional<strong>Partners</strong></a></span>
			</div>
		</div>
		<div class="nav-item">
			<ul>
				<li class="mb-3"><i class="fab fa-twitter"></i></li>
				<li class="mb-3"><i class="fab fa-facebook-f"></i></li>
				<li><i class="fab fa-instagram"></i></li>
			</ul>
		</div>
	</div>
	<div class="primary mobile-nav d-flex d-sm-none py-4 px-2 text-white container fixed justify-content-center">
		<div class="row justify-content-between w-100">
			<div class="col-auto">
				<div class="nav-item">
					<i id="nav-menu-btn" class="material-icons" data-popup-open="nav-menu-popup">menu</i>
				</div>
			</div>
			<div class="col-auto">
				<div class="nav-item">
					<div>
						<span><a href="<?= $path  ?>">Regional<strong>Partners</strong></a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-menu-popup-container w-100 vh-100 fixed" data-popup="nav-menu-popup">
		<div class="nav-menu-popup primary">
			<div class="row justify-content-center pt-5 text-white">
				<div class="col-10 d-flex justify-content-end" data-popup-close="nav-menu-popup">
					<div class="close-menu">
						<i class="material-icons pointer">close</i>
					</div>
				</div>
				<div class="col-9 my-5">
					<p class="menu-logo">Regional<strong>Partners</strong></p>
				</div>
				<div class="col-9 mt-3">
					<ul>
						<li <?php if ($currentPage == "home"){?> class="active-page" <?php } ?>><a href="<?= $path  ?>">Home</a></li>
						<li <?php if ($currentPage == "about"){?> class="active-page" <?php } ?>><a href="<?= $path  ?>about/">About</a></li>
						<li class="hover" data-popup-open="contact-popup" data-popup-close="nav-menu-popup">Contact</li>
						<li>TAG</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="overlay" data-popup-close="nav-menu-popup"></div>
	</div>
</nav>
