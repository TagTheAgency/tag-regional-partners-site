<div class="contact-popup-container container-fluid w-100 vh-100 fixed row justify-content-center align-items-center ml-0" data-popup="contact-popup">
	<div class="overlay" data-popup-close="contact-popup"></div>
	<div class="container">
		<div class="contact-popup">
			<div class="row justify-content-center">
				<div class="col-10 col-md-7">
					<div class="col-12 primary py-3 text-right">
						<i class="material-icons pointer pr-1 text-white hover" data-popup-close="contact-popup">close</i>
					</div>
					<div class="col-12 px-4 px-md-5 pb-5 pt-1 primary text-white">
						<h2 class="mb-3">Get In Touch.</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
					</div>
					<div id="contact-form-container" class="col-12 white p-5">
						<form method="POST" id="contact-me" class="contact-form" action="mailer.php">
							<input class="form-style" type="text" name="name" placeholder="Name" required>
							<input class="form-style" type="email" name="email" placeholder="Email" required>
							<input class="form-style" type="message" name="message" placeholder="Message" required>
							<br>
							<input class="button button-filled" type="submit" value="Send">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="region-popup-container container-fluid w-100 vh-100 fixed row justify-content-center align-items-center ml-0" data-popup="region-popup">
	<div class="overlay" data-popup-close="region-popup"></div>
	<div class="container">
		<div class="contact-popup">
			<div class="row justify-content-center">
				<div class="col-10 col-md-7">
					<div class="col-12 primary py-3 text-right">
						<i class="material-icons pointer pr-1 text-white hover" data-popup-close="region-popup">close</i>
					</div>
					<div class="col-12 px-4 px-md-5 pb-5 pt-1 primary text-white">
						<h2 class="mb-3">Become a partner.</h2>
						<p id="region-message">Looking to become our Regional Partner? Fill in your details below and we’ll be in touch.</p>
					</div>
					<div id="region-form-container" class="col-12 white p-5">
						<form method="POST" id="region-form" class="contact-form" action="region-mailer.php">
							<input id="region" class="form-style" type="text" name="region" value="" hidden>
							<input class="form-style" type="text" name="name" placeholder="Name" required>
							<input class="form-style" type="email" name="email" placeholder="Email" required>
							<input class="form-style" type="message" name="message" placeholder="Message" required>
							<br>
							<input class="button button-filled" type="submit" value="Send">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
