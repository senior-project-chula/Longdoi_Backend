<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Analysis extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		if(Input::has('input_analysis')){
			$input_analysis = Input::post('input_analysis');
			$broker=Broker::where('Broker_Name','LIKE',"%$input_analysis%")
			->take(1)->get();
			$broker_id=$broker[0]->Broker_ID;
			$recommendations=Recommendation::getRecFrom($broker_id);
			return view('analysisResult')->with('input_analysis',$input_analysis)->with('recommendations',$recommendations);
		}
		else{
			$recommendations=Recommendation::getTodayRec();
			return view('analysis')->with('recommendations',$recommendations);
		}
		// in view:::
		// foreach ($recommendations as $recommendation => $value) {}
		// useable attribute: Description, Recommendation, Date, Link, Brker_Name, Stock_Name, Price
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
