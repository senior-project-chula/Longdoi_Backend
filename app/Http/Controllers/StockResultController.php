<?php namespace App\Http\Controllers;

use App\Price;
use App\Recommendation;
use Json;
use Input;

class StockResultController extends Controller {

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
		$stock_id=1;
		return view('stockResult')->with('stock_id',$stock_id);
	}


	public function GetPriceOf()
	{
		$stock_id=1;
		if(Input::has('stock_id')){
			$stock_id=Input::get('stock_id');
		}
		$prices=Price::getPriceOf($stock_id);
		$priceJason = array();
		foreach ($prices as $row) {
			# code...
			$recs=Recommendation::getRecOfSpecDate($stock_id,$row->Date);
			$buy=0;
			$hold=0;
			$sell=0;
			foreach ($recs as $rec) {
				if($rec->recommendation=="BUY" or $rec->recommendation=="TRADE"){
					$buy+=1;
				}elseif ($rec->recommendation=="HOLD") {
					$hold+=1;
				}elseif ($rec->recommendation=="SELL") {
					$sell+=1;
				}
			}
			$time = strtotime($row->Date)*1000;
			$priceJason[]=array("time"=>$time, "price"=>$row->Opening_Price,"BUY"=>$buy,"HOLD"=>$hold,"SELL"=>$sell);
		}
	    return json_encode($priceJason);
	}

}
