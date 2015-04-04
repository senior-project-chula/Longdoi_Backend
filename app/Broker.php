<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
/**
 * App\Broker
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Brokeraccuracy[] $brokeraccuracies 
 */
/**
 * App\Broker
 *
 * @property integer $Broker_ID 
 * @property string $Broker_Name 
 * @property string $Source 
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Brokeraccuracy[] $brokeraccuracies 
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereBrokerID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereBrokerName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereSource($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereTotalAGRO($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereAccAGRO($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereTotalCONSUMP($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereAccCONSUMP($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereTotalFINCIAL($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereAccFINCIAL($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereTotalINDUS($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereAccINDUS($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereTotalPROPCON($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereAccPROPCON($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereTotalRESOURC($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereAccRESOURC($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereTotalTECH($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereAccTECH($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereTotalSERVICE($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Broker whereAccSERVICE($value)
 */
class Broker extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'broker';
	protected $primaryKey = 'Broker_ID';
	public $timestamps = false;

	public function brokeraccuracies(){
		return $this->hasMany('App\Brokeraccuracy','Broker_ID','Broker_ID');
	}

	public static function getDisticntBroker(){
		//return brokerList with brokerList->Broker_ID and brokerList->Broker_Name
		$brokerList = DB::table('broker')->select('Broker_Name','Broker_ID')->distinct()->get();
		return $brokerList;
	}

	public static function getBestBroker(){
		$bestBroker= DB::select("SELECT `Broker_ID`,`Broker_Name`,COALESCE(`accAGRO` / NULLIF(`totalAGRO`,0), 0) AS 'ARGO', 
			COALESCE(`accCONSUMP` / NULLIF(`totalCONSUMP`,0), 0) AS 'CONSUMP',
			COALESCE(`accFINCIAL` / NULLIF(`totalFINCIAL`,0), 0) AS 'FINCIAL',
			COALESCE(`accINDUS` / NULLIF(`totalINDUS`,0), 0) AS 'INDUS',
			COALESCE(`accPROPCON` / NULLIF(`totalPROPCON`,0), 0) AS 'PROPCON',
			COALESCE(`accRESOURC` / NULLIF(`totalRESOURC`,0), 0) AS 'RESOURC',
			COALESCE(`accTECH` / NULLIF(`totalTECH`,0), 0) AS 'TECH',
			COALESCE(`accSERVICE` / NULLIF(`totalSERVICE`,0), 0) AS 'SERVICE',
			COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
			FROM `broker`
			ORDER BY Total DESC
			LIMIT 1");
		return $bestBroker[0];
	}
	public static function getBestBrokerPastM(){
		//get broker having highest total score in the past month
		return DB::select("SELECT r1.*,`broker`.Broker_Name
							FROM
							((SELECT *,
								COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
								FROM `brokeraccuracy` WHERE MONTH(`Month`)=MONTH(Now())-1 AND YEAR(`Month`) = YEAR(Now())
								ORDER BY Total DESC 
								LIMIT 1) AS r1)
							INNER JOIN `broker` ON r1.Broker_ID = `broker`.Broker_ID");
	}
	public static function getBestBrokerThisM(){
		//get broker having highest total score in this month
		return DB::select("SELECT r1.*,`broker`.Broker_Name
							FROM
							((SELECT *,
								COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
								FROM `brokeraccuracy` WHERE MONTH(`Month`)=MONTH(Now()) AND YEAR(`Month`) = YEAR(Now())
								ORDER BY Total DESC 
								LIMIT 1) AS r1)
							INNER JOIN `broker` ON r1.Broker_ID = `broker`.Broker_ID");
	}
	public static function getBrokerPastMSortTotal(){
		//get brokers sort by total score from past month
		return DB::select("SELECT r1.*,`broker`.Broker_Name
							FROM
							((SELECT *,
								COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
								FROM `brokeraccuracy` WHERE MONTH(`Month`)=MONTH(Now())-1 AND YEAR(`Month`) = YEAR(Now())
								) AS r1)
							INNER JOIN `broker` ON r1.Broker_ID = `broker`.Broker_ID
							ORDER BY Total DESC");
	}
	public static function getBrokerThisMSortTotal(){
		//get brokers sort by total score from This month
		return DB::select("SELECT r1.*,`broker`.Broker_Name
							FROM
							((SELECT *,
								COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
								FROM `brokeraccuracy` WHERE MONTH(`Month`)=MONTH(Now()) AND YEAR(`Month`) = YEAR(Now())
								) AS r1)
							INNER JOIN `broker` ON r1.Broker_ID = `broker`.Broker_ID
							ORDER BY Total DESC");
	}
	public static function getBrokerPastNMonthSortTotal($n){
		//get brokers sort by total score from This month
		return DB::select("SELECT r2.*, `broker`.Broker_Name
							FROM
							((SELECT r1.*, COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
								FROM
								((SELECT Broker_ID, SUM(`accAGRO`) AS accAGRO, SUM(`accCONSUMP`) AS accCONSUMP, SUM(`accFINCIAL`) AS accFINCIAL, SUM(`accINDUS`) AS accINDUS, SUM(`accPROPCON`) AS accPROPCON, SUM(`accRESOURC`) AS accRESOURC, SUM(`accTECH`) AS accTECH, SUM(`accSERVICE`) AS accSERVICE, SUM(`totalAGRO`) AS totalAGRO, SUM(`totalCONSUMP`) AS totalCONSUMP, SUM(`totalFINCIAL`) AS totalFINCIAL, SUM(`totalINDUS`) AS totalINDUS, SUM(`totalPROPCON`) AS totalPROPCON, SUM(`totalRESOURC`) AS totalRESOURC, SUM(`totalTECH`) AS totalTECH, SUM(`totalSERVICE`) AS totalSERVICE
									FROM `brokeraccuracy` WHERE MONTH(`Month`)>MONTH(Now())-$n AND YEAR(`Month`) = YEAR(Now())
									GROUP BY Broker_ID) AS r1))
								AS r2)
							INNER JOIN `broker` ON r2.Broker_ID = `broker`.Broker_ID
							ORDER BY Total DESC");
	}
	public static function getBestBrokerPastNMonth($n){
		//get brokers sort by total score from This month
		return DB::select("SELECT r2.*, `broker`.Broker_Name
							FROM
							((SELECT r1.*, COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
								FROM
								((SELECT Broker_ID, SUM(`accAGRO`) AS accAGRO, SUM(`accCONSUMP`) AS accCONSUMP, SUM(`accFINCIAL`) AS accFINCIAL, SUM(`accINDUS`) AS accINDUS, SUM(`accPROPCON`) AS accPROPCON, SUM(`accRESOURC`) AS accRESOURC, SUM(`accTECH`) AS accTECH, SUM(`accSERVICE`) AS accSERVICE, SUM(`totalAGRO`) AS totalAGRO, SUM(`totalCONSUMP`) AS totalCONSUMP, SUM(`totalFINCIAL`) AS totalFINCIAL, SUM(`totalINDUS`) AS totalINDUS, SUM(`totalPROPCON`) AS totalPROPCON, SUM(`totalRESOURC`) AS totalRESOURC, SUM(`totalTECH`) AS totalTECH, SUM(`totalSERVICE`) AS totalSERVICE
									FROM `brokeraccuracy` WHERE MONTH(`Month`)>MONTH(Now())-$n AND YEAR(`Month`) = YEAR(Now())
									GROUP BY Broker_ID) AS r1)
								ORDER BY Total DESC
								LIMIT 1)
								AS r2)
							INNER JOIN `broker` ON r2.Broker_ID = `broker`.Broker_ID
							");
	}


}

