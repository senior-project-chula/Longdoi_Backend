<?php namespace App\Http\Controllers;

use App\Broker;
use App\Stock;
use App\Recommendation;
use App\Price;
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
		$bestBroker=Broker::getBestBroker();

		$bestBrokerName = $bestBroker->Broker_Name;
		//lastIndex['Date'],lastIndex['Index'],lastIndex['PercentChange'],lastIndex['ValueChange']
		$lastIndex=Price::getLastSetIndex();
		$top3Array=Stock::getTopPick3();
		//["Stock_ID"]=> string(1) "2" ["Total"]=> string(1) "8" ["_Cat_Total"]=> string(19) "BUY 6,HOLD 1,SELL 1" ["Stock_Name"]=> string(6) "ADVANC" ["Word"]=> NULL ["Type"]=> string(4) "TECH" ["Is_Index"]=> string(1) "0"
		//top3array[0]->Stock_ID return 2
		


	}
	public function test()
	{
		return view('team');
	}

}
