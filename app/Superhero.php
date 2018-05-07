<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model {


  	/**
  	 * The database table used by the model.
  	 *
  	 * @var string
  	 */
  	protected $table = 'superheros';

  	/**
  	 * The attributes that are mass assignable.
  	 *
  	 * @var array
  	 */
  	protected $fillable = ['nickname', 'real_name', 'origin_description', 'superpowers', 'catch_phrase'];

    /**
     * Associate one Superhero to many Photos.
     * @return [type] [description]
     */
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

}
