@extends('master') @section('title', $plan->name.' TRAINING')
@section('content')

<div class="container col-md-8 col-md-offset-2">

	@if ($plan->name)
	<div class="alert alert-info">{!! $plan->name !!} TRAINING</div>
	@endif @if ($weeks->isEmpty())
	<p>Data not found.</p>
	@else
	<!-- alerts -->
	@if (session('status'))

	<div id="alert_message" class="alert alert-success">
		<span class="close" data-dismiss="alert">x</span> <span>{{
			session('status') }}</span>
	</div>
	@endif

	<div id="accordion" role="tablist" aria-multiselectable="true">
		@foreach ($weeks as $week)
		<div class="card card-text">
			<div class="card-header" role="tab" id="heading{!! $week->id !!}">
				<h5 class="mb-0">
					<a data-toggle="collapse" data-parent="#accordion"
						href="#collapse{!! $week->id !!}"
						aria-controls="collapse{!! $week->id !!}"> Week {!! $week->order
						!!} </a>
				</h5>
			</div>

			<div id="collapse{!! $week->id !!}"
				class="{!! $week->current ? 'collapse in': 'collapse' !!}"
				role="tabpanel" aria-labelledby="heading{!! $week->id !!}">
				<div class="card-block">

					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life
						accusamus terry richardson ad squid. 3 wolf moon officia aute, non
						cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
						laborum eiusmod.</p>

					<div class="table-responsive plans-table ">
						<table class="table table-inverse">
							<thead>
							</thead>
							<tbody>
								@foreach ($week->days as $day)
								<!--  -->
								@if($day->current)
								<tr class="highlighted_row">@else


								<tr>
									@endif

									<td>@if($enrolled)<span class="table_small">{{$day->modified_name}}</span>
										<!--  -->@else <span class="table_small">{{$day->name}}</span>
										@endif<!--  --> @if($day->current) (today) @endif
									</td>
									<td><button type="button" class="btn btn-info btn-sm"
											data-toggle="modal" data-target="#modal{!! $day->id !!}">
											<!--  -->
											{!! $day->distance !!} miles ...
										</button></td>
									<td>
										<!--  --> @if( !($day->status) )<i
										class="fa fa fa-circle-thin" style="color: red"></i> @else<i
										class="fa fa-check-circle" style="color: green"></i><span
										class="table_small"> Logged: {!! $day -> logged !!}</span>@endif
									</td>
									<!--  -->
									@if( Auth::check() ) @if( $enrolled )
									<td><a
										href="/plan/log/{!! $week->order !!}/{!! $day -> count !!}"
										class="btn btn-info btn-sm">Log</a></td>
									<!--  -->
									@else
									<td><a href="/plan/enroll/{!! $plan->type !!}"
										class="btn btn-info btn-sm">Enroll</a></td>
									<!--  -->
									@endif
									<!--  -->
									@else
									<td><a href="/users/login" class="btn btn-info btn-sm">Log in</a></td>
									@endif
								</tr>

								@include('plans.include.more_details_modal') @endforeach
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
		@endforeach
	</div>

	@endif
</div>

@endsection
