<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include '../partials/head.php';?>

<body>
	<?php include '../partials/header.php';?>

	<div class="site-intro" id="contact-content">
		<h2>
			Contact us.
		</h2>

		<?php include '../components/contact-info.php';?>

		<ul>
			<li><a href="https://www.github.com/phillipchan2" target="_blank"><i class='fa fa-github'></i></a></li>
		</ul>
	</div>
</div>
<div class="action-hint quick">Scroll or drag to explore.</div>
<div class="action-hint-for-touch">Swipe to explore.</div>

<!-- Swiper -->
<div class="swiper-container" id="contact">
	<div class="swiper-wrapper">
		<div class="swiper-slide media">
			<img src="contact/contact-3.jpg" alt="">
		</div>
		<div class="swiper-slide">
			<div class="large-12 columns">
				<div class='form'>
					<h3 class="white">We are ready.</h3>
					<form id='contact_form' method='POST' class="blahlab_contact_form">
						<div class="large-6 small-5 columns">
							<input class='required' name='name' placeholder='NAME' type='text'>
						</div>
						<div class="large-6 small-7 columns">
							<input class='required email' name='email' placeholder='EMAIL' type='text'>
						</div>
						<div class="large-12 columns">
							<input class='required' name='subject' placeholder='SUBJECT' type='text'>
							<textarea class='required' name='message' placeholder='MESSAGE'></textarea>
							<input class='button white boxed contact-button' type='submit' value="Send it">
							<p class='thanks hide'>
								Thanks for contacting us, we'll be in touch soon!
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include '../partials/footer.php';?>
</body>

</html>