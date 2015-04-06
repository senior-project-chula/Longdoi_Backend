<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use DB;
/**
 * App\Recommendation
 *
 * @property-read \App\Research $research 
 * @property-read \App\Stock $stock 
 */
/**
 *
 * @property integer $Recommendation_ID 
 * @property float $Accuracy 
 * @property string $Description 
 * @property string $Recommendation 
 * @property integer $Research_ID 
 * @property integer $Stock_ID 
 * @property string $created_time 
 * @property-read \App\Research $research 
 * @property-read \App\Stock $stock 
 * @method static \Illuminate\Database\Query\Builder|\App\Recommendation whereRecommendationID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recommendation whereAccuracy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recommendation whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recommendation whereRecommendation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recommendation whereResearchID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recommendation whereStockID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Recommendation whereCreatedTime($value)
 */
class Recommendation extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'recommendation';
	protected $primaryKey = 'Recommendation_ID';
	public $timestamps = false;

	public function research(){
		return $this->belongsTo('App\Research','Research_ID','Research_ID');
	}
	public function stock(){
		return $this->hasOne('App\Stock','Stock_ID','Stock_ID');
	}
	public static function getRecByStockFromDate($date){
		return Recommendation::join('stock','recommendation.Stock_ID','=','stock.Stock_ID')
			->join('research','recommendation.Research_ID','=','research.Research_ID')
			->whereRaw("DATE(research.Date)='$date'")->groupBy('recommendation.Stock_ID','recommendation.Recommendation')
			->select('stock.Stock_Name','stock.Stock_ID', 'recommendation.Recommendation', 'research.Date')->selectRaw('count(recommendation.Recommendation_ID) AS count');
	}

	

	public static function test1(){
		return Recommendation::select('Stock_ID','recommendation',DB::raw('COUNT(*) AS Cat_Total'),DB::raw('group_concat(Recommendation_ID)'))
		->whereHas('research',function($query2)
			{
				$today=new DateTime('today');
				$today->modify('-14 days');
				$ending_today=new DateTime('today');
				$ending_today->modify('-14 days');
				$ending_today->modify('+23 hours +59 minutes +59 seconds');
				$query2->whereBetween('Date',array($today,$ending_today));
			})->groupBy('Stock_ID','recommendation')
		->orderBy('Stock_ID')
		->get();
	}

	public static function getRecFrom($broker_id){
		$yesterday=new DateTime('today');
		$yesterday->modify('-10 days');
		$today=new DateTime('today');
			$ending_today=new DateTime('today');
			$ending_today->modify('-10 days');
			$ending_today->modify('+23 hours +59 minutes +59 seconds');	
		$recommendations=Recommendation::select('Description','Recommendation','Research_ID','Stock_ID')
		->join('research','research.Research_ID','=','recommendation.Research_ID')
		->whereBetween('research.Date',array($today,$ending_today))
		->where('research.Broker_ID','=',$broker_id)
		->select('research.Date','research.Link','research.Broker_ID')
		->join('broker','broker.Broker_ID','=','research.Broker_ID')
		->select('broker.Broker_Name')
		->join('stock','stock.Stock_ID','=','recommendation.Stock_ID')
		->join('price','price.Stock_ID','=','stock.Stock_ID')
		->where('price.Date','=',$yesterday)
		->select('Description','Recommendation','research.Date','research.Link','broker.Broker_Name','Stock_Name','price.Closing_price as Price')
		->get();
		$ord = array();
		$recommendations2 = array();
		foreach ($recommendations as $recommendation){
			$recommendations2[] = $recommendation;
		    $ord[] = $recommendation->Date;
		}
		array_multisort($ord, SORT_DESC, $recommendations2);
		return $recommendations2;
	}

	public static function getTodayRec(){
		$dateList = Research::getLastTwoDate();
		$yesterday=$dateList[1];
		$today=$dateList[0];
		$stringDate = $today->format('Y-m-d');
		// dd($today);
		// $ending_today->modify('+23 hours +59 minutes +59 seconds');	
		$recommendations=Recommendation::join('research','research.Research_ID','=','recommendation.Research_ID')
		->select('Description','Recommendation','Research_ID','Stock_ID')
		->whereRaw("DATE(research.Date) = '$stringDate'")
		->select('research.Date','research.Link','research.Broker_ID')
		->join('broker','broker.Broker_ID','=','research.Broker_ID')
		->select('broker.Broker_Name')
		->join('stock','stock.Stock_ID','=','recommendation.Stock_ID')
		->select('Description','Recommendation','research.Date','research.Link','broker.Broker_Name','Stock_Name','stock.Stock_ID')
		->orderBy('research.Date','DESC')
		->get();
		
		return $recommendations;
	}
	public static function getRecFromDate($date){
		$stringDate = $date->format('Y-m-d');
		// dd($today);
		// $ending_today->modify('+23 hours +59 minutes +59 seconds');	
		$recommendations=Recommendation::join('research','research.Research_ID','=','recommendation.Research_ID')
		->select('Description','Recommendation','Research_ID','Stock_ID')
		->whereRaw("DATE(research.Date) = '$stringDate'")
		->select('research.Date','research.Link','research.Broker_ID')
		->join('broker','broker.Broker_ID','=','research.Broker_ID')
		->select('broker.Broker_Name')
		->join('stock','stock.Stock_ID','=','recommendation.Stock_ID')
		->select('Description','Recommendation','research.Date','research.Link','broker.Broker_Name','Stock_Name','stock.Stock_ID')
		->orderBy('research.Date','DESC')
		->get();
		
		return $recommendations;
	}
	public static function getRecOfSpecDate($stock_id,$date){

		return Recommendation::select('Stock_ID','recommendation')
		->where('Stock_ID','=',$stock_id)
		->whereHas('research',function($query2) use ($date)
			{
				// $today = new DateTime($date);
				// $ending_today=new DateTime($d->format('Y-m-d'));
				// $ending_today->modify('+23 hours +59 minutes +59 seconds');	
				$query2->whereRaw("DATE(Date)=DATE('$date')");
			})->get();
	}
}
