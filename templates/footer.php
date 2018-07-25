<div class="main container mt-3 mt-md-5">
	<div class="row justify-content-center">
		<div class="col-12 col-md-10 row justify-content-center align-items-md-center">
			<div class="col-10 col-md-4 text-center">
				<div class="img-container">
					<img src="<?= $path ?>img/placeholder-2.png" alt="contact graphic">
				</div>
			</div>
			<div class="col-12 col-md-8 mt-3 mt-md-0">
				<h2 class="primary-text mb-3 mb-md-0">Interested in becoming a TAG Regional Partner?</h2>
				<?php if( $currentPage == 'home'): ?><p>Select from one of the regions above or click the button below.</p><?php endif; ?>
				<div class="d-flex mt-4">
					<div class="button button-filled" data-popup-open="sign-up-popup">Sign Up Today</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="pt-5">
	<div class="container-fluid secondary secondary-text py-5 mt-5">
		<div class="main container">
			<div class="row justify-content-center">
				<div class="col-10 row justify-content-center justify-content-md-between text-center">
					<ul>
						<li class="mr-2 mr-md-5"><a href="<?= $path ?>">Home</a></li>
						<li class="mr-2 mr-md-5"><a href="<?= $path ?>about">About</a></li>
						<li class="mr-2 mr-md-5 hover" data-popup-open="contact-popup">Contact</li>
						<li><a href="https://tagtheagency.com" target="_blank">TAG The Agency</a></li>
					</ul>
					<span id="top-btn" class="hover col-12 col-md-auto mt-3 mt-md-0">To Top</span>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="<?= $path ?>js/app.js" charset="utf-8"></script>
<script src="<?= $path ?>js/script.js" charset="utf-8"></script>
