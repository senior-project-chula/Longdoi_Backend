<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Recommendation;
use App\Research;
use App\Stock;
use App\Price;
use DateTime;


use Illuminate\Http\Request;

class RecommendationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$lastDate=Research::getMaxDate();
		$query = Recommendation::getRecFromDate(date_format($lastDate,'Y-m-d'))->get();
		// dd($query);
		$sumRec = $this->getSummaryRecArray($query);
		$query = Recommendation::getTodayRec();
		
		$todayRec = $this->getTodayRecArray($query);
		$lastIndex=Price::getLastSetIndex();
		$top3Array=Stock::getTopPick3();
		// dd($todayRec);
		return view('stock')->with(array('sumRec'=>$sumRec,'todayRec'=>$todayRec,'lastIndex'=>$lastIndex,'top3Array'=>$top3Array));
	}

	public function search(Request $request)
	{
		if($request->has('date')){
			$dateInput =  $request->input('date');
		} else {
			return redirect("/");
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getSummaryRecArray($query){
		$sumRec = array();
		foreach($query as $row){
			if(!isset($sumRec[$row->Stock_Name])){
				$sumRec[$row->Stock_Name] = array($row->Recommendation=>$row->count);
				$sumRec[$row->Stock_Name]['total']=$row->count;

			} else {
				$sumRec[$row->Stock_Name][$row->Recommendation] = $row->count;
				$sumRec[$row->Stock_Name]['total'] = $sumRec[$row->Stock_Name]['total']+$row->count;
				// var_dump($sumRec[$row->Stock_Name]);
				// echo $row->Stock_Name;
				
			}
			if(!isset($sumRec[$row->Stock_Name]["Price"])){
				$sumRec[$row->Stock_Name]["Price"] = $row->stock()->first()->getLastPrice();
				//return price Array with $priceArray['percentDiff'],['price'],['priceDiff']
			}
		}
		return $sumRec;
	}

	public function getTodayRecArray($query){
		$todayRec = array();
		foreach($query as $row){
			$tempArray = $row->toArray();
			$dateObj = new DateTime($row->Date);
			$dateString = $dateObj->format('d/m/Y');
			$tempArray['Date'] = $dateString;
			$priceList = $row->stock()->first()->prices();
			// $rowDate = new DateTime($row->Date);
			$rowDate = new DateTime('2015-04-05');
			$dateString = $rowDate->format('Y-m-d');
			$price = $priceList->whereRaw("DATE(price.Date)='$dateString'")->first();
			if($price==null){
				//no price available, get the latest price
				// echo "YO";
				$price=$row->stock()->first()->prices()->orderBy('price.Date','DESC')->first();
			}
			// dd($price);
			$tempArray['price'] = array('Closing_Price'=>$price->Closing_Price,'Date'=>$price->Date);
			$todayRec[] = $tempArray;

		}
		return $todayRec;
	}
	
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
