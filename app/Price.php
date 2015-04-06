<?php namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Price
 *
 * @property-read \App\Stock $stocks 
 */
/**
 * App\Price
 *
 * @property integer $Price_ID 
 * @property float $Opening_Price 
 * @property float $Closing_Price 
 * @property string $Date 
 * @property integer $Stock_ID 
 * @property-read \App\Stock $stocks 
 * @method static \Illuminate\Database\Query\Builder|\App\Price wherePriceID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Price whereOpeningPrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Price whereClosingPrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Price whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Price whereStockID($value)
 */
class Price extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'price';
	protected $primaryKey = 'Price_ID';
	public $timestamps = false;
	
	public function stocks(){
		return $this->belongsTo('App\Stock');
	}

	public static function getLastSetIndex(){
		$query = Price::where('Stock_ID','=','102')->orderBy('Date','asc')->take(2)->get();
		$todayIndex = $query[0]->Closing_Price;
		$ytdIndex = $query[1]->Closing_Price;
		// echo $query[1];
		$valueChange = ($todayIndex-$ytdIndex);
		$percentChange = ($valueChange/$ytdIndex)*100;
		$percentChange = number_format((float)$percentChange, 2, '.', '');
		return array('Date'=>$query[0]->Date,'Index'=>$todayIndex,'PercentChange'=>$percentChange,'ValueChage'=>$valueChange);
	}
	public static function getPriceOf($stock_id){
		return Price::where('Stock_ID','=',$stock_id)->orderBy('Date','DESC')->limit(30)->get();
	}
}
