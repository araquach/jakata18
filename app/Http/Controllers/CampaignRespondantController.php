<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\CampaignRespondant;
use App\Http\Requests\CampaignRespondantFormRequest;
use Carbon\Carbon;
use Mail;

class CampaignRespondantController extends Controller
{
	public function __construct(CampaignRespondant $respondant, Campaign $campaign)
	{
		// $this->middleware('auth', ['except' => ['create','store']]);

		$this->middleware('guest');
		
		$this->campaign = $campaign;
		
		$this->respondant = $respondant;
	}

	public function hairdo()
	{
		return view('campaign.respondant.hairdo');
	}

	/** 
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$respondants = $this->respondants->orderBy('id', 'desc')->get();
		
		return view('campaign.respondant.index', compact('respondants'));
		
		// return dd($stylists);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('campaign.respondant.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CampaignRespondantFormRequest $request)
	{
		$input = $request->all();

		CampaignRespondant::create($input);

		return redirect()->to(app('url')->previous(). '#success')->with('message', 'Thanks for entering');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Campaign $campaign)
	{
		return view('campaign.respondant.show', compact('respondant'));
	}

}
