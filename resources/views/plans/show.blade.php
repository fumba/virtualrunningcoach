@extends('master') @section('title', $name.' TRAINING')
@section('content')

<div class="container col-md-8 col-md-offset-2">

	@if ($name)
	<div class="alert alert-success">{!! $name !!} TRAINING</div>
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
											data-toggle="modal" data-target="#modal{!! $day->id !!}">{!!
											$day->distance !!} miles ...</button></td>
									<td>{!! $day->status == 0 ? '<i class="fa fa fa-circle-thin"
										style="color: red"></i>': '<i class="fa fa-check-circle"
										style="color: green"></i>' !!}
									</td>
									<td><a href="/plan/log/{!! $week->id !!}/{!! $day -> id !!}" class="btn btn-info btn-sm">Log</a></td>
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
