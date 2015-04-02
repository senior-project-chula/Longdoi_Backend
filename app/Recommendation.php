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
}
