@extends('master') @section('title', 'Home') @section('content')

<div class="container">
	<div class="row">

		<div class="col-xs-12">

			<p class="text-center">Online training program that allows runners to
				follow along a schedule and track their progress. Users are able to
				create an account and save their progress.</p>


			<!--5K -->
			<div class="card">
				<div class="card-block">
					<div class="container">
						<div class="row">
							<div class="col-xs-6">
								<div class="card-text">
									<h5>
										<strong>5K TRAINING </strong>
									</h5>
									<a href="#">Access Plans</a>
								</div>
							</div>
							<div class="col-xs-6">
								<img class="card-image-custom" src="/images/5kplan.png"></img>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="card">
				<div class="card-block">
					<div class="container">
						<div class="row">
							<div class="col-xs-6">
								<div class="card-text">
									<h5>
										<strong>10K TRAINING </strong>
									</h5>
									<a href="#">Access Plans</a>
								</div>
							</div>
							<div class="col-xs-6">
								<img class="card-image-custom" src="/images/10kplan.jpg"></img>
							</div>
						</div>
					</div>
				</div>
			</div>





		</div>

	</div>
</div>

@endsection
