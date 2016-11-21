@extends('master') @section('title', 'Blog') @section('content')

<div class="container col-md-8 col-md-offset-2">

	@if ($type)
	<div class="alert alert-success">{!! $type !!} TRAINING</div>
	@endif @if ($weeks->isEmpty())
	<p>Data not found.</p>
	@else
	<div id="accordion" role="tablist" aria-multiselectable="true">
		@foreach ($weeks as $week)
		<div class="card">
			<div class="card-header" role="tab" id="heading{!! $week->id !!}">
				<h5 class="mb-0">
					<a data-toggle="collapse" data-parent="#accordion"
						href="#collapse{!! $week->id !!}"
						aria-controls="collapse{!! $week->id !!}"> Week {!! $week->id !!}
					</a>
				</h5>
			</div>

			<div id="collapse{!! $week->id !!}" class="collapse" role="tabpanel"
				aria-labelledby="heading{!! $week->id !!}">
				<div class="card-block">Anim pariatur cliche reprehenderit, enim
					eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
					officia aute, non cupidatat skateboard dolor brunch. Food truck
					quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
					aliqua put a bird on it squid single-origin coffee nulla assumenda
					shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
					anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
					butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
					denim aesthetic synth nesciunt you probably haven't heard of them
					accusamus labore sustainable VHS.</div>
			</div>
		</div>
		@endforeach
	</div>

	@endif
</div>

@endsection
