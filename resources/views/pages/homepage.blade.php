@extends('master')

@section('title')
Homepage
@stop

@section('content')
		

	<!-- Section waar het aanmelden gepromoot wordt.  -->
	<section class="container-fluid xs-space-inside-sides-xsspace-inside-sides-xl no-overflow">

		<div class="row row-centered"> 

			<div class="col-lg-12 text-center">
				
				<div class=" space-outside-lg ">
					
					<h1>{{ $data['titel']->title }}</h1>

				</div>

			</div>

			<div class="col-lg-12 col-centered text-center space-outside-down-lg wow fadeInDown">
				
				<a href="/aanmelden-als-jongere">

					<div class="col-lg-4 col-xs-12">
							
						<div class="card type-1">	

							<div class="space-outside-down-md ">
								
								<div class="image circle-lg circle circle-lg">
									
									<img class="width-auto" src="{{ $data['zoekmentor']->photos->first()['path'] }}" alt="aanmelden als jongere">

								</div>

							</div>

							<div class=" space-outside-sm xs-space-outside-sm-none ">
									
								<h3> {{ $data['zoekmentor']->title }} </h3>
								
							</div>

							<div class=" space-outside-md ">

								<p> 

									{{ $data['zoekmentor']->body }}

								</p>

							</div>

							<div class=" space-outside-sm xs-space-outside-down-lg">

								<a class="btn-standard bg-secondary text-color-light light" href="/aanmelden-als-jongere">Aanmelden als jongere</a>

							</div>

						</div>

					</div>

				</a>

				<a href="/aanmelden-als-mentor">

					<div class="col-lg-4">
							
						<div class="card type-1">	

							<div class="space-outside-down-md">
								
								<div class="image circle circle-lg">
									
									<img class="width-auto" src="{{ $data['aanmeldenmentor']->photos->first()['path'] }}" alt="aanmelden als jongere">

								</div>

							</div>

							<div class=" space-outside-sm ">
									
								<h3> {{ $data['aanmeldenmentor']->title }} </h3>
								
							</div>

							<div class=" space-outside-md ">
								<p> 

									{{ $data['aanmeldenmentor']->body }}

								</p>

							</div>

							<div class=" space-outside-sm xs-space-outside-down-lg">

								<a class="btn-standard bg-secondary text-color-light light" href="/aanmelden-als-mentor">Aanmelden als mentor</a>

							</div>

						</div>

					</div>

				</a>


				<a href="/behaalde-resultaten">

					<div class="col-lg-4">
							
						<div class="card type-1">	

							<div class="space-outside-down-md">
								
								<div class="image circle circle-lg">
									
									<img class="width-auto" src="{{ $data['resultaten']->photos->first()['path'] }}" alt="aanmelden als jongere">

								</div>

							</div>

							<div class=" space-outside-sm ">
									
								<h3> {{ $data['resultaten']->title }} </h3>
								
							</div>

							<div class=" space-outside-md ">
								
								<p> 

									{{ $data['resultaten']->body }}

								</p>

							</div>

							<div class=" space-outside-sm xs-space-outside-down-lg">

								<a class="btn-standard bg-secondary text-color-light light" href="#bekijk-de-resultaten">Bekijk de resultaten</a>

							</div>

						</div>

					</div>
				
				</a>

			</div>

		</div>

	</section>


	<!-- Section waar blogverhalen weergegeven worden -->
	<section class="container-fluid space-inside-sides-xl xs-space-inside-sides-xl-none bg-main space-outside-up-lg no-overflow ">
		
		<div class="row"> 
			
			<!-- Ronde foto  -->
			<div class="col-lg-12 xs-space-inside-sides-xl-none space-inside-sides-xl xs-space-inside-sides-xs">

				<div class="col-lg-4 col-xs-12 xs-space-outside-down-xs space-outside-xl xs-text-center sm-text-center">
					
						<div class="image circle circle-xl wow fadeInDown">
							
							<img class="width-auto " src="{{ $data['nieuwsbericht']->first()->photos->first()['path'] }}" alt="Mentor Sara">

						</div>
					
				</div>	

				<!-- Titel, tekst en link bij foto  -->
				<div class="col-lg-8 col-xs-12 space-outside-xl xs-space-outside-up-lg xs-text-center wow fadeInDown">

				<div class="row ">
					
					<div class="col-lg-9 col-xs-12">
					
						<h1 class="text-color-light   xs-text-center xs-space-outside-down-sm"> {{ $data['nieuwsbericht']->first()->title }} </h1>

					</div>

					<div class="col-lg-3 col-xs-12 xs-text-center">
						
						<p class="text-color-light  "> {{ $data['nieuwsbericht']->first()->publish_date }} </p>

					</div>


				</div>

					

					

					<div class="divider bg-secondary space-outside-md" ></div>

					<p class="text-color-light space-outside-down-md xs-space-inside-sides-sm">
						
						{!! nl2br($data['nieuwsbericht']->first()->body) !!} 

					</p>

					<div class="row">
						
						<div  class="col-lg-12 xs-text-center xs-space-inside-sides-sm">

							<a href="/actueel" class="btn-round light text-color-light hidden-xs"> Meer nieuws <span class="circle circle-sm bg-secondary space-outside-xs"> > </span> </a>

							<a class="btn-standard visible-xs bg-secondary light text-color-light" href="/actueel">MEER LEZEN</a>
							
						</div>
						
					</div>



				</div>

			</div>

		</div>

	</section>


	<!-- Section voor promotie video en twitter -->
	<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl no-overflow">

		<div class="row row-centered"> 


			<div class="col-lg-12 text-center">
				
				<div class="space-outside-lg">
					
					<h1 class="wow fadeInDown"> {{ $data['actueeltitel']->title }} </h1>

				</div>

			</div>

			<div class="col-lg-6 space-outside-down-lg">
				
				<div class="image wow fadeInDown">
					
					<img class="height-auto" src="{{ $data['actueeltitel']->photos->first()['path'] }}" alt="actueel nieuws over mentor4you" />

				</div>	

			</div>
			
			<div class="col-lg-6 space-outside-down-lg wow fadeInDown" >
				
				<a class="twitter-timeline" data-lang="nl" data-height="540" data-theme="light" data-link-color="#01569B" href="https://twitter.com/M4YDrenthe">Tweets by M4YDrenthe</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

			</div>


		</div>
		<!-- Einde van de row -->


		<div class="divider bg-accent"></div>

	</section>



	<!-- Section voor partners -->
	<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl xs-space-outside-xs space-outside-lg no-overflow">

		<div class="row row-centered"> 

			<div class="col-lg-12 text-center">
				
				<div class="space-outside-lg fadeInDown wow">
					
					<h1> {{ $data['partnerstitel']->title }} </h1>

				</div>

			</div>

			@foreach($data['partners'] as $partner)



			<div class="col-lg-3 fadeInDown wow">
				
				<div class="image rectangular-img ">
					
					<img class="height-auto" src="{{ $partner->photos->first()['path'] }}"   />

				</div>

			</div>

			

			@endforeach

		</div>
		<!-- Einde van de row -->


	</section>	



@stop