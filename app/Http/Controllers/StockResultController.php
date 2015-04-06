<?php namespace App\Http\Controllers;

use App\Price;
use App\Recommendation;
use App\Stock;
use Json;
use Input;
use DateTime;

use Illuminate\Http\Request;

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
	public function index($stock_name)
	{
		$stock = Stock::where('Stock_Name','=',$stock_name)->first();
		$Stock_Name = $stock->Stock_Name;
		$lastPrice = $stock->getLastPrice();
		$lastIndex=Price::getLastSetIndex();
		$top3Array=Stock::getTopPick3();
		$recSummary = $stock->getRecFromStockAll();
		$recAll = $stock->getRecOfThsStockAll();

		// dd($recAll);

		
		return view('stockResult')->with('stock_id',$stock->Stock_ID)
		->with('Stock_Name',$Stock_Name)
		->with('lastPrice',$lastPrice)
		->with('lastIndex',$lastIndex)
		->with('top3Array',$top3Array)
		->with('recSummary',$recSummary)
		->with('recAll',$recAll);
	}

	public function withDate(Request $request, $stock_name)
	{
		if($request->has('date')){
			$date = $request->input('date');
			$d =DateTime::createFromFormat('d/m/y', $date);

			$stock = Stock::where('Stock_Name','=',$stock_name)->first();
			$Stock_Name = $stock->Stock_Name;
			$lastPrice = $stock->getLastPrice();
			$lastIndex=Price::getLastSetIndex();
			$top3Array=Stock::getTopPick3();
			$recSummary = $stock->getRecFromStockOnDate($d);
			$recAll = $stock->getRecOfThsStockOnDate($d);

			$dateString = $d->format('d/m/Y');
		// dd($recAll);


			return view('stockResult')->with('stock_id',$stock->Stock_ID)
			->with('Stock_Name',$Stock_Name)
			->with('lastPrice',$lastPrice)
			->with('lastIndex',$lastIndex)
			->with('top3Array',$top3Array)
			->with('recSummary',$recSummary)
			->with('recAll',$recAll)
			->with('dateSearch',$dateString);

		} else {
			// echo $stock_name;
			return redirect('/stock/'.$stock_name);
		}
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
