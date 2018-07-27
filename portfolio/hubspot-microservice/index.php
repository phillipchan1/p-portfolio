<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include '../../partials/head.php';?>

<body>
	<?php include '../../partials/header.php';?>

	<div class="case-header dark">
		<div class="case-header">
			<div class="media-wrapper">
				<img src="/portfolio/hubspot-microservice/banner.png" class="case-header-image " alt="">
				<div class="image-overlay"></div>
			</div>
			<div class="large-12 columns">
				<h2>Data crunching in the cloud</h2>
			</div>
			<p class="scroll-down-arrow">
				<span class="scroll-down">
					<i class="icon-arrows-slim-down"></i>
				</span>
			</p>
		</div>
		<div class="case-study-content">
			<div class="full no-right">
				<div class="text-block-right">
					<p class="big-text">With a growing customer base and wanting clean data to intelligently work with the spectrum of leads, Liferay needed to expand upon their marketing tool Hubspot to get better data for customer interaction.</p>
					<p>I built a headless Node microservice that worked intelligently to update customer data in Hubspot with their API so that marketing could get region-specific collateral to its customers. </p>
					<div class="three spacing"></div>
					<div class="row">
						<div class="large-5 columns">
							<div class="spacing"></div>
							<h3 class="meta-title">client</h3>
							<p class="meta-data">Liferay</p>
						</div>
						<div class="large-7 columns">
							<div class="spacing"></div>
							<h3 class="meta-title">Main roles</h3>
							<p class="meta-data">Lead Developer</p>
						</div>
					</div>
					<div class="spacing"></div>
					<div class="row">
						<div class="large-5 columns">
							<h3 class="meta-title">Category</h3>
							<p class="meta-data">Microservice</p>
						</div>
						<div class="large-7 columns">
							<h3 class="meta-title">Project timeline</h3>
							<p class="meta-data">4 weeks</p>
						</div>
					</div>
					<div class="spacing"></div>
					<div class="row">
						<div class="large-5 columns">
							<h3 class="meta-title">Technologies</h3>
							<p class="meta-data">Node, Javascript, Express, Oauth</p>
						</div>
					</div>
					<div class="four spacing"></div>
				</div>
			</div>

			<div class="full no-right">
				<div class="text-block-right">
					<h3>The challenge.</h3>
					<p class="big-text">The challenge with working third party software for a growing business is ensuring their application features support. </p>

					<p>Unfortunately, while Hubspot has been critical to Liferay’s marketing success, its native features couldn’t support the level of granularity necessary to provide the proper segmentation in their channeled communication. Thanks to Hubspot’s secure and fast API, and Node’s strengths of quick deployment, there may have been a solution in place.</p>
					<div class="four spacing"></div>
					<h3>The solution.</h3>
					<p class="big-text">To augment Hubspot, I built a microservice that performed several data manipulation tasks for our customers. It would run this headless in the background deployed to Wedeploy abstracted away from needing any marketers to tamper with the data.</p>
					<p>The result is that Liferay marketing was able to get data to the level of granularity to deliver channeled communication to its customers. </p>

					<div class="four spacing"></div>
					<div id="process-hint">
						<div class="action-hint">Click & drag to explore.</div>
						<div class="action-hint-for-touch">Swipe to explore.</div>
					</div>
				</div>
				<div class="swiper-container" id="process">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<h3>01. Oauth</h3>
							<p>Leveraging node, we created secure connection between Liferay's servers and Hubspot's. </p>
						</div>
						<div class="swiper-slide">
							<h3>02. Web Hooks</h3>
							<p>I tapped into Hubspot's web hooks to listen for customer-driven events to drive data transactions</p>
						</div>
						<div class="swiper-slide">
							<h3>03. Deployed to the Cloud</h3>
							<p>The node app was deployed to Heroku where it ran its jobs in the cloud</p>
						</div>
						<div class="swiper-slide">
							<h3>04. Data Integrity</h3>
							<p>Liferay Marketing now has clean data to work with on our servers</p>
						</div>
					</div>
				</div>

			</div>
			<div class="full light-grey">
				<div class="large-7 columns">
					<h3>The result.</h3>
					<p class="big-text">With the microservice in the cloud, Liferay's marketing department had the granularity it desired in its customer data resulting in clearer channeled communications.</p>
				</div>
			</div>

			<!-- <div class="full">
				<div class="large-7 columns large-centered">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet cumque quidem nulla officia consequuntur, eligendi repellat, laborum perferendis nihil, debitis officiis consectetur tenetur quo eaque quam expedita quibusdam atque inventore?</p>
				</div>
			</div>
			<div class="full purple colored-bg">
				<p class="centered-text">
					<img src="/portfolio/hubspot-microservice/laptop.jpg" alt="">
				</p>
			</div>
			<div class="full no-right white">
				<div class="text-block-right">
					<h3>Our client is happy.</h3>
					<div class="testimonials">
						<blockquote class="big-text">
							"Lorem ipsum dolor sit amet, perferendis tempora ratione dolore, maiores ea culpa optio animi deleniti. Quis quos cum illo quod sapiente dolorum, eveniet praesentium."
						</blockquote>
						<p>- Name, position</p>
					</div>
				</div>
			</div> -->

			<!-- Work with us -->
			<?php include '../../components/work-with-us.php';?>

			<div class="full white centered-text">
				<a href="cases.html" class="boxed black button">Back to all cases</a>
			</div>
		</div>

		<?php include '../../partials/footer.php';?>
	</body>

	</html>