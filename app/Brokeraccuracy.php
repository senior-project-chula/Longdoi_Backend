<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * App\Brokeraccuracy
 *
 * @property-read \App\Broker $brokers 
 */
/**
 * App\Brokeraccuracy
 *
 * @property integer $Accuracy_ID 
 * @property integer $Broker_ID 
 * @property string $Month 
 * @property integer $totalAGRO 
 * @property integer $accAGRO 
 * @property integer $totalCONSUMP 
 * @property integer $accCONSUMP 
 * @property integer $totalFINCIAL 
 * @property integer $accFINCIAL 
 * @property integer $totalINDUS 
 * @property integer $accINDUS 
 * @property integer $totalPROPCON 
 * @property integer $accPROPCON 
 * @property integer $totalRESOURC 
 * @property integer $accRESOURC 
 * @property integer $totalTECH 
 * @property integer $accTECH 
 * @property integer $totalSERVICE 
 * @property integer $accSERVICE 
 * @property-read \App\Broker $brokers 
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereAccuracyID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereBrokerID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereMonth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereTotalAGRO($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereAccAGRO($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereTotalCONSUMP($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereAccCONSUMP($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereTotalFINCIAL($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereAccFINCIAL($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereTotalINDUS($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereAccINDUS($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereTotalPROPCON($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereAccPROPCON($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereTotalRESOURC($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereAccRESOURC($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereTotalTECH($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereAccTECH($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereTotalSERVICE($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Brokeraccuracy whereAccSERVICE($value)
 */
class Brokeraccuracy extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'brokeraccuracy';
	protected $primaryKey = 'Accuracy_ID';
	public $timestamps = false;

	public function brokers(){
		return $this->belongsTo('App\Broker','Broker_ID');
	}
	public static function getDistinctDate($number=12){
		
		$query = DB::table('brokeraccuracy')->select('Month')->distinct()->orderBy('Month','DESC')->take($number)->get();
		return $query;

	}
	public static function getSumMonthlyAccuracy($monthFrom,$monthTo){
		if(!isset($monthFrom) or !isset($monthTo)){
			return null;
		} 
		// echo $monthFrom."<br><br><br>";
		$sql="SELECT brokeraccuracy.Accuracy_ID, 
					brokeraccuracy.Broker_ID, 
					brokeraccuracy.`Month`, 
					SUM(brokeraccuracy.totalAGRO) AS totalAGRO, 
					SUM(brokeraccuracy.accAGRO) AS accAGRO, 
					SUM(brokeraccuracy.totalCONSUMP) AS totalCONSUMP, 
					SUM(brokeraccuracy.accCONSUMP) AS accCONSUMP, 
					SUM(brokeraccuracy.totalFINCIAL) AS totalFINCIAL, 
					SUM(brokeraccuracy.accFINCIAL) AS accFINCIAL, 
					SUM(brokeraccuracy.totalINDUS) AS totalINDUS, 
					SUM(brokeraccuracy.accINDUS) AS accINDUS, 
					SUM(brokeraccuracy.totalPROPCON) AS totalPROPCON, 
					SUM(brokeraccuracy.accPROPCON) AS accPROPCON, 
					SUM(brokeraccuracy.totalRESOURC) AS totalRESOURC, 
					SUM(brokeraccuracy.accRESOURC) AS accRESOURC, 
					SUM(brokeraccuracy.totalTECH) AS totalTECH, 
					SUM(brokeraccuracy.accTECH) AS accTECH, 
					SUM(brokeraccuracy.totalSERVICE) AS totalSERVICE, 
					SUM(brokeraccuracy.accSERVICE) AS accSERVICE, 
					broker.Broker_Name
				FROM brokeraccuracy INNER JOIN broker ON brokeraccuracy.Broker_ID = broker.Broker_ID
				WHERE `brokeraccuracy`.`Month` >= '$monthFrom' AND `brokeraccuracy`.`Month` <= '$monthTo'
				GROUP BY `brokeraccuracy`.`Broker_ID`";
		// echo $sql;
		$query = DB::select($sql);
		return $query;
	}
}
