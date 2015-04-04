<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use DB;
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
		return $this->belongsTo('App\Research');
	}
	public function stock(){
		return $this->hasOne('App\Stock');
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
		
		$today=new DateTime('today');
			$ending_today=new DateTime('today');
			$ending_today->modify('+23 hours +59 minutes +59 seconds');	
		$recommendations=Recommendation::join('research','research.Research_ID','=','recommendation.Research_ID')
		->whereBetween('Date',array($today,$ending_today))
		->where('research.Broker_ID','=',$broker_id)
		->join('broker','broker.Broker_ID','=','research.Broker_ID')
		->get();
		$ord = array();
		$recommendations2 = array();
		foreach ($recommendations as $recommendation){
			$recommendations2[] = $recommendation;
		    $ord[] = strtotime($recommendation->Date);
		}
		array_multisort($ord, SORT_DESC, $recommendations2);
		return $recommendations2;
	}

	public static function getTodayRec(){
		// $time = microtime(TRUE);
		// $mem = memory_get_usage();
		$today=new DateTime('today');
		$ending_today=new DateTime('today');
		$ending_today->modify('+23 hours +59 minutes +59 seconds');	
		$recommendations=Recommendation::join('research','research.Research_ID','=','recommendation.Research_ID')
		->whereBetween('Date',array($today,$ending_today))
		->join('broker','broker.Broker_ID','=','research.Broker_ID')
		->get();
		$ord = array();
		$recommendations2 = array();
		foreach ($recommendations as $recommendation){
			$recommendations2[] = $recommendation;
		    $ord[] = strtotime($recommendation->Date);
		}
		array_multisort($ord, SORT_DESC, $recommendations2);
		// print_r(array(
		//   'memory' => (memory_get_usage() - $mem) / (1024 * 1024),
		//   'seconds' => microtime(TRUE) - $time
		// ));
		// echo("</br>");
		return $recommendations2;
	}
}
