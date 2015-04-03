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
	public $timestamps = false;

	public function prices(){
		return $this->hasMany('App\Price','Stock_ID','Stock_ID');
	}
	public function recommendation(){
		return $this->belongsTo('App\Recommendation');
	}

	public static function getTopPick3(){
		$maxResearchDateTime = Research::join('recommendation','research.Research_ID','=','recommendation.Research_ID')->where('recommendation.Accuracy','!=','Null')->max('Date');
		// var_dump($maxResearchDateTime);
		$maxResearchDateTime = explode(' ', $maxResearchDateTime);
		$maxResearchDate = $maxResearchDateTime[0];
		// echo $maxResearchDate;
		// get 3 stocks having max recommendation
		return DB::select("SELECT *
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
		

		
	}

}

