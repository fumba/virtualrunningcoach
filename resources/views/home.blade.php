@extends('master') @section('title', 'Home - Virtual Running Coach')
@section('content')

<div class="container">
	<div class="row">

		<div class="col-xs-12">

			<p class="text-center">Online training program that allows runners to
				follow along a schedule and track their progress. Users are able to
				create an account and save their progress.</p>

			@if ($plans->isEmpty())
			<div class="alert alert-danger" role="alert">Plan Data not found.</div>
			@else @foreach ($plans as $plan)

			<!--5K -->
			<div class="card">
				<div class="card-block">
					<div class="container">
						<div class="row">
							<div class="col-xs-6">
								<div class="card-text">
									<h5>
										<strong>{!!$plan->name!!} TRAINING </strong>
									</h5>
									<a href="plan/{!!$plan->type!!}"><i class="fa fa-list"></i>
										View Schedule</a><br>
									<!--  -->
									@if( Auth::check()) <a href="plan/enroll/{!!$plan->type!!}"><i
										class="fa fa-plus"></i> Enroll</a>
									<!--  -->
									@else <a href="users/login"><i class="fa fa-plus"></i>
										Login to Enroll</a> @endif
								</div>
							</div>
							<div class="col-xs-6">
								<img class="card-image-custom"
									src="/images/{!!$plan->type!!}_plan.png"></img>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach @endif

		</div>

	</div>
</div>

@endsection
