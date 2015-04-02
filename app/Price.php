<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'price';
	protected $primaryKey = 'Price_ID';

	public function stocks(){
		return $this->belongsTo('App\Stock');
	}
}
