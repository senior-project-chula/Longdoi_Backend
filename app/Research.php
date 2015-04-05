<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;
/**
 * App\Research
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Recommendation[] $recommendations 
 */
/**
 * App\Research
 *
 * @property integer $Research_ID 
 * @property integer $Broker_ID 
 * @property string $PDF_Name 
 * @property string $Link 
 * @property string $Stock 
 * @property string $Date 
 * @property integer $extracted 
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Recommendation[] $recommendations 
 * @method static \Illuminate\Database\Query\Builder|\App\Research whereResearchID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Research whereBrokerID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Research wherePDFName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Research whereLink($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Research whereStock($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Research whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Research whereExtracted($value)
 */
class Research extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'research';
	protected $primaryKey = 'Research_ID';
	public $timestamps = false;

	public function recommendations(){
		return $this->hasMany('App\Recommendation','Research_ID','Research_ID');
	}
	public static function getMaxDate(){
		$date_time = Recommendation::join('research','recommendation.Research_ID','=','research.Research_ID')
			->max('Date');
		return new DateTime($date_time);
	}
	public static function getLastTwoDate(){
		$date_time = Recommendation::join('research','recommendation.Research_ID','=','research.Research_ID')
			->orderBy('Date','DESC')->selectRaw('DATE(Date) as Date')->distinct()->take(2)->get();
		return array(new DateTime($date_time[0]->Date),new DateTime($date_time[1]->Date));
	}

	

}
