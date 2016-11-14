<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketFormRequest;
use App\Ticket;

class TicketsController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(TicketFormRequest $request)
	{
		$slug = uniqid();
		$ticket = new Ticket(array(
			'title' => $request->get('title'),
			'content' => $request->get('content'),
			'slug' => $slug
		));

		$ticket->save();

		return redirect('/contact')->with('status', 'Your ticket has been created! Its unique id is: '.$slug);
		
    //return $request->all();
	}
	
	public function index()
	{
		$tickets = Ticket::all();
		return view('tickets.index', compact('tickets'));
		//alternatives
		//return view('tickets.index')->with('tickets', $tickets);
		//return view('tickets.index', ['tickets'=> $tickets]);
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
	{
		$ticket = Ticket::whereSlug($slug)->firstOrFail();
		return view('tickets.show', compact('ticket'));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
