<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\CampaignRespondant;
use App\Http\Requests\CampaignFormRequest;
use Carbon\Carbon;
use Auth;
use Mail;

class CampaignController extends Controller
{
	public function __construct(CampaignRespondant $respondant, Campaign $campaign)
	{
		$this->middleware('guest');
		
		$this->campaign = $campaign;
		
		$this->respondant = $respondant;
	}

	/** 
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$campaigns = $this->campaign->orderBy('id', 'desc')->get();
		
		return view('campaign.index', compact('campaigns'));
		
		// return dd($stylists);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('campaign.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CampaignFormRequest $request)
	{
		$input = $request->all();

		Campaign::create($input);

		return redirect()->back()->with('message', 'Campaign Created Successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Campaign $campaign)
	{
		return view('campaign.show', compact('campaign'));
	}

}
