<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;
use App\Http\Requests\ModelFormRequest;
use Carbon\Carbon;
use Auth;
use Mail;

/**
 *
 */
class ModelController extends Controller
{
  public function __construct(Model $model)
	{
		$this->middleware('guest');

		$this->model = $model;
	}

  /**
	 * Display a listing of all the model applicants.
	 *
	 * @return Response
	 */
	public function index()
	{
		$models = $this->model->orderBy('id', 'desc')->get();

		return view('model.index', compact('models'));
	}

  /**
	 * Show the form for creating a new model application.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('model.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ModelFormRequest $request)
	{
		$input = $request->all();

		Model::create($input);

		return redirect()->back()->with('message', 'Thanks for sending your details. We\'ll be in touch when a suitable session comes up');
	}
}
