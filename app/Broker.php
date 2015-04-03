<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
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
	// public static function getBestBrokerPastM(){
	// 	//get broker having highest total score in the past month
	// 	return DB::select("SELECT r1.*,`broker`.Broker_Name
	// 						FROM
	// 						((SELECT *,
	// 							COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
	// 							FROM `brokeraccuracy` WHERE MONTH(`Month`)=MONTH(Now())-1 AND YEAR(`Month`) = YEAR(Now())
	// 							ORDER BY Total DESC 
	// 							LIMIT 1) AS r1)
	// 						INNER JOIN `broker` ON r1.Broker_ID = `broker`.Broker_ID");
	// }
	// public static function getBestBrokerThisM(){
	// 	//get broker having highest total score in this month
	// 	return DB::select("SELECT r1.*,`broker`.Broker_Name
	// 						FROM
	// 						((SELECT *,
	// 							COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
	// 							FROM `brokeraccuracy` WHERE MONTH(`Month`)=MONTH(Now()) AND YEAR(`Month`) = YEAR(Now())
	// 							ORDER BY Total DESC 
	// 							LIMIT 1) AS r1)
	// 						INNER JOIN `broker` ON r1.Broker_ID = `broker`.Broker_ID");
	// }
	// public static function getBrokerPastMSortTotal(){
	// 	//get brokers sort by total score from past month
	// 	return DB::select("SELECT r1.*,`broker`.Broker_Name
	// 						FROM
	// 						((SELECT *,
	// 							COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
	// 							FROM `brokeraccuracy` WHERE MONTH(`Month`)=MONTH(Now())-1 AND YEAR(`Month`) = YEAR(Now())
	// 							) AS r1)
	// 						INNER JOIN `broker` ON r1.Broker_ID = `broker`.Broker_ID
	// 						ORDER BY Total DESC");
	// }
	// public static function getBrokerThisMSortTotal(){
	// 	//get brokers sort by total score from This month
	// 	return DB::select("SELECT r1.*,`broker`.Broker_Name
	// 						FROM
	// 						((SELECT *,
	// 							COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
	// 							FROM `brokeraccuracy` WHERE MONTH(`Month`)=MONTH(Now()) AND YEAR(`Month`) = YEAR(Now())
	// 							) AS r1)
	// 						INNER JOIN `broker` ON r1.Broker_ID = `broker`.Broker_ID
	// 						ORDER BY Total DESC");
	// }
	// public static function getBrokerPastNMonthSortTotal($n){
	// 	//get brokers sort by total score from This month
	// 	return DB::select("SELECT r2.*, `broker`.Broker_Name
	// 						FROM
	// 						((SELECT r1.*, COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
	// 							FROM
	// 							((SELECT Broker_ID, SUM(`accAGRO`) AS accAGRO, SUM(`accCONSUMP`) AS accCONSUMP, SUM(`accFINCIAL`) AS accFINCIAL, SUM(`accINDUS`) AS accINDUS, SUM(`accPROPCON`) AS accPROPCON, SUM(`accRESOURC`) AS accRESOURC, SUM(`accTECH`) AS accTECH, SUM(`accSERVICE`) AS accSERVICE, SUM(`totalAGRO`) AS totalAGRO, SUM(`totalCONSUMP`) AS totalCONSUMP, SUM(`totalFINCIAL`) AS totalFINCIAL, SUM(`totalINDUS`) AS totalINDUS, SUM(`totalPROPCON`) AS totalPROPCON, SUM(`totalRESOURC`) AS totalRESOURC, SUM(`totalTECH`) AS totalTECH, SUM(`totalSERVICE`) AS totalSERVICE
	// 								FROM `brokeraccuracy` WHERE MONTH(`Month`)>MONTH(Now())-$n AND YEAR(`Month`) = YEAR(Now())
	// 								GROUP BY Broker_ID) AS r1))
	// 							AS r2)
	// 						INNER JOIN `broker` ON r2.Broker_ID = `broker`.Broker_ID
	// 						ORDER BY Total DESC");
	// }
	// public static function getBestBrokerPastNMonth($n){
	// 	//get brokers sort by total score from This month
	// 	return DB::select("SELECT r2.*, `broker`.Broker_Name
	// 						FROM
	// 						((SELECT r1.*, COALESCE((`accAGRO`+`accCONSUMP`+`accFINCIAL`+`accINDUS`+`accPROPCON`+`accRESOURC`+`accTECH`+`accSERVICE`) / NULLIF((`totalAGRO`+`totalCONSUMP`+`totalFINCIAL`+`totalINDUS`+`totalPROPCON`+`totalRESOURC`+`totalTECH`+`totalSERVICE`),0), 0) AS 'Total'
	// 							FROM
	// 							((SELECT Broker_ID, SUM(`accAGRO`) AS accAGRO, SUM(`accCONSUMP`) AS accCONSUMP, SUM(`accFINCIAL`) AS accFINCIAL, SUM(`accINDUS`) AS accINDUS, SUM(`accPROPCON`) AS accPROPCON, SUM(`accRESOURC`) AS accRESOURC, SUM(`accTECH`) AS accTECH, SUM(`accSERVICE`) AS accSERVICE, SUM(`totalAGRO`) AS totalAGRO, SUM(`totalCONSUMP`) AS totalCONSUMP, SUM(`totalFINCIAL`) AS totalFINCIAL, SUM(`totalINDUS`) AS totalINDUS, SUM(`totalPROPCON`) AS totalPROPCON, SUM(`totalRESOURC`) AS totalRESOURC, SUM(`totalTECH`) AS totalTECH, SUM(`totalSERVICE`) AS totalSERVICE
	// 								FROM `brokeraccuracy` WHERE MONTH(`Month`)>MONTH(Now())-$n AND YEAR(`Month`) = YEAR(Now())
	// 								GROUP BY Broker_ID) AS r1)
	// 							ORDER BY Total DESC
	// 							LIMIT 1)
	// 							AS r2)
	// 						INNER JOIN `broker` ON r2.Broker_ID = `broker`.Broker_ID
	// 						");
	// }


}

