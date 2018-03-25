<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Apprentice;
use App\ApprenticeNote;
use App\Http\Requests\ApprenticeFormRequest;
use App\Http\Requests\ApprenticeNoteFormRequest;
use App\Http\Requests\ApprenticeAdminFormRequest;
use Mail;
use Carbon\Carbon;

class ApprenticeController extends Controller {

	public function __construct(Apprentice $apprentice, ApprenticeNote $note)
	{
		$this->middleware('auth', ['except' => ['create','store']]);
		
	    $this->apprentice = $apprentice;
	    
	    $this->note = $note;
	}

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$apprentices = $this->apprentice->where('quality', '!=', '4')->orderBy('id', 'desc')->get();
		
		return view('recruit.apprentice.index', compact('apprentices'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('recruit.apprentice.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ApprenticeFormRequest $request)
	{
		$input = $request->all();
		
		Apprentice::create($input);
		
		$applicant = $this->apprentice->get()->last();
		
		Mail::send('emails.recruitment.apprentice', compact('applicant'), function($message)
   		{
       		$message->from('booking@jakatasalon.co.uk', 'Jakata');
       		$message->to('adam@jakatasalon.co.uk');
       		$message->to('jimmy@jakatasalon.co.uk');
       		$message->subject('New Jakata Apprentice Applicant');
   		});

    	return redirect()->back()->with('message', 'Thanks for your application! If a position is available we will contact you soon');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Apprentice $apprentice)
	{
		return view('recruit.apprentice.show', compact('apprentice'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Apprentice $apprentice)
	{
		return view('recruit.apprentice.edit', compact('apprentice'));
	}
	
	/**
	 * 
	 * Display the note form
	 * 
	 * @return Response
	 */
	public function createNote(Apprentice $apprentice, ApprenticeNote $note) 
	{
		return view('recruit.apprentice.notecreate', compact('apprentice', 'note'));
	}
	
	/**
	 * Store a newly created note.
	 *
	 * @return Response
	 */
	public function storeNote(ApprenticeNoteFormRequest $request, Apprentice $apprentice, ApprenticeNote $note)
	{
		
		$input = $request->all();
		
		ApprenticeNote::create($input);
		
		return redirect()->back()->with('message', 'Note added');
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ApprenticeAdminFormRequest $request, Apprentice $apprentice)
	{
		$apprentice->update($request->all());
		
		return redirect()->back()->with('message', 'The info has been updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
