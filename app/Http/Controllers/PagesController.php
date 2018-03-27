<?php namespace App\Http\Controllers;
use App\Review;
use App\FeedbackClient;
use App\Blog;
use App\BlogPara;

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

			dd('blogs');
	
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
		return view('pages.team');
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
		
		return view('pages.reviews', compact('reviews'));
	}
	
	public function jimmy()
	{
		$reviews = Review::where('staff', '=', 'Staff: Jimmy Sharpe')->orderByRaw("RAND()")->get();
		
		return view('pages.team.jimmy', compact('reviews'));
	}
	
	public function natalie()
	{
		$reviews = Review::where('staff', '=', 'Staff: Natalie Doxey')->orderByRaw("RAND()")->get();
		
		return view('pages.team.natalie', compact('reviews'));
	}
	
	public function vikki()
	{
		$reviews = Review::where('staff', '=', 'Staff: Vikki Rowland')->orderByRaw("RAND()")->get();
		
		return view('pages.team.vikki', compact('reviews'));
	}
	
	public function matt()
	{
		$reviews = Review::where('staff', '=', 'Staff: Matthew Lane')->orderByRaw("RAND()")->get();
		
		return view('pages.team.matt', compact('reviews'));
	}
	
	public function lauraC()
	{
		$reviews = Review::where('staff', '=', 'Staff: Laura Hall')->orderByRaw("RAND()")->get();
		
		return view('pages.team.lauraC', compact('reviews'));
	}
	
	public function layla()
	{
		$reviews = Review::where('staff', '=', 'Staff: Layla Relf')->orderByRaw("RAND()")->get();
		
		return view('pages.team.layla', compact('reviews'));
	}
	
	
	public function kebelo()
	{
		return view('pages.kebelo');
	}
	
	public function relocation()
	{
		return view('pages.relocation');
	}
	
	public function mattsback()
	{
		return view('pages.mattsback');
	}
	
	public function test()
	{
		return view('pages.test');
	}

}