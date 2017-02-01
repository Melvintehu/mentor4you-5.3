@extends('master')

@section('title')
	Team
@stop

@section('content')

<section class="container-fluid xs-space-inside-sides-xl-none space-inside-sides-xl space-outside-lg no-overflow">
		<div class="row">
			
			<div class="col-lg-12 space-outside-down-lg text-center fadeInDown wow">

				<h1 class="">{{ $data['team']->title }}</h1>

			</div>


			<div class="col-lg-12 space-outside-down-md xs-text-center">			

					<div class="col-lg-8 fadeInDown wow">

						<h3 class="space-outside-down-sm ">Onderdeel van Spinn</h3>

						<p class="">
							Mentor4you is onderdeel van Spinn
						</p>

						<div class="image rectangular-img ">

							<img class="height-auto" src="/partner/photos/1473166226@2x-spinn-logo-web-top.png" />

						</div>

					</div>



				</div>


				


				<div class="row row-centered ">
					@foreach($data['teammembers'] as $teammember)
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-centered">
						<div class="card type-4">
							<div class="top background-primary">

							</div>
							<div class="text-center">
								<h3 class='space-outside-down-md'> {{ $teammember->first_name }} {{ $teammember->last_name }}</h3>
								<h5> {{ $teammember->role }} </h5>
								<h5 class='space-outside-down-md'> {{ $teammember->description }} </h5>
							</div>
							<div class="image round">
								@if($teammember->first_name == 'Karin')
									<img class="img-responsive" src="images/karin.jpg">
								@elseif($teammember->first_name == 'Maran')
									<img class="img-responsive" src="images/maran.jpg">
								@else
									<img class="width-auto" src="http://www.bakkerijkosters.nl/afbeeldingen/geen_afbeelding_beschikbaar_gr.gif">
								@endif
							</div>
							<div style="clear:both;"></div>
						</div>
					</div>
					@endforeach
				</div>


		</div>
	</section>



@stop
