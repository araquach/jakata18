<?php namespace App\Http\Controllers;
use App\Review;
use App\FeedbackClient;
use App\Blog;
use App\BlogPara;
use App\TeamMember;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Pages Controller
	|--------------------------------------------------------------------------
	|
	| This page renders the main pages of the site
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$reviews = Review::where('salon', '1')->orderByRaw("RAND()")->get();

		$blogs = Blog::take(3)->where('publish', 1)->orWhere('publish', 3)
			->with('paras')->orderBy('created_at', 'desc')->get();

		return view('pages.home', compact('reviews', 'blogs'));
	}

	public function details()
	{
		return view('pages.details');
	}

	public function news()
	{
		return view('pages.news');
	}

	public function oldnews()
	{
		return view('pages.oldnews');
	}

	public function offers()
	{
		return view('pages.offers');
	}

	public function prices()
	{
		return view('pages.prices');
	}

	public function recruitment()
	{
		return view('pages.recruitment');
	}

	public function team()
	{
		$team_members = TeamMember::where('salon', 1)->orderBy('position', 'asc')->get();

		return view('pages.team', compact('team_members'));
	}

	public function salon()
	{
		return view('pages.salon');
	}

	public function teamInd($team)
	{
		$team_member = TeamMember::where('salon', 1)->where('class', $team )->first();

		$reviews = Review::where('salon', 1)->where('staff', 'LIKE', '%' . $team . '%')->orderByRaw("RAND()")->get();

		return view('pages.team_ind', compact('team_member', 'reviews'));

		// dd($team_member->name);
	}

	public function trainee()
	{
		return view('pages.trainee');
	}

	public function booking()
	{
		return view('pages.booking');
	}

	public function leaver()
	{
		return view('pages.leaver');
	}

	public function reviews($stylist = 'all')
	{
		$team_members = TeamMember::where('salon', 1)->orderBy('position', 'asc')->get();

		if($stylist == 'all')
		{
			$reviews = Review::where('salon', '1')
			->orderByRaw("RAND()")->limit(9)->get();
		}
		else
		{
			$reviews = Review::where('salon', '1')
			->where('staff', 'LIKE', '%'.$stylist.'%')
			->orderByRaw("RAND()")->limit(9)->get();
		}

		return view('pages.reviews', compact('reviews', 'team_members'));
	}

	public function offerAll()
	{
		return view('pages.offers.all');
	}

	public function offerAbbi()
	{
		return view('pages.offers.abbi');
	}

	public function offerLayla()
	{
		return view('pages.offers.layla');
	}

	public function offerLauren()
	{
		return view('pages.offers.lauren');
	}

	public function base()
	{
		return view('pages.base');
	}

}
