<!-- Section voor promotie video en twitter -->
	<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl no-overflow">
		<div class="row row-centered">

			<div class="col-lg-12 text-center">
				<div class="space-outside-lg">
					<h1 class="wow fadeInDown" text-inject>
						<?php $section->render('title', 4, $sections); ?>
					</h1>
				</div>
			</div>
			<div class="col-lg-6 space-outside-down-lg">
				<div class="image wow fadeInDown">
					<img class="height-auto" src="<?php $section->render('photo', 4, $sections); ?>" alt="actueel nieuws over mentor4you" />
				</div>
			</div>
			<div class="col-lg-6 space-outside-down-lg wow fadeInDown" >
				<a class="twitter-timeline" data-lang="nl" data-height="540" data-theme="light" data-link-color="#01569B" href="https://twitter.com/M4YDrenthe">Tweets by M4YDrenthe</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>

		</div>
		<!-- Einde van de row -->
		<div class="divider bg-accent"></div>
	</section>
