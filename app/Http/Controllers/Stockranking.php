<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Brokeraccuracy;
use App\Broker;
use Input;
use Session;

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

		// $i=0;
		$param = array('one'=>$onemonth,'three'=>$threemonth,'six'=>$sixmonth,'all'=>$allscore);
		foreach($param as $key=>&$array){
			$this->sortByKey($array,'Overall');
		}
		Session::flash('brokerRankingData',$param);
		return view('brokerRanking')->with($param)->with('selected','Overall');


	}
	public function search(Request $request){
		//Getting broker ranking
		//getting month list
		
		// // dd($threemonth);

		if($request->has('sortBy')){
			$sortBy =  $request->input('sortBy');
		} else {
			return redirect("/");
		}
		$i=0;
		if(Session::has('brokerRankingData')){
			$rakingData = Session::get('brokerRankingData');
			$onemonth=$rakingData['one'];
			$threemonth=$rakingData['three'];
			$sixmonth=$rakingData['six'];
			$allscore=$rakingData['all'];
			
			// dd($onemonth);
		} else {
			$distinctDate = Brokeraccuracy::getDistinctDate();
			$onemonth = $this->getOneMonthScore($distinctDate);
		//nested array for $accuracyArrayOneMonth['KKTRADE'] return associative array with key = field name inside
			$threemonth = $this->getMonthScore($distinctDate,3);
			$sixmonth = $this->getMonthScore($distinctDate,6);
			$allscore = $this->getOverAllScore();
		}


		$param = array('one'=>$onemonth,'three'=>$threemonth,'six'=>$sixmonth,'all'=>$allscore);
		foreach($param as $key=>&$array){
			// var_dump($array);
			// echo '<br><br>';
			// echo $array;
			$this->sortByKey($array,$sortBy);
		}
		Session::flash('brokerRankingData',$param);
		return view('brokerRanking')->with($param)->with('selected',$sortBy);

	}

	public function sortByKey(&$rankArray,$keyToSort){
		$percent = array();
		foreach($rankArray as $broker=>$row){
			$percent[$broker] = $row[$keyToSort]['percent']; 
		}
		array_multisort($percent,SORT_DESC,$rankArray);
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
