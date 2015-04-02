<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use DateTime;
class Stock extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'stock';
	protected $primaryKey = 'Stock_ID';

	public function prices(){
		return $this->hasMany('App\Price','Stock_ID','Stock_ID');
	}
	public function recommendation(){
		return $this->belongsTo('App\Recommendation');
	}

	public static function getTopPick3(){
		//get 3 stocks having max recommendation
		// return DB::select("SELECT *
		// 					FROM (SELECT `Stock_ID`,SUM(Cat_Total) AS Total, GROUP_CONCAT(Recommendation,' ',Cat_Total) _Cat_Total
		// 						FROM (SELECT `Stock_ID`,`Recommendation`,COUNT(*) AS Cat_Total
		// 							FROM `recommendation`
		// 							INNER JOIN ((SELECT * 
	 //            								FROM `research`
	 //            								WHERE DATE(`research`.`Date`) = DATE(Now()- INTERVAL 15 DAY) 			) AS r1)
		// 							ON `recommendation`.`Research_ID`= `r1`.`Research_ID`
		// 							GROUP BY `Stock_ID`,`Recommendation`) AS r2
		// 						GROUP BY `Stock_ID`
		// 						ORDER BY Total DESC
		// 						LIMIT 3) AS r3
		// 					INNER JOIN `stock`
		// 					ON `r3`.Stock_ID=`stock`.Stock_ID");
		return Stock::select('Stock_ID','Stock_Name',DB::raw('SUM(Cat_Total) AS Total')
			->whereHas('recommendation',function($query)
		{
			$query->select('Stock_ID','recommendation',DB::raw('COUNT(*) AS Cat_Total'))->whereHas('research',function($query2)
			{
				$today=new DateTime('today');
				$today->modify('-14 days');
				$ending_today=new DateTime('today');
				$ending_today->modify('-14 days');
				$ending_today->modify('+23 hours +59 minutes +59 seconds');
				$query2->whereBetween('Date',array($today,$ending_today));
			})->groupBy('Stock_ID','recommendation');

		})->groupBy('Stock_ID')
			->orderBy('Stock_ID')
			->get();
	}

}

