<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Brokeraccuracy extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'brokeraccuracy';
	protected $primaryKey = 'Accuracy_ID';

	public function brokers(){
		return $this->belongsTo('App\Broker');
	}
}

