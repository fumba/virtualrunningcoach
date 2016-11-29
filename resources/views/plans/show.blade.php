@extends('master') @section('title', $type.' TRAINING')
@section('content')

<div class="container col-md-8 col-md-offset-2">

	@if ($type)
	<div class="alert alert-success">{!! $type !!} TRAINING</div>
	@endif @if ($weeks->isEmpty())
	<p>Data not found.</p>
	@else
	<div id="accordion" role="tablist" aria-multiselectable="true">
		@foreach ($weeks as $week)
		<div class="card card-text">
			<div class="card-header" role="tab" id="heading{!! $week->id !!}">
				<h5 class="mb-0">
					<a data-toggle="collapse" data-parent="#accordion"
						href="#collapse{!! $week->id !!}"
						aria-controls="collapse{!! $week->id !!}"> Week {!! $week->id !!}
					</a>
				</h5>
			</div>

			<div id="collapse{!! $week->id !!}"
				class="{!! $week->id == 1 ? 'collapse in': 'collapse' !!}"
				role="tabpanel" aria-labelledby="heading{!! $week->id !!}">
				<div class="card-block">

					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life
						accusamus terry richardson ad squid. 3 wolf moon officia aute, non
						cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
						laborum eiusmod.</p>

					<div class="table-responsive plans-table">
					<table class="table table-inverse">
						<thead>
						</thead>
						<tbody>
							@foreach ($week->days as $day)
							<tr>
								<td>{!! $day->name !!}</td>
								<td><button type="button" class="btn btn-info btn-sm"
										data-toggle="modal" data-target="#modal{!! $day->id !!}"> {!! $day->distance !!} miles ... </button>
								</td>
								<td>{!! $day->status == 0 ? 'N': 'C' !!}</td>
								<td><button type="button" class="btn btn-info btn-sm">Log</button></td>
							</tr>

							<div class="modal fade" id="modal{!! $day->id !!}" tabindex="-1"
								role="dialog" aria-labelledby="myLargeModalLabel">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<h4 class="modal-title">Week {!! $week->id !!} - {!!
												$day->name !!}</h4>
										</div>
										<div class="modal-body">
											<p>{!! $day->details !!}</p>
											<img src="/images/weather_placeholder.png" /><br> <a
												href="/users/login">Log in to view weather and log your
												progress</a>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default"
												data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>

							@endforeach
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
