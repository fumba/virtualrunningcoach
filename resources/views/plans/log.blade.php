@extends('master') @section('title', 'Log Miles') @section('content')
<div class="container col-md-8 col-md-offset-2">
	<div class="well well bs-component">

		<form class="form-horizontal" method="post">

			@foreach ($errors->all() as $error)
			<p class="alert alert-danger">{{ $error }}</p>
			@endforeach @if (session('status'))
			<div class="alert alert-success">{{ session('status') }}</div>
			@endif
			<!--  -->

			<!-- token -->
			{{ Form::hidden('_token', csrf_token() ) }}
			<!--  week -->
			{{ Form::hidden('week', $week ) }}
			<!-- day of the week  -->
			{{ Form::hidden('day', $day ) }}


			<fieldset>
				<legend>Select Plan</legend>

				<div class="form-group">
					<div class="col-lg-10">

						<div id="miles_container">
							<input id="miles" type="text" value="0.00" name="miles">
						</div>
						<script>
            $("input[name='miles']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: 'miles'
            });
        </script>

					</div>
				</div>



				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button type="reset" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>

			</fieldset>
		</form>
	</div>
</div>
@endsection
