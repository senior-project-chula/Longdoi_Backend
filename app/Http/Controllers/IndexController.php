<?php namespace App\Http\Controllers;

use App\Broker;
use App\Stock;
use App\Recommendation;
use DB;
class IndexController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
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
		$name= Stock::getTopPick3();
		// $name=Recommendation::test1();
		dd($name);
		// return view('home')->with('name',$name->Broker_Name);
	}

}
