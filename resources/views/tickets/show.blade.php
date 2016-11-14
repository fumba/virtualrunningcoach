@extends('master')
@section('title', 'View a ticket')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="content">
                    <h2 class="header">{!! $ticket->title !!}</h2>
                    <p> <strong>Status</strong>: {!! $ticket->status ? 'Pending' : 'Answered' !!}</p>
                    <p> {!! $ticket->content !!} </p>
                </div>
				
                <a href="{!! action('TicketsController@edit', $ticket->slug) !!}" class="btn btn-info">Edit</a>
                
				<form method="post" action="{!! action('TicketsController@destroy', $ticket->slug) !!}" class="pull-left">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<div>
							<button type="submit" class="btn btn-warning">Delete</button>
						</div>
				</form>

				<div class="clearfix"></div>
				
            </div>
    </div>

@endsection