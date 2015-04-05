<?php namespace App\Http\Controllers;

use App\Http\Requests;
// use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use App\Broker;
use App\Research;
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
			$input_analysis = Input::input('input_analysis');
			$input_analysis=strtoupper($input_analysis);
			$broker=Broker::where('Broker_Name','LIKE',"%$input_analysis%")
			->take(1)->get();
			if(sizeof($broker)>0){
				$broker_id=$broker[0]->Broker_ID;
				$recommendations=Research::getResearchFrom($broker_id);
				echo "search<br>";
				return view('analysis')->with('input_analysis',$input_analysis)->with('recommendations',$recommendations)->with('isOneBroker',1)->with('broker_id',$broker_id);
			}else{ 
				$recommendations=Research::getTodayResearch();
				return view('analysis')->with('input_analysis',$input_analysis." not found.")->with('recommendations',$recommendations)->with('isOneBroker',0);
			}
		}
		else{
			$recommendations=Research::getTodayResearch();
             // dd($recommendations);
			return view('analysis')->with('recommendations',$recommendations)->with('isOneBroker',0);
		}
		// in view:::
		// foreach ($recommendations as $recommendation => $value) {}
		// useable attribute: Date, PDF_Name, Link, Broker_Name
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

	public function search(Request $request)
	{
		if($request->has('input_analysis')){
			$input_analysis = $request->input('input_analysis');
			$input_analysis=strtoupper($input_analysis);
			$broker=Broker::where('Broker_Name','LIKE',"%$input_analysis%")
			->take(1)->get();
			if(sizeof($broker)>0){
				$broker_id=$broker[0]->Broker_ID;
				$recommendations=Research::getResearchFrom($broker_id);
				return view('analysis')->with('input_analysis',$input_analysis)->with('recommendations',$recommendations)->with('isOneBroker',1)->with('broker_id',$broker_id);
			}else{ 
				$recommendations=Research::getTodayResearch();
				return view('analysis')->with('input_analysis',$input_analysis." not found.")->with('recommendations',$recommendations)->with('isOneBroker',0);
			}
		}
		if($request->has('example-datepicker2')){

			$date = $request->input('example-datepicker2');
			if($request->input('isOneBroker')==1){
				$broker_id=$request->input('broker_id');
				$recommendations=Research::getResearchFromSpecDate($broker_id,$date);
				return view('analysis')->with('input_analysis',Broker::find($broker_id)->Broker_Name." ".$date)->with('recommendations',$recommendations)->with('isOneBroker',1)->with('broker_id',$broker_id);
			}else{
				$recommendations=Research::getResearchSpecDate($date);
				return view('analysis')->with('input_analysis',$date)->with('recommendations',$recommendations)->with('isOneBroker',0);
			}
		}
		$recommendations=Research::getTodayResearch();
		return view('analysis')->with('recommendations',$recommendations)->with('isOneBroker',0);
	}

}
