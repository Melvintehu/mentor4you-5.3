<!-- background -->
<div class="header no-overflow"> 
	
<!-- Container voor centreren van content -->
	
		<div class="container-fluid">
			
		<!-- Row wrapper voor content -->
			<div class="row ">

			<a href="/">
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 main-logo hidden-xs ">

					<img class="main-logo" src='../images/mentor4you-logo-web.png' />

				</div>

			</a>
			<!-- Columns voor content indelingen -->

			<!-- navigatie -->
		
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					
					<div class="placeholder-nav"> 

					<!-- navbar -->
							<nav class="navbar navbar-default navbar-right xs-clear-float"> 

							  <div class="container-fluid">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">

							      <button type="button" class="navbar-toggle collapsed xs-space-outside-right-sm" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

							        <span class="sr-only">Toggle navigation</span>

							        <span class="icon-bar"></span>

							        <span class="icon-bar"></span>

							        <span class="icon-bar"></span>

							      </button>
							    
							    </div>

							    <!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							      <ul class="nav navbar-nav xs-text-center xs-space-inside-down-sm">

							        <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ URL::to('/') }}"><a href="/">HOME <span class="sr-only">(current)</span></a></li>

							        <li class="{{ Request::path() == '/over-ons' ? 'active' : '' }}"><a href=""><a href="{{ URL::to('over-ons') }}">MENTOR4YOU</a></li>

							       	<li class="{{ Request::path() == '/actueel' ? 'active' : '' }}"><a ><a href="{{ URL::to('actueel') }}">ACTUEEL</a></li>

							       <!-- 	<li><a href="/behaalde-resultaten">RESULTATEN</a></li> -->

							       	<li class="{{ Request::path() == '/steun-ons' ? 'active' : '' }}"><a ><a href="{{ URL::to('steun-ons') }}">STEUN ONS</a></li>

							       	<li class="{{ Request::path() == '/contact' ? 'active' : '' }}"><a ><a href="{{ URL::to('contact') }}">CONTACT</a></li>

							      </ul>
							      
							    </div><!-- /.navbar-collapse -->

							  </div><!-- /.container-fluid -->

							</nav>

						<!-- end of navbar -->
					</div>
				
				</div>

			</div>

		</div>

</div>


<section class="container-fluid xs-space-inside-sides-xs space-inside-sides-xl bg-secondary no-overflow">

	<div class="row">

		<div class="col-lg-4  space-inside-sm xs-clear-float right">

				<div class="row">
					
					<div class="col-lg-6 col-xs-12 ">
						
						<p class="text-color-light font-xs xs-clear-float  right">
				
							<span class="bold text-color-main xs-space-inside-left-xs space-inside-left-md space-inside-right-sm xs-space-insi "> T </span> 06-24967211
				
						</p>

					</div>

					<div class="col-lg-6 col-xs-12 xs-space-outside-down-xs">
						
						<p class="text-color-light font-xs xs-clear-float  right">
		
							<span class="bold text-color-main xs-space-inside-left-xs space-inside-left-md space-inside-right-sm "> E </span> 
							
							info@mentor4you.nl
						
						</p>
						
					</div>

				</div>

				
		
				
			
		</div>

	</div>

</section>


