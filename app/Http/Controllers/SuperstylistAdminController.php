<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Superstylist;
use App\Http\Requests\SuperstylistFormRequest;
use Carbon\Carbon;
use Auth;
use DB;

class SuperstylistAdminController extends Controller {
	
	public function __construct(Superstylist $superstylist)
	{
		$this->middleware('admin');
		
		$this->superstylist = $superstylist;
	}
	
	/** 
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
	{
		$jakStaffs = DB::table('users')->select('name', 'users.salon_id', DB::raw('count(superstylists.id) as votes'))
					->where('users.salon_id', '=', '1')
					->leftJoin('superstylists', function($join) {
						$join->on('users.id', '=', 'superstylists.voter_id')
						->where('superstylists.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
		
		$pkStaffs = DB::table('users')->select('name', 'users.salon_id', DB::raw('count(superstylists.id) as votes'))
					->where('users.salon_id', '=', '2')
					->leftJoin('superstylists', function($join) {
						$join->on('users.id', '=', 'superstylists.voter_id')
						->where('superstylists.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
		
		return view('superstylist.admin.index', compact('jakStaffs', 'pkStaffs'));
		
	}
	
	public function test()
	{
		$weekStart = Carbon::now()->startOfWeek();
		
		$recipients = DB::table('users')->select('users.email', 'users.salon_id', DB::raw('count(superstylists.id) as votes'))
					->leftJoin('superstylists', function($join) {
						$join->on('users.id', '=', 'superstylists.voter_id')
						->where('superstylists.created_at', '>', Carbon::now()->startOfWeek());
					})->groupBy('users.id')->get();
   		
   		
   		
   		dd($recipients);
		
		return view('superstylist.admin.test', compact('noVotes', 'withVotes', 'jakStaffCount', 'pkStaffCount', 'weekStart'));
	}

}
