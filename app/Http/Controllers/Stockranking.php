<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Brokeraccuracy;
use App\Broker;

use Illuminate\Http\Request;

class Stockranking extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Getting broker ranking
		//getting month list
		$distinctDate = Brokeraccuracy::getDistinctDate();
		$onemonth = $this->getOneMonthScore($distinctDate);
		//nested array for $accuracyArrayOneMonth['KKTRADE'] return associative array with key = field name inside
		$threemonth = $this->getMonthScore($distinctDate,3);
		$sixmonth = $this->getMonthScore($distinctDate,6);
		$allscore = $this->getOverAllScore();
		// dd($threemonth);

		// if(Request::has('sortBy')){
		// 	echo Request::input('sortBy');

		// }
		
		return view('brokerRanking')->with(array('one'=>$onemonth,'three'=>$threemonth,'six'=>$sixmonth,'all'=>$allscore));


	}

	public function getOneMonthScore($monthList){
		//query all and return only one month array
		$monthString = $monthList[0]->Month;
		$accuList = Brokeraccuracy::where('Month','=',$monthString)->get();
		$accuraycyArray = array();
		// dd($accuList[0]);
		$measureAttr = $this->getAttributeFromArray($accuList[0]->toArray());

		foreach($accuList as $row){
			$brokerName = $row->brokers->Broker_Name;
			$tempArray = $row->toArray();
			unset($tempArray['broker']);
			$tempRow = $this->calcuateScoreEachRow($measureAttr,$tempArray);
			$accuraycyArray[$brokerName] = $tempRow;
			
			// var_dump($accuraycyArray);
			
		}
		return $accuraycyArray;

	}
	public function getMonthScore($monthList,$n){
		//query all and return sum of month array
		// $monthString = array();
		$lastMonth = $monthList[0]->Month;
		$firstMonth = $monthList[$n-1]->Month;
		// echo $firstMonth;
		$monthAccurcy = Brokeraccuracy::getSumMonthlyAccuracy($firstMonth,$lastMonth);
		$outputArray = array();
		//get available attributes
		$measureAttr = $this->getAttribute($monthAccurcy);
		foreach($monthAccurcy as $row){
			$brokerName = $row->Broker_Name;
			// echo $brokerName;
			$tempArray = get_object_vars($row);
			$tempRow = $this->calcuateScoreEachRow($measureAttr,$tempArray);
			$outputArray[$brokerName] = $tempRow;
		}
		return $outputArray;
		
	}

	public function getOverAllScore(){
		$allScore = Broker::all();
		$measureAttr = $this->getAttributeFromArray($allScore[0]->toArray());
		$outputArray = array();
		foreach($allScore as $row){
			$brokerName = $row->Broker_Name;
			// echo $brokerName;
			$tempArray = $row->toArray();
			$tempRow = $this->calcuateScoreEachRow($measureAttr,$tempArray);
			$outputArray[$brokerName] = $tempRow;
		}
		return $outputArray;
	}

	public function getAttribute($queryArray){
		//get attribute
		$attr = array_keys(get_object_vars($queryArray[0]));

			// var_dump($attr);
		$accuAttr = array();
		//mesuareAttr contain only measurement string eg. PROPCON
		$measureAttr = array();
		foreach($attr as $attribute){
			// echo $attribute;
			// echo strpos($attribute,'acc');
			if((strpos($attribute,'acc')!==false or strpos($attribute,'total')!==false)){
				$accuAttr[] = $attribute;
				if(strpos($attribute,'acc')!==false){
					$measureAttr[] = str_replace('acc','', $attribute);
				}
			}
		}
		return $measureAttr;
	}
	public function getAttributeFromArray($queryArray){
		//get attribute
		$attr = array_keys($queryArray);

			// var_dump($attr);
		$accuAttr = array();
		//mesuareAttr contain only measurement string eg. PROPCON
		$measureAttr = array();
		foreach($attr as $attribute){
			// echo $attribute;
			// echo strpos($attribute,'acc');
			if((strpos($attribute,'acc')!==false or strpos($attribute,'total')!==false)){
				$accuAttr[] = $attribute;
				if(strpos($attribute,'acc')!==false){
					$measureAttr[] = str_replace('acc','', $attribute);
				}
			}
		}
		return $measureAttr;
	}
	public function calcuateScoreEachRow($measureAttr,$tempArray){
		$sumAcc = 0;
		$sumTotal = 0;
		$tempRow = array();
		foreach($measureAttr as $measure){
			$acc = $tempArray['acc'.$measure];
			$total = $tempArray['total'.$measure];
			if($tempArray['total'.$measure]!=0){
				$value = ($acc/$total)*100;
				$tempRow[$measure] = array('percent'=>number_format($value,2,'.',''),'total'=>$total,'acc'=>$acc);
				$sumAcc = $sumAcc+$acc;$sumTotal=$sumTotal+$total;
			} else {
				$tempRow[$measure] = array('percent'=>0,'total'=>$total,'acc'=>$acc);
			}
		}
		if($sumTotal!=0){
			$totalPercent = ($sumAcc/$sumTotal)*100;
		}else{
			$totalPercent = 0;
		}

		$tempRow['Overall'] = array('percent'=>number_format($totalPercent,2,'.',''),'total'=>$sumTotal,'acc'=>$sumAcc);
		return $tempRow;
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
