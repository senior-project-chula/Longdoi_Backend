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
<<<<<<< HEAD
	public static function getLastTwoDate(){
		$date_time = Recommendation::join('research','recommendation.Research_ID','=','research.Research_ID')
			->orderBy('Date','DESC')->selectRaw('DATE(Date) as Date')->distinct()->take(2)->get();
		return array(new DateTime($date_time[0]->Date),new DateTime($date_time[1]->Date));
=======
	public static function getResearchFrom($broker_id){
		$today=Research::getMaxDate();
		$today->setTime(0, 0, 0);
		$ending_today=Research::getMaxDate();
		$ending_today->setTime(23, 59, 59);
		$recommendations=Research::select('research.Date','research.Link','research.Broker_ID','research.PDF_Name')
		->whereBetween('research.Date',array($today,$ending_today))
		->where('research.Broker_ID','=',$broker_id)
		->join('broker','broker.Broker_ID','=','research.Broker_ID')
		->select('broker.Broker_Name')
		->select('research.Date','research.PDF_Name','research.Link','broker.Broker_Name')
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

	public static function getTodayResearch(){
		$today=Research::getMaxDate();
		$today->setTime(0, 0, 0);
		$ending_today=Research::getMaxDate();
		$ending_today->setTime(23, 59, 59);
		$recommendations=Research::select('research.Date','research.Link','research.Broker_ID','research.PDF_Name')
		->whereBetween('research.Date',array($today,$ending_today))
		->join('broker','broker.Broker_ID','=','research.Broker_ID')
		->select('broker.Broker_Name')
		->select('research.Date','research.PDF_Name','research.Link','broker.Broker_Name')
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

	public static function getResearchFromSpecDate($broker_id,$date){
		$d =DateTime::createFromFormat('d/m/y', $date);
		$today = new DateTime($d->format('Y-m-d'));
		$ending_today=new DateTime($d->format('Y-m-d'));
		$ending_today->modify('+23 hours +59 minutes +59 seconds');	
		$recommendations=Research::select('research.Date','research.Link','research.Broker_ID','research.PDF_Name')
		->whereBetween('research.Date',array($today,$ending_today))
		->where('research.Broker_ID','=',$broker_id)
		->join('broker','broker.Broker_ID','=','research.Broker_ID')
		->select('broker.Broker_Name')
		->select('research.Date','research.PDF_Name','research.Link','broker.Broker_Name')
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

	public static function getResearchSpecDate($date){
		$d =DateTime::createFromFormat('d/m/y', $date);
		$today = new DateTime($d->format('Y-m-d'));
		$ending_today=new DateTime($d->format('Y-m-d'));
		$ending_today->modify('+23 hours +59 minutes +59 seconds');	
		$recommendations=Research::select('research.Date','research.Link','research.Broker_ID','research.PDF_Name')
		->whereBetween('research.Date',array($today,$ending_today))
		->join('broker','broker.Broker_ID','=','research.Broker_ID')
		->select('broker.Broker_Name')
		->select('research.Date','research.PDF_Name','research.Link','broker.Broker_Name')
		->get();
		$ord = array();
		$recommendations2 = array();
		foreach ($recommendations as $recommendation){
			$recommendations2[] = $recommendation;
		    $ord[] = $recommendation->Date;
		}
		array_multisort($ord, SORT_DESC, $recommendations2);
		return $recommendations2;
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
	}

	

}
