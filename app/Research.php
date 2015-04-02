<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'research';
	protected $primaryKey = 'Research_ID';

	public function recommendations(){
		return $this->hasMany('App\Recommendation','Research_ID','Research_ID');
	}

	

}
