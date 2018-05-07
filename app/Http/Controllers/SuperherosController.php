<?php namespace App\Http\Controllers;
use App\Superhero;

class SuperherosController extends Controller {

	protected $superhero;

	public function __construct(Superhero $superhero)
	{
		$this->superhero = $superhero;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$superheros = $this->superhero->paginate(5);

		return view('superheros.index',compact('superheros') );
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$v = Validator::make($input, ['nickname' => 'required']);

		if ($v->fails())
		{
			return Redirect::route('superheros.create')
					->withInput()
					->withErrors($v->messages());
		}

		$files = $request->file('photos');
		if ($request->hasFile('photos'))
		{
		    foreach ($files as $file) {
					$file->store('users/' . $this->user->id . '/messages');
		    }
		}

		$superheros = $this->superhero->create($input);

		return Redirect::route('superheros.index')
				->with('flash', 'Your superhero has been registered!');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$superhero = $this->superhero->find([ 'id' => $id]);

		return view('superheros.create',compact('superhero') );
	}


}
