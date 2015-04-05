<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Recommendation;
use App\Research;
use App\Stock;


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
		$allRec = array();
		foreach($query as $row){
			if(!isset($allRec[$row->Stock_Name])){
				$allRec[$row->Stock_Name] = array($row->Recommendation=>$row->count);
				$allRec[$row->Stock_Name]['total']=$row->count;

			} else {
				$allRec[$row->Stock_Name][$row->Recommendation] = $row->count;
				$allRec[$row->Stock_Name]['total'] = $allRec[$row->Stock_Name]['total']+$row->count;
				// var_dump($allRec[$row->Stock_Name]);
				// echo $row->Stock_Name;
				
			}
			if(!isset($allRec[$row->Stock_Name]["Price"])){
				$allRec[$row->Stock_Name]["Price"] = $row->stock()->first()->getLastPrice();
				//return price Array with $priceArray['percentDiff'],['price'],['priceDiff']
			}
		}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
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
