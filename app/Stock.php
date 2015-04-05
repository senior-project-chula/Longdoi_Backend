<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use DateTime;
/**
 * App\Stock
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Price[] $prices 
 * @property-read \App\Recommendation $recommendation 
 */
/**
 * App\Stock
 *
 * @property integer $Stock_ID 
 * @property string $Stock_Name 
 * @property string $Word 
 * @property string $Type 
 * @property boolean $Is_Index 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Price[] $prices 
 * @property-read \App\Recommendation $recommendation 
 * @method static \Illuminate\Database\Query\Builder|\App\Stock whereStockID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stock whereStockName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stock whereWord($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stock whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Stock whereIsIndex($value)
 */
class Stock extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'stock';
	protected $primaryKey = 'Stock_ID';
	public $timestamps = false;

	public function prices(){
		return $this->hasMany('App\Price','Stock_ID','Stock_ID');
	}
	public function recommendations(){
		return $this->hasMany('App\Recommendation','Stock_ID','Stock_ID');
	}

	public static function getTopPick3(){
		$maxResearchDateTime = Research::join('recommendation','research.Research_ID','=','recommendation.Research_ID')->where('recommendation.Accuracy','!=','Null')->max('Date');
		// var_dump($maxResearchDateTime);
		$maxResearchDateTime = explode(' ', $maxResearchDateTime);
		$maxResearchDate = $maxResearchDateTime[0];
		// echo $maxResearchDate;
		// get 3 stocks having max recommendation
		$top3 = DB::select("SELECT *
							FROM (SELECT `Stock_ID`,SUM(Cat_Total) AS Total, GROUP_CONCAT(Recommendation,' ',Cat_Total) _Cat_Total
								FROM (SELECT `Stock_ID`,`Recommendation`,COUNT(*) AS Cat_Total
									FROM `recommendation`
									INNER JOIN ((SELECT * 
	            								FROM `research`
	            								WHERE DATE(`research`.`Date`) = DATE('$maxResearchDate') ) AS r1)
									ON `recommendation`.`Research_ID`= `r1`.`Research_ID`
									GROUP BY `Stock_ID`,`Recommendation`) AS r2
								GROUP BY `Stock_ID`
								ORDER BY Total DESC
								LIMIT 3) AS r3
							INNER JOIN `stock`
							ON `r3`.Stock_ID=`stock`.Stock_ID");
		$top3Array = array();
		foreach($top3 as $member){
			$stockMember = array();
			$stock = Stock::find($member->Stock_ID);
			$stockMember['StockID'] = $member->Stock_ID;
			$stockMember['Stock_Name'] = $stock->Stock_Name;
			$recSummary = $stock->getRecFromStockOnDate($maxResearchDate);
			$recLastPrice = $stock->getLastPrice();
			$stockMember['recSummary'] = $recSummary;
			$stockMember['lastPrice'] = $recLastPrice;
			$top3Array[] = $stockMember;

		}
		return $top3Array;
	}
	public function getLastPrice(){
		$lastPrice = $this->prices()->orderBy('Date','DESC')->take(2)->get();
		$todayPrice = $lastPrice[0];
		$ytdPrice = $lastPrice[1];
		// var_dump($lastPrice);
		// echo '<br><br>';
		$priceDiff = $todayPrice->Closing_Price - $ytdPrice->Closing_Price;
		$percentDiff = ($priceDiff/$ytdPrice->Closing_Price)*100;
		$percentDiff = number_format($percentDiff,2,'.','');
		return array('price'=>$todayPrice->Closing_Price,'percentDiff'=>$percentDiff,'priceDiff'=>$priceDiff);

	}
	public function getRecFromStockOnDate($date){
		$dateTime = new DateTime($date);
		$dateString = $dateTime->format('Y-m-d');
		$rec = $this->recommendations()
					->join('research','recommendation.Research_ID','=','research.Research_ID')
					->whereRaw("DATE(Date)='$dateString'")->select('Stock_ID','Recommendation','Date')->get();
		$recSummary = array('BUY'=>0,'SELL'=>0,'HOLD'=>0);
		foreach($rec as $r){
			$recSummary[$r->Recommendation] = $recSummary[$r->Recommendation]+1;
		}
		$recSummary['total'] = $recSummary['BUY']+$recSummary['SELL']+$recSummary['HOLD'];
		return $recSummary;
	}
		

		

}

