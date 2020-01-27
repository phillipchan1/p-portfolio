<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include '../../partials/head.php';?>

<body>
	<?php include '../../partials/header.php';?>

	<div class="case-header dark">
		<div class="media-wrapper">
			<video muted autoplay preload>
				<source src='/portfolio/esi/screencast.mov'>
				</video>
			</div>
			<div class="large-12 columns">
				<h2>Mitigating California Wildfires Through Cutting-Edge Technology</h2>
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
					<p class="big-text">
						California has been experiencing detrimental wildfires for the last decade claiming both lives and land.
					</p>
					<p>
						 After PG&E's bankruptcy due to one of its transformers being faulted for starting the wildifre, SoCal Edison decided to triple down efforts on mitigating wildfires. At the center of that effort is leveraging technology to shore up the battle.
					</p>
					<div class="three spacing"></div>
					<div class="row">
						<div class="large-5 columns">
							<div class="spacing"></div>
							<h3 class="meta-title">client</h3>
							<p class="meta-data">SoCal Edison</p>
						</div>
						<div class="large-7 columns">
							<div class="spacing"></div>
							<h3 class="meta-title">Main roles</h3>
							<p class="meta-data">Full Stack Developer</p>
						</div>
					</div>
					<div class="spacing"></div>
					<div class="row">
						<div class="large-5 columns">
							<h3 class="meta-title">Category</h3>
							<p class="meta-data">Mobile iOS App</p>
						</div>
						<div class="large-7 columns">
							<h3 class="meta-title">Project timeline</h3>
							<p class="meta-data">Multi-year</p>
						</div>
					</div>
					<div class="spacing"></div>
					<div class="row">
						<div class="large-5 columns">
							<h3 class="meta-title">Technologies</h3>
							<p class="meta-data">iOS, React Native, Redux, Watermelon, Node.js, Feathers, Azure, Docker, Azure Functions, Microservices, CosmosDB, SQL, Azure Event Hub</p>
						</div>
					</div>


				</div>
			</div>
			<div class="full">
				<div class="swiper-container" id="office-images">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="/portfolio/esi/dashboard.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/portfolio/esi/workorder.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/portfolio/esi/asset.jpg" alt="">
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
				<!-- Add Arrows -->
				<div class="swiper-arrows">
					<div class="swiper-button-next office"></div>
					<div class="swiper-button-prev office"></div>
				</div>
			</div>
			<div class="full no-right">
				<div class="text-block-right">
					<h3>The challenge.</h3>
					<p class="big-text">In an aging company, making data-driven decisions becomes a challenge when that data is old and outdated.</p>

					<p>In addition to the data being old, the processes for capturing data is outdated. Field engineers were dragging paper maps to the field, and calling in to operators updates.</p>
					<div class="four spacing"></div>
					<h3>The solution.</h3>
					<p class="big-text">To bring an old utility company's processes up to speed, this iPad app was built. Field engineers can now take the iPad's with network connectivity to the field and conduct their data capture.   </p>
					<p>The data captured is funneled to Machine Learning layers, providing the company with real-time data on its assets counting in the millions. The data provides key decision makers in both utility and government positions strategic information in order to prevent the next California wildfire</p>

					<div class="four spacing"></div>
					<div id="process-hint">
						<div class="action-hint">Click & drag to explore.</div>
						<div class="action-hint-for-touch">Swipe to explore.</div>
					</div>
				</div>
				<div class="swiper-container" id="process">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<h3>01. Microservice-driven Data Later</h3>
							<p>Rather than contributing to unwieldy monolithic applications, the data layer is broken up into manageable independent meshed microservices. This mesh now handles the movement of data of datasets numbering in the millions.</p>
						</div>
						<div class="swiper-slide">
							<h3>02. React Native to the Limits</h3>
							<p>Of most use cases of React Native in the wild, the limits were pushed as this app had to handle large datasets</p>
						</div>
						<div class="swiper-slide">
							<h3>03. Offline First</h3>
							<p>Field engineers can take and finish their work regardless of network connectivity, important in highly rural areas</p>
						</div>
						<div class="swiper-slide">
							<h3>04. Machine Learning</h3>
							<p>Data captured in various client endpoints is aggregated into a data layer that is computed against with Machine Learning Algorithms to provide statistically significant findings over millions of data points.</p>
						</div>
						<div class="swiper-slide">
							<h3>05. Multiversioned</h3>
							<p>As every increment yieled exponential value, INS continues to be developed in multiple versions.</p>
						</div>
					</div>
				</div>

			</div>
			<div class="full light-grey">
				<div class="large-7 columns">
					<h3>The result.</h3>
					<p class="big-text">SoCal Edison wields a new sword–cutting edge technology to make our world safer</p>
				</div>
			</div>
			<div class="full red colored-bg">
				<p class="centered-text">
					<img src="/portfolio/liferay/responsive.png" alt="">
				</p>
			</div>


			<!-- Work with us -->
			<?php include '../../components/work-with-us.php';?>

			<?php include '../../components/back-to-cases.php';?>
		</div>

		<?php include '../../partials/footer.php';?>
	</body>

	</html>