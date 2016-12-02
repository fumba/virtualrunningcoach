<div class="modal fade" id="modal{!! $day->id !!}" tabindex="-1"
	role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Week {!! $week->id !!} - {!! $day->name !!}</h4>
			</div>
			<div class="modal-body">
				<p>{!! $day->details !!}</p>

				@if( Auth::check()) <img src="/images/weather_placeholder.png" /><br>
				<a href="/plan/log/{!! $week->id !!}/{!! $day->id !!}">Log your progress</a>

				@else <img src="/images/weather_placeholder.png" /><br> <a
					href="/users/login">Log in to view weather and log your progress</a>
				@endif

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>